<div style="display: <?=$user ? "block":"none"?>" class="menu">
    <header>
        <div class="Aside_hat">

            <img src="<?=$usericon?><?=$dataAuth->find($user->id)->avatar?>" height="70" width="70" style='border-radius: 50%; object-fit: cover;' draggable='false'>

            <a href="/">Вернуться на карту.</a>
            <a href="/php/auth/settings/out.php">Настройки.</a>
            <a href="/php/author/" style="display: <?=$author?"block":"none"?>">Панель Админа.</a>
            <a href="/php/auth/out.php">Выйти.</a>


        </div>

    </header>
</div>