<?php
include $_SERVER['DOCUMENT_ROOT'].'/php/template/header/header.php';
?>
    <link rel="stylesheet" href="/css/viewAuthor.css">
<div class="wrap">



<div class="right">

<div class="title"><h1>Список комментариев</h1></div>

<?php foreach ($POST as $p):?>
<div class="item">   

<div><img src="<?=$usericon?><?=$p->avatar?>" width="50" height="50"></div>

<div id="href"><?= $p->text?></div>

<div><form method="post" action="<?=$actDelete?>">
<input type="hidden" value="<?= $p->id ?>" name="id">
<input type="hidden" value="<?= $p->post_id ?>" name="post_id">
<button type="submit" name="deleteAuthorComment">&#10007;</button>
</form>
</div>
</div>
<?php endforeach;?>

</div>
</div>


</div>