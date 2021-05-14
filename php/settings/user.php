<?php

use App\models\Validator;

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $login = Validator::preProcessing($_POST['login']);
    $avatarName=$dataAuth->find($id)->avatar;
    $error="";

    if (!empty($_FILES['avatar']['name'])) {


        $usericon = [$dataAuth->find($id)->avatar];

        deleteIMG($usericon, $avatarPath);

        [$error, $avatarName] =
            loadAvatar($maxFileSize, $validFileType, $avatarPath, 'avatar');

    }



    if (empty($error)) {
        $dataAuth->UpdateUser($id,$login,$avatarName);

    }

    header('Location: /');


}