<?php
const CONN = [
    "host" => "localhost",
    "dbname" => "f0538702_ocean",
    "login" => "f0538702_ocean",
    "password" => "root",
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]
];

$maxFileSize=5*1024*1024;
$validFileType=["image/jpg","image/jpeg","image/png"];
$uploadPath= $_SERVER["DOCUMENT_ROOT"]."/upload/";
$avatarPath= $_SERVER["DOCUMENT_ROOT"]."/users/avatar/";
$upload="/upload/";
$avatarPath=$_SERVER["DOCUMENT_ROOT"]."/users/avatar/";
$usericon ="/users/avatar/";
