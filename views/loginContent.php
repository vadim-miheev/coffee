<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 03.03.2018
 * Time: 12:23
 */
?>
<article class="content" id="registForm">
    <section>
        <p>Вход в ваш аккаунт Coffee Cards</p>
        <form action="http://<?=$_SERVER['SERVER_NAME']?>/login/login" method="post">
            <div>
                <input type="text" name="login" id="login" placeholder="Логин или email">
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Пароль">
            </div>
            <div>
                <input type="submit" value="Войти">
            </div>
        </form>
    </section>
</article>
