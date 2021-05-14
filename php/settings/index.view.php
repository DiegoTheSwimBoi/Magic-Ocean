<?php
include $_SERVER['DOCUMENT_ROOT'].'/php/template/header/header.php';
?>
    <link rel="stylesheet" href="/css/settings.css">
<div>
<div class="wrap">
	    
        <div class="basic">
		<img src="<?=$usericon?><?=$user->avatar?>" height="250" width="250" style='border-radius: 50%; object-fit: cover;' draggable='false'>
		<p><?=$user->login?></p>
        <p><?=$user->role?></p>
        </div>


        <div style="display: <?=$user?"block":"none"?>">
            <form method="POST"  action="user.php" enctype="multipart/form-data">
			<div class="parts">
                <input type="hidden" name="id" value="<?=$user->id?>">
                <div><label>Поменять логин:<input type="text"  name="login" value="<?=$user->login?>" style="font-size: 2rem;"></label></div>
                <div>Поменять аватарку: <label for="avatar">
                        <img src="/img/icon/addAvatar.png" width="100" height="100">
                        <input type="file" name="avatar" id="avatar" style="display: none;"></label></div>
                <button name="submit" type="submit">Редактировать</button>
				</div>
            </form>
        </div>
    </div>




</div>