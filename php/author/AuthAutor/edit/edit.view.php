<?php
include $_SERVER['DOCUMENT_ROOT'] . "/php/template/header/header.php" ?>
<link rel="stylesheet" href="/css/edit.css">

    <div class="center">
    <form method="POST" enctype="multipart/form-data" action="updatedPost.php">
    <input type="hidden" name="id" value="<?= $post->id ?>">
    <div><label>Категория: <div><select name="categories" id="categories">
                <option value="">Выберите категорию</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category->id ?>" <?= $category->id == $catIndex ? "selected" : ""?>><?= $category->name ?></option>
                <?php endforeach; ?>
            </select></label></div></div>


    <div>
        <label>Подкатегория: <div><select name="subcategories_id" id="subs">

                <option value="">Выберите подкатегорию</option>
                <!--Через массив-->
                <?php foreach ($subcategories as $subcategory): ?>
                    <option value="<?= $subcategory->id ?>" <?= $subcategory->id == $post->subcategories_id ? "selected" : ""?>><?= $subcategory->name ?></option>
                <?php endforeach; ?>
            </select></div></label>
    </div>
    <div><label>Название статьи: <div><input type="text" name="title" value="<?= $post->title ?>"></label></div></div>


<br>
        <div class="imgs">
             <?php if (!empty($imagesArr)): ?>
       <?php foreach ($imagesArr as $imgObj): ?>
	<input type="checkbox" name="delImg[]" value="<?=$imgObj->id.";".$imgObj->name?>">   
    <img src="<?=$upload.$imgObj->name?>" width="100" height="100">
    <?php endforeach;?>
    <?php endif;?>
	<label for="image"><img src="/img/icon/addImg.png" width="100" height="100" alt="load img" draggable="false"><input type="file" name="image[]" id="image" multiple style="display: none;"></label></div>



        
        <div><label>Описание: <textarea required name="description" id="mytextarea"><?= $post->description ?></textarea></label>
        </div>
        <div><label>Текст: <textarea required name="text"><?= $post->text ?></textarea></label></div>
        <button type="submit" name="submitUpdate">Готово</button>
        </form>
        </div>


    <script src="https://cdn.tiny.cloud/1/llthkjneyfkpc3br1idapjkijuv84xg2x1mhjiyi9h1nxrk9/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script src="/script/js/insert/insert.js"></script>
    <script src="/script/js/edit/edit.js"></script>
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . "/php/template/footer/footer.php" ?>