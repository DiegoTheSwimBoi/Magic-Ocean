<?php
include $_SERVER['DOCUMENT_ROOT'].'/php/template/header/header.php';
?>
<div>
    <img src="<?=$usericon?><?=$userInfo->avatar?>" height="250" width="250" style='border-radius: 50%; object-fit: cover;' draggable='false'>


    <div>
        <div><p><?=$userInfo->login?></p>
        <p><?=$userInfo->role?></p>
        </div>







</div>