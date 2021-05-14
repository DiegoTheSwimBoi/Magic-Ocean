<?php

namespace App\models;

use PDO;

class Category
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllCategories()
    {
        $stmt = $this->pdo->query('SELECT * FROM categories');
        return $stmt->fetchAll();
    }

    public function getCategoryInfoById($id){
        $stmt = $this->pdo->prepare("SELECT * FROM categories
                    where id = ?");

        $stmt->execute([$id]);

        return $stmt->fetch();
    }




    public function filterSubs($id){
        $stmt = $this->pdo->prepare("SELECT * FROM subcategories
                    where category_id like :cat_id");

        $stmt->execute([
            'cat_id' => $id . "%"
        ]);

        $temp = $stmt->fetchAll();
        return json_encode($temp, JSON_UNESCAPED_UNICODE);
    }
	
	
	public function getCategoryByID($id){
		$stmt = $this->pdo->prepare("SELECT * FROM subcategories
                    where id = ?");

        $stmt->execute([$id]);
		
		return $stmt->fetch();
	}




    public function getAllSubs()
    {
        $stmt = $this->pdo->query('SELECT * FROM subcategories');
        return $stmt->fetchAll();
    }




    public function getAllSubCategories($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM subcategories
                                            WHERE category_id=?");
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }







    public function getCatforEdit($id)
    {
        $stmt = $this->pdo->prepare("SELECT categories.id FROM categories INNER JOIN subcategories INNER JOIN posts ON 
                                           categories.id = subcategories.category_id AND posts.subcategories_id = subcategories.id
                                           WHERE posts.id=? ");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
	
	
}