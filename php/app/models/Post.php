<?php

namespace App\models;

use PDO;

class Post
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function insertPost($data)
    {

        $stmt = $this->pdo->prepare('INSERT INTO posts
                                         (title,description,text,created_at,subcategories_id)
                                         VALUES (:title,:description,:text,:created_at,:subcategories_id)');
        $stmt->execute([
            'title' => $data['title'],
            'description' => $data['description'],
            'text' => $data['text'],
            'created_at' => date('Y-m-d'),
            'subcategories_id' => $data['subcategories_id']
        ]);

        return $this->pdo->lastInsertId();
    }

    public function insertImg($images, $id)
    {
        $stmt = $this->pdo->prepare("INSERT INTO images
                                        (name, post_id)
                                        VALUES (:name,:post_id) ");
        if (!empty($images)) {
            foreach ($images as $img) {
                $stmt->execute([
                    "name" => $img,
                    "post_id" => $id
                ]);
            }
        }
        return $this->pdo->lastInsertId();
    }

	public function getPostsForPanel()
    {
        $stmt = $this->pdo->query("SELECT * FROM posts");
        return $stmt->fetchAll();
    }
	

    public function getAllPosts($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM posts
                                            WHERE subcategories_id=?");
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }


    public function getOnePost($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM posts 
                                           WHERE id=? ");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }


    public function getPostImages($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM images
                                           WHERE post_id=? ");
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }


    public function deletePost($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM posts
                                           WHERE id=?");
        $stmt->execute([$id]);

    }


    public function updatePost($data)
    {
        $stmt = $this->pdo->prepare("UPDATE  posts 
		SET title=:title,description=:description,text=:text,created_at=:created_at,subcategories_id=:subcategories_id
		WHERE id=:id");

        $stmt->execute([
            'id' => $data['id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'text' => $data['text'],
            'created_at' => date('Y-m-d'),
            'subcategories_id' => $data['subcategories_id']
        ]);


    }


    public function deleteImgEdit($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM images
                                           WHERE id=?");
        $stmt->execute([$id]);
    }


}