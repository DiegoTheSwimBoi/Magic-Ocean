<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_GET['text']) && $_GET['text']!="null"){
    $selected=$dataSearch->find($_GET['text']);
	$text=$_GET['text'];
}
include 'searchPost.view.php';