<?php

use App\db\Connect;
use App\models\Post;
use App\models\Auth;
use App\models\Comment;
use App\models\Validator;
use App\models\Category;
use App\models\Search;

include $_SERVER["DOCUMENT_ROOT"].'/php/app/db/config.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/app/db/Connect.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/app/db/functions.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/app/models/Post.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/app/models/Category.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/app/models/Comment.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/app/models/Auth.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/app/models/Validator.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/app/models/Search.php';

include $_SERVER["DOCUMENT_ROOT"].'/php/app/db/music.php';

$user= isset($_SESSION['auth']) && $_SESSION['auth'] ? json_decode($_SESSION['user']):false;


$pdo=Connect::make(CONN);
$dataPost = new Post($pdo);
$dataCategory = new Category($pdo);
$dataComment = new Comment($pdo);
$dataAuth = new Auth($pdo);
$dataSearch = new Search($pdo);

