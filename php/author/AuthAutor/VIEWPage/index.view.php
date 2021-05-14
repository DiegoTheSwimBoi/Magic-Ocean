<?php
include $_SERVER['DOCUMENT_ROOT'].'/php/template/header/header.php';
?>
    <link rel="stylesheet" href="/css/viewPost.css">
<div class="wrap">



<div class="right">

<div class="title"><h1>Список статей</h1></div>

<?php foreach ($POST as $p):?>
<div class="item">   

<div id="href"><a href="/php/pages/aHREFpages/Posts/Posts.php?id=<?= $p->id ?>"><?= $p->title?></a></div>

<div><form method="post" action="<?=$actDelete?>">
<input type="hidden" value="<?= $p->id ?>" name="id">
<button type="submit" onclick="return confirm('Вы действительно хотите удалить статью?');" id="buttn">&#10007;</button>
</form>
</div>
<div><form action="<?=$actEdit?>" method="post">
<input type="hidden" value="<?= $p->id ?>" name="id">
<button>&#9997;</button>
</form></div>
</div>
<?php endforeach;?>

</div>
</div>


</div>