<?php
include $_SERVER['DOCUMENT_ROOT'] . "/php/template/header/header.php" ?>
<link rel="stylesheet" href="/css/edit.css">

    <div class="center">
        <p style="color: <?= $_SESSION['alert'] ?>"><?= $_SESSION['msg'] ?></p>
        <form method="POST" enctype="multipart/form-data" action="insertPost.php">


            <div id="cont"><label>Категория:</label><div id="cat"><select name="categories"  id="categories">
                        <option selected value="">Выберите категорию</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category->id ?>"><?= $category->name ?></option>
                        <?php endforeach; ?>
                    </select></div></div>
            <div id="cont">
                <label>Подкатегория:</label><div id="cat"><select name="subcategories_id" id="subs">

                        <option selected value="">Выберите подкатегорию</option>
                        <!--Через массив-->
                        <?php foreach ($subcategories as $subcategory): ?>
                            <option value="<?= $subcategory->id ?>"><?= $subcategory->name ?></option>
                        <?php endforeach; ?>
                    </select></div>
            </div>
            <div id="name"><label>Название статьи: <input type="text" name="title"></label></div>
            <div>Выберите изображения для статьи: <label for="image"><img src="/img/icon/addImg.png" width="100" height="100" alt="load img" draggable="false"><input type="file" name="image[]" id="image"
                                                                       multiple style="display: none;"></label></div>
            <div><label>Описание: <textarea name="description"></textarea></label></div>
            <div><label>Текст: <textarea name="text"></textarea></label></div>
            <button type="submit" name="insertBtn">Готово</button>

        </form>
    </div>

    <script src="https://cdn.tiny.cloud/1/llthkjneyfkpc3br1idapjkijuv84xg2x1mhjiyi9h1nxrk9/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script src="/script/js/insert/insert.js"></script>
    <script src="/script/js/insert/select.js"></script>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/php/template/footer/footer.php" ?>