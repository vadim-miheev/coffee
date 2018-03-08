<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 07.03.2018
 * Time: 19:04
 */
?>
<article id="addcardForm">
    <section>
        <p>Новая публикация</p>
        <form enctype="multipart/form-data" action="http://<?=$_SERVER['SERVER_NAME']?>/user/addcard" method="post">
            <div>
                <p>Загрузите фото:</p>
            </div>
            <div>
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                <input type="file" name="photo" id="photo" required="required">
            </div>
            <div>
                <textarea name="description" placeholder="Добавте описание" maxlength="512"></textarea>
            </div>
            <div>
                <input type="submit" value="Добавить" id="submit">
            </div>
            <p id="err"><?=CreateRegisterPage::$err?></p>
        </form>
    </section>
</article>
