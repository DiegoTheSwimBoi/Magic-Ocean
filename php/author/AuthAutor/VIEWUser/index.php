<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
include $_SERVER['DOCUMENT_ROOT'].'/toTheHorny.php';
 $actEdit=""; $actDelete="";


$POST = $dataAuth->getAllUsers();	


include 'index.view.php';