<?php
include $_SERVER['DOCUMENT_ROOT']."/php/template/header/header.php" ?>
<link rel="stylesheet" href="/css/categoriesPHP.css">
<div class="center">
<div>
<p class="title"><?= $categ->name ?></p>

<p class="description"><?= $categ->description?></p>

<hr>

<div class="wrap">
<div><img src="/img/sub/а<?=$id?>.png" width="350" height="250"></div>

    <div><ul>
        <?php foreach($posts as $post): ?>
            <li><a href="/php/pages/aHREFpages/Posts/Posts.php?id=<?= $post->id ?>"><?= $post->title ?></a></li>
        <?php endforeach; ?>
    </ul>
	</div>
	</div>
</div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT']."/php/template/footer/footer.php" ?>
