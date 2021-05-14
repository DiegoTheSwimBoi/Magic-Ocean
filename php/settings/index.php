<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if($user){
    $author = $dataAuth->isAuthor($user);
}

include $_SERVER['DOCUMENT_ROOT'].'/php/settings/index.view.php';



