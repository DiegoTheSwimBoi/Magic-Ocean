<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
$id = ($_GET["id"]);
$categ = $dataCategory->getCategoryByID($id);
$posts = $dataPost->getAllPosts($id);

include $_SERVER['DOCUMENT_ROOT'].'/php/pages/aHREFpages/Categories/categories.view.php';