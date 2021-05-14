<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
$id = ($_GET["id"]);

$subCategories = $dataCategory->getAllSubCategories($id);

$category = $dataCategory->getCategoryInfoById($id);

$author=false;

if($user){
    $author = $dataAuth->isAuthor($user);
}



include $_SERVER['DOCUMENT_ROOT'].'/php/pages/aHREFpages/SubCategories/subs.view.php';