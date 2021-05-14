<?php
include $_SERVER['DOCUMENT_ROOT']."/php/template/header/header.php" ?>
    <link rel="stylesheet" href="/css/search.view.css">
	<link rel="stylesheet" href="/css/categoriesPHP.css">

<div class="center">

    <?php if(!empty($selected)):?>
	<h2>Список найденных статей: <?=$text?></h2>
    <ul>
        <?php foreach($selected as $post): ?>
            <li><a href="/php/pages/aHREFpages/Posts/Posts.php?id=<?= $post->id ?>"><?= $post->title ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
<div id="getCenter">
<div id="error">
        <img src='/img/post/error.png'  width='450'  height='450' style='border-radius: 50%; object-fit: cover;' draggable='false'>
    <p>Результат не найден.</p>
</div>
</div>
<?php endif; ?>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT']."/php/template/footer/footer.php" ?>