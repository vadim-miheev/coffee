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
        <p>Регистрация на Coffee Cards</p>
        <form action="http://<?=$_SERVER['SERVER_NAME']?>/authorization/regist" method="post">
            <div>
                <input type="text" name="login" id="login" placeholder="Логин" required="required">
            </div>
            <div>
                <input type="email" name="email" id="email" placeholder="Email" required="required">
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Пароль" required="required">
            </div>
            <div>
                <input type="password" name="password2" id="password2" placeholder="Подтверждение пароля" required="required">
            </div>
            <div>
                <input type="submit" value="Зарегистрироваться" id="submit">
            </div>
            <div>
                <p><a href="http://<?=$_SERVER['SERVER_NAME']?>/authorization/login">У меня уже есть аккаунт</a></p>
            </div>
            <p><?=CreateRegisterPageModel::$err?></p>
        </form>
    </section>
</article>
