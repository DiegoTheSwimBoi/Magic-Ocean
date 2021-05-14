<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';


	$_GEMS = [1,2,3,4,5];
	
	$_FLOWERS=$_GEMS;
	
	shuffle($_GEMS);
	
	$_HOLE = $_GEMS;
	shuffle($_HOLE);
	
	

include "index.view.php";