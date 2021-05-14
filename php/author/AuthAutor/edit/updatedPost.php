<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submitUpdate'])) {

    $data['title'] = $_POST['title'];
    $data['text'] = $_POST['text'];
    $data['description'] = $_POST['description'];
    $data['subcategories_id'] = $_POST['subcategories_id'];
    $data['id'] = $_POST['id'];


    $errorLoad = "";
    $errorDel = "";

    $imgPath = [];

    $imagesObj = $_POST['delImg'];


    if (!empty($imagesObj)) {


        foreach ($imagesObj as $obj) {
            $Exp = explode(";", $obj);

            $dataPost->deleteImgEdit($Exp[0]);

            $imgPath[] = $Exp[1];
        }


        deleteIMG($imgPath, $uploadPath);


    }


    [$errors, $fileNames] =
        loadIMG($maxFileSize, $validFileType, $uploadPath, 'image');

    if (empty($errors)) {
        $_SESSION["msg"] = "Файлы успешно загружены...";
        $_SESSION["alert"] = "#00ff00"; //green;

        $dataPost->insertImg($fileNames, $data['id']);
    }

    $dataPost->updatePost($data);

    header("Location: /");

}
