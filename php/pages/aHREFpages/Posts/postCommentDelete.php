<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';




if ($user) {
	if(!$dataAuth->isAuthor($user)){
    if (isset($_POST['deleteAuthorComment'])) {
        $CommentID = $_POST['id'];
        $post_id = $_POST['post_id'];
        $dataComment->deleteComment($CommentID);

        header("Location: /php/pages/aHREFpages/Posts/Posts.php?id=$post_id");
    }
	}else{
		header("Location: /");
	}

}