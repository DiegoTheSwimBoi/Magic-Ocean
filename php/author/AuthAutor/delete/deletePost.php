<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

include $_SERVER['DOCUMENT_ROOT'].'/toTheHorny.php';



if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $ArrayOfImages=$dataPost->getPostImages($id);
    $images=[];

    if(!empty($ArrayOfImages)){
        foreach ($ArrayOfImages as $imgObj){
            $images[]=$imgObj->name;
        }

        deleteIMG($images,$uploadPath);

    }




    $dataPost->deletePost($id);



    header('Location: /');
}