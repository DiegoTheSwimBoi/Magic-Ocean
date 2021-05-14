<?php
include $_SERVER['DOCUMENT_ROOT']."/php/template/header/subsHeader.php"?>
<?php include $_SERVER['DOCUMENT_ROOT']."/php/template/header/navAuth.php"?>


<div class="imgtitle">
<p>Твоя Энциклопедия.</p>
<p>Источник света в море тьмы.</p>


<div id="audios">
<label for="audio" id="aud">Музыка океана для вас:
<audio controls="controls" id="audio" loop="loop">
<source src="<?=$intro?>" id="source">
</audio>
</label>
<br>

<select id="musicOption">
   <?php foreach($music as $name => $src): ?>
   <option value="<?=$src?>"><?=$name?></option>
   <?php endforeach; ?>
</select>
</div>

</div>

<div class="wrap">


    <div class="intro">
        <p><?=$category->intro?></p>
    </div>

    <div class="section">
        <section>
            <p><?=$category->section?></p>
        </section>

    </div>




<div class="<?= $id==2?"map":"book"?>">
    <div class="content">
        <?php foreach($subCategories as $subCategory): ?>
            <a href="/php/pages/aHREFpages/Categories/categories.php?id=<?=$subCategory->id?>" class="a<?=$subCategory->id?>">
                <div class="move-picture">
                    <img src="/img/sub/а<?=$subCategory->id?>.png" width="350" height="250">
                    <p><?= $subCategory->name ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>


<div class="searchCover">
    <div class="search">
        <form method="post" action="FindByName.php">
		<p class="searchP">Поиск: </p>
            <input type="search" name="text">
            <button type="submit" name="find">&#128269;</button>
        </form>
    </div>
</div>
</div>
<script src="/script/js/burger/music.js"></script>
<?php
include $_SERVER['DOCUMENT_ROOT']."/php/template/footer/footer.php" ?>
