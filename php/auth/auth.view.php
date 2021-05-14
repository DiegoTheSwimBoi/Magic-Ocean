<?php
include $_SERVER['DOCUMENT_ROOT']."/php/template/header/header.php" ?>
<link rel="stylesheet" href="/css/authIn.css">
<br>
<div class="container">
	<div id="form">
<h1>Да, да. Ничего нового.</h1>
    <form method="POST" enctype="multipart/form-data" action="login.php">
      <div id="inputs">
        <label>Логин:<input type="text" name="login" value="<?=$_SESSION['login'] ?? '' ?>" id="text" required></label><br>
        <label>Пароль:<input type="password" name="password" id="password" value="<?=$_SESSION['password'] ?? '' ?>" class="forminput" required></label><br>
        <p><span class="error"><?=$_SESSION['errors']['auth']?></span></p>
		<button type="submit" name="submit" id="submit">Ok</button>
       </div>
	</form>
        <div id="inputs"><a href="/php/check_in/" class="check">Зарегистрируйтесь. 	Если у вас нет аккаунта.</a></div>
   </div>
</div>

<div>
<video autoplay muted="false" loop id="video">
  <source src="/video/divein.mp4" type="video/mp4">
</video>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT']."/php/template/footer/footer.php" ?>