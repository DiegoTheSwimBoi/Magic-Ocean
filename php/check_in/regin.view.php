<?php
include $_SERVER['DOCUMENT_ROOT']."/php/template/header/header.php" ?>
<link rel="stylesheet" href="/css/authIn.css">
<br>
    <div class="container">
	<div id="form">
	<h1>Регистрация</h1>
    <form method="POST"  action="regin.php" enctype="multipart/form-data">
	  <div id="inputs">
		<label>Логин:<input type="text" name="login" value="<?=$_SESSION['login'] ?? '' ?>" required></label><br>
        <p><span class="error" style="display: <?=$_SESSION['errors']['email'] ? 'block':'none'?>"><?=$_SESSION['errors']['login']?></span></p>
		
		<label>Пароль:<input type="password" name="password" id="password" value="<?=$_SESSION['password'] ?? '' ?>" required></label><br>
        <p><span class="error"><?=$_SESSION['errors']['password']?></span></p>

        <div>Выберите аватарку: <label for="avatar">
                <img src="/img/icon/addAvatar.png" width="100" height="100">
                <input type="file" name="avatar" id="avatar" style="display: none;" required></label></div>
		
		<p><span class="error" style="display: <?=$_SESSION['errors']['register'] ? 'block':'none'?>"><?=$_SESSION['errors']['register']?></span></p>
		<button type="submit" name="submit" id="submit">Ok</button>
       </div>
	</form>
   </div>
</div>


<div>
<video autoplay muted loop id="video">
  <source src="/video/divein.mp4" type="video/mp4">
</video>
</div>

<?php
include $_SERVER['DOCUMENT_ROOT']."/php/template/footer/footer.php" ?>