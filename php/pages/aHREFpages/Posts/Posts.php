<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';
$id = ($_GET["id"]);
$post = $dataPost->getOnePost($id);
$Arr_Img = $dataPost->getPostImages($id);
$comments = $dataComment->getAllComments($id);




$author = $dataAuth->isAuthor($user);

include $_SERVER['DOCUMENT_ROOT'] . '/php/pages/aHREFpages/Posts/Posts.view.php';