<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
if($user){
	        unset($_SESSION["auth"]);
            session_unset();
            session_destroy();
}
include "horny.view.php";