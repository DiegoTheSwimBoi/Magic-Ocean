<?php

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$subcategories = $dataCategory->filterSubs($_GET['id']);
if($subcategories) {
    echo $subcategories;
} else {
    echo null;
}
