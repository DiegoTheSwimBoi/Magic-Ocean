<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';


if($user){
        unset($_SESSION["auth"]);
        session_unset();
        session_destroy();
        header("Location: /php/auth/settings");
}



