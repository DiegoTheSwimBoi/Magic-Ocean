<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Твоя Энциклопедия</title>
    <link rel="shortcut icon" href="/img/icon/planet.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/acessPanel.css">
	</head>


<body>
<div class="top">
<div class="center">
<div class="hole">
<?php foreach ($_HOLE as $h):?>
<div id="extra<?=$h?>" class="dropzone"></div>
<?php endforeach; ?>
</div>
</div>

<div class="center">
<h1 class="message">Вход в админ панель.</h1>

<form method="POST"  action="user.php">
<input type="hidden" value="false" name="htfs" id="htsp">
<button name="submit" type="submit" id="sbtn">Войти</button>
</form>

</div>
</div>


<div class="center">
<div class="floder">
<?php foreach ($_HOLE as $h):?>
<div id="<?=$h?>" style="grid-column:<?=$h?>;"><img src="/img/auth/gems/flower<?=$h?>.png" width="50" height="50" draggable="false"></div>
<?php endforeach; ?>
<div></div>
</div>
</div>

<div class="center footer">
<div class="gems">
<?php foreach ($_GEMS as $g):?>
<img src="/img/auth/gems/<?=$g?>.png" id="div<?=$g?>" width="50" height="50" draggable="true" class="extra<?=$g?>">
<?php endforeach; ?>
</div>
</div>

<div class="heart">
<img src="/img/auth/gems/heart.png">
</div>

<audio  id="playAudio">
<source src="" type="audio/mpeg" id="extra">
</audio>



</body>
<script src="/script/js/auth/gem.js"></script>
<script src="/script/js/auth/querygems.js"></script>
</html>