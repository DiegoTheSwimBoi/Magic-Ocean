<?php

namespace App\models;

use PDO;

class Comment
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllComments($id)
    {
        $stmt = $this->pdo->prepare("SELECT  comments.*, users.login, users.avatar 
                                         FROM comments INNER JOIN users ON 
                                         users.id = comments.user_id
                                         WHERE post_id=?");
        $stmt->execute([$id]);

        return $stmt->fetchAll();
    }
	
	    public function getAllCommentsForPanel()
    {
        $stmt = $this->pdo->query("SELECT  comments.*, users.login, users.avatar 
                                         FROM comments INNER JOIN users ON 
                                         users.id = comments.user_id");

        return $stmt->fetchAll();
    }
	


    public function insertComment($data)
    {
        $stmt = $this->pdo->prepare("INSERT into comments
                                 (user_id,text,post_id,status)
                                 VALUES (:user_id,:text,:post_id,:status)");
        $stmt->execute([
            "user_id"=>$data["user_id"],
            "text"=>$data["text"],
            "post_id"=>$data["post_id"],
            "status"=>"Новый",
        ]);
    }

    public function deleteComment($id){
        $stmt=$this->pdo->prepare("DELETE from comments
                                         WHERE id=?");
        $stmt->execute([$id]);
    }

}