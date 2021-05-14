<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
include $_SERVER['DOCUMENT_ROOT'].'/toTheHorny.php';
 $actEdit=""; $actDelete="";


$POST = $dataComment->getAllCommentsForPanel();
$actDelete="/php/pages/aHREFpages/Posts/postCommentDelete.php";	


include 'index.view.php';