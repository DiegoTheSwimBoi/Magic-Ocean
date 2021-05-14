<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
include $_SERVER['DOCUMENT_ROOT'].'/toTheHorny.php';
 $actEdit=""; $actDelete="";


$POST = $dataPost->getPostsForPanel();
$actEdit="/php/author/AuthAutor/edit/edit.php";
$actDelete="/php/author/AuthAutor/delete/deletePost.php";	


include 'index.view.php';