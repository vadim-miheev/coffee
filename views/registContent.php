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
        <p>Регистрация на Coffee Cards</p>
        <form action="http://<?=$_SERVER['SERVER_NAME']?>/login/regist" method="post">
            <div>
                <input type="text" name="login" id="login" placeholder="Логин">
            </div>
            <div>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Пароль">
            </div>
            <div>
                <input type="password" name="password2" id="password2" placeholder="Подтверждение пароля">
            </div>
            <div>
                <input type="submit" value="Зарегистрироваться">
            </div>
        </form>
    </section>
</article>
