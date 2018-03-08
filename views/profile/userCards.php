<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 07.03.2018
 * Time: 21:51
 */
if(!empty(CreateProfilePage::$userCards)){
    foreach (CreateProfilePage::$userCards as $card) {
        ?>
        <a href="http://<?=$_SERVER['SERVER_NAME']?>/user/opencard/cardid/<?=$card['idcards']?>" id="cardId<?=$card['idcards']?>">
            <div style="background-image: url(<?=$card['img']?>)"></div>
        </a>
        <?
    }
} else {
    ?>
    <p style="text-align: center">У вас пока нету публикаций.
        <a href="http://<?=$_SERVER['SERVER_NAME']?>/user/addcard">Добавьте</a>
        новые публикации прямо сейчас)</p>
    <?
}

?>
