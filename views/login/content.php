<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 03.03.2018
 * Time: 12:23
 */
?>
<article class="content" id="loginForm">
    <section>
        <p>Вход в ваш аккаунт Coffee Cards</p>
        <form action="http://<?=$_SERVER['SERVER_NAME']?>/authorization/login" method="post">
            <div>
                <input type="text" name="loginOrEmail" id="login" placeholder="Логин или email" required="required">
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Пароль" required="required">
            </div>
            <div>
                <input type="submit" value="Войти">
            </div>
            <div>
                <p><a href="http://<?=$_SERVER['SERVER_NAME']?>/authorization/login/password/forgot">Забыли пароль?</a></p>
            </div>
            <div>
                <p><?=CreateLoginPage::$err?></p>
            </div>

        </form>
    </section>
</article>
