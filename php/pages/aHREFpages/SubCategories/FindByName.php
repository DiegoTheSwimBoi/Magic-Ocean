<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['find']) && !empty($_POST['text'])){
    $text = $_POST['text'];
    header("Location: /php/pages/aHREFpages/SubCategories/searchPost.php?text=$text");
}else{
   header("Location: /php/pages/aHREFpages/SubCategories/searchPost.php?text=null");
}