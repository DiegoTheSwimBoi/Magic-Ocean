<?php
include $_SERVER['DOCUMENT_ROOT'].'/php/template/header/header.php';
?>
    <link rel="stylesheet" href="/css/viewAuthor.css">
<div class="wrap">



<div class="right">

<div class="title"><h1>Список пользователей</h1></div>

<?php foreach ($POST as $p):?>
<div class="item">   
<div><img src="<?=$usericon?><?=$p->avatar?>" width="50" height="50"></div>
<div id="href"><?= $p->login?></div>
</div>
<?php endforeach;?>

</div>
</div>


</div>