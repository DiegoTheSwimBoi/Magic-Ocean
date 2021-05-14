<?php

namespace App\models;

use PDO;

class Search
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

   public function find($text){
	$stmt = $this->pdo->prepare("SELECT * FROM posts
                                            WHERE title like :text");
        $stmt->execute([
		'text'=>$text . "%"
		]);
        return $stmt->fetchAll();   
   }
   


}

