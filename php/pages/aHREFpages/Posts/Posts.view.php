<?php
include $_SERVER['DOCUMENT_ROOT']."/php/template/header/header.php" ?>
    <link rel="stylesheet" href="/css/post.view.css">

<div>
    <div class="center">
        <div class="post">
            <div class="blue">
                <h1><?= $post->title ?></h1>
                <p><?= $post->text ?></p>
                <span><?= $post->created_at ?></span>


            </div>
            <div class="green">
                <h2><?= $post->title ?></h2>
                <div><img src="<?= $upload ?><?= $Arr_Img[0]->name ?>" id="titleImg"></div>
                <p><?= $post->description ?></p>
            </div>

        </div>


        <div id="myModal" class="modal">
            <div>
                <span class="modalClose">&times;</span>
            </div>

            <div class="modalContent">

                <div class="modalBody"></div>

            </div>
        </div>


        <div style="display: <?= empty($Arr_Img) ? "none" : "block" ?>" id="gallerypage">
            <div>
                <p>Галерея</p>
                <hr>
                <div class="gallery">
                    <?php if (!empty($Arr_Img)): ?>
                        <?php foreach ($Arr_Img as $img): ?>
                            <img src="<?= $upload ?><?= $img->name ?>" id="galleryImg">
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
				<hr>
            </div>
			
        
<div id="powerBtn">
        <div style="display: <?= $author ? "block" : "none" ?>">
            <form action="/php/author/AuthAutor/edit/edit.php" method="post">
                <input type="hidden" value="<?= $id ?>" name="id">
                <button type="submit" id="buttn">Редактировать.</button>
            </form>
<br>

            <form action="/php/author/AuthAutor/delete/deletePost.php" method="post">
                <input type="hidden" value="<?= $id ?>" name="id">
                <button type="submit" onclick="return confirm('Вы действительно хотите удалить статью?');" id="buttn">Удалить.
                </button>
            </form>
        </div>
</div>

        <div style="display: <?= $user ? "block" : "none" ?>">
            <form action="postComment.php" method="post">
			<div class="form">
                <input type="hidden" value="<?= $id ?>" name="post_id">
                <p>Оставьте свой комментарий: </p><textarea name="text" id="textMessage" rows="10" cols="45" style="resize: none; font-size: 1em;"></textarea>
                <button type="submit" name="addComment" id="buttn">Отправить</button>
            </div>
			</form>
			
        </div>

        <div style="display: <?= $user ? "none" : "block" ?>">
            <a href="/php/auth/">Комментарии могут оставлять зарегистрированные пользователи. <span
                        style="text-decoration: underline;">Сначала Войдите.</span></a>
        </div>


        <div style="display: <?= empty($comments) ? "none" : "block" ?>">
            <p>Комментарии</p>
            
            <?php foreach ($comments as $comment): ?>
			<hr>
            <div>
			
			<div class="space">
                <div class="inline"><span><a href="/php/settings/info.php?userinfo=<?=$comment->user_id?>"><img src="<?= $usericon ?><?= $comment->avatar ?>" height="50" width="50"></a></span>
                <p class="login"><?= $comment->login ?></p></div>

<div class="inline">
				<span><?= $comment->status ?></span>
				
                <div style="display: <?= $author ? "block" : "none" ?>">
                <form method="post" action="postCommentDelete.php">
                    <input type="hidden" name="post_id" value="<?= $post->id ?>">
                    <input type="hidden" name="id" value="<?= $comment->id ?>">
                    <button name="deleteAuthorComment">&#10007;</button>
                </form>
            </div>
</div>
</div>

            <div><?= $comment->text ?></div>
        </div>
        <?php endforeach; ?>
    </div>
	</div>
</div>

</div>
<script src="/script/js/post/Post.view.modal.js"></script>

<?php
include $_SERVER['DOCUMENT_ROOT']."/php/template/footer/footer.php" ?>
