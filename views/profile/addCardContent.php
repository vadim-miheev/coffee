<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 07.03.2018
 * Time: 19:04
 */
?>
<article class="content" id="loginForm">
    <section>
        <p>Новая публикация</p>
        <form action="http://<?=$_SERVER['SERVER_NAME']?>/user/addcard" method="post">
            <div>
                <input type="file" name="photo" id="photo" required="required">
            </div>
            <div>
                <textarea name="email" id="description" placeholder="Добавте описание"></textarea>
            </div>
            <div>
                <input type="submit" value="Добавить" id="submit">
            </div>
            <p id="err"><?=CreateRegisterPage::$err?></p>
        </form>
    </section>
</article>
