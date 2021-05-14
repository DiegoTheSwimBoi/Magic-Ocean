<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
$categories = $dataCategory->getAllCategories();
$subcategories = $dataCategory->getAllSubs();

include $_SERVER['DOCUMENT_ROOT'].'/toTheHorny.php';

include "insert.view.php";