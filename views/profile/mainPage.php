<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 06.03.2018
 * Time: 17:09
 */
?>

<article id="profile">
    <h3>Ваш профиль</h3>
    <section id="autorizationData">
        <div>
            <div>
                <div>Login:</div><br/>
                <div>Email:</div><br/>
                <div>Пароль:</div><br/>
            </div>
            <div>
                <div><?=CreateProfilePage::$user['login']?></div><br/>
                <div id="emailField"><?=CreateProfilePage::$user['email']?></div><br/>
                <div id="passwordField">********</div><br/>
            </div>
        </div>
        <div>
            <br/>
            <p><button id="buttonEmail">Изменить</button></p>
            <p><button id="buttonPassword">Изменить</button></p>
        </div>
        <div>
            <h4><?=CreateProfilePage::$msg?></h4>
        </div>
    </section>
    <h3>Ваши публикации</h3>
    <p id="addPub"><a href="http://<?=$_SERVER['SERVER_NAME']?>/user/addcard">Добавить</a></p>
    <section id="publications">
        <?require_once "/profile/userCards.php"?>
    </section>
</article>
