<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

    
if (isset($_POST['submit'])) {
	
	$query = $_POST['htfs'];
	
	if($query=="Harmonix"){
		if($user){
	        unset($_SESSION["auth"]);
            session_unset();
            session_destroy();
		}
		header ('Location: /php/author/Panel');
	}else{
		header ('Location: /php/author/index.php');
	}
  
}