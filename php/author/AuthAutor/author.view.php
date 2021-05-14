<?php
include $_SERVER['DOCUMENT_ROOT'].'/php/template/header/header.php';
?>
    <link rel="stylesheet" href="/css/author.css">
<div class="wrap">


<div class="left">
<ul type="none" id="txt">
<li><a href="/">Главная</a></li>
<li><a href="/php/pages/aHREFpages/SubCategories/subs.php?id=1">Разделы Океана</a></li>
<li><a href="/php/pages/aHREFpages/SubCategories/subs.php?id=2">Разделы Джунглей</a></li>
</ul>
</div>

<div class="right">
<p>Здравствуй, <?=$user->login?>.</p>

<div>
<ul type="none" id="txt">
<li><a href="/php/author/AuthAutor/VIEWPage/index.php">Посмотреть все статьи.</a></li>
<li><a href="/php/author/AuthAutor/VIEWUser/index.php">Посмотреть всех пользователей.</a></li>
<li><a href="/php/author/AuthAutor/VIEWComment/index.php">Посмотреть все комментарии.</a></li>
<li><a href="/php/author/AuthAutor/insert/insert.php">Добавить статью</a></li>
</ul>
</div>
</div>


</div>