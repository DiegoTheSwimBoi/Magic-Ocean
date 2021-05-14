<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

    $userInfo=$dataAuth->find($_GET['userinfo']);

include $_SERVER['DOCUMENT_ROOT'].'/php/settings/info.view.php';