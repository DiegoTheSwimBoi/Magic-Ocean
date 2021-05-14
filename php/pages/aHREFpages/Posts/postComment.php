<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';


if ($user) {
    if (isset($_POST['addComment'])) {
        $data['text'] = $_POST['text'];
        $data['user_id'] = $user->id;
        $data['post_id'] = $_POST['post_id'];
        $dataComment->insertComment($data);
        header("Location: /php/pages/aHREFpages/Posts/Posts.php?id=$data[post_id]");
    }
}