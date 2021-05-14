<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
$id = $_POST['id'];

include $_SERVER['DOCUMENT_ROOT'].'/toTheHorny.php';




$categories = $dataCategory->getAllCategories();
$subcategories = $dataCategory->getAllSubs();
$catObj = $dataCategory->getCatforEdit($id);

$catIndex = $catObj->id;

$post = $dataPost->getOnePost($id);


$imagesArr = $dataPost ->getPostImages($id);

include $_SERVER['DOCUMENT_ROOT'].'/php/author/AuthAutor/edit/edit.view.php';