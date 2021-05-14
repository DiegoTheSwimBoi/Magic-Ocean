<?php
if($user){
  if(!$dataAuth->isAuthor($user)){
	header('Location: /php/hornyJail/horny.php');    
  }
}else{
	header('Location: /php/hornyJail/horny.php');  
}