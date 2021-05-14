<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['insertBtn'])) {

    $data['title'] = $_POST['title'];
    $data['text'] = $_POST['text'];
    $data['description'] = $_POST['description'];
    $data['subcategories_id'] = $_POST['subcategories_id'];


    $id=$data['subcategories_id'];

    [$errors, $fileNames] =
        loadIMG($maxFileSize, $validFileType, $uploadPath, 'image');
		

    if (empty($errors)) {
        $_SESSION["msg"] = "Файлы успешно загружены...";
        $_SESSION["alert"] = "#00ff00"; //green;
        //$newIdPost = $dataPost->insertPost($data);
        $dataPost->insertImg($fileNames, $dataPost->insertPost($data));

        header("Location: /php/author/AuthAutor/author.php");
    } else {
        $_SESSION["msg"] = implode(', ', $errors);
        $_SESSION["alert"] = "#ff0000";  //red;
        header("Location: /php-test-001/php/author/AuthAutor/insert/insert.php");

    }
}