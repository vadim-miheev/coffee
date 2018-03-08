<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 07.03.2018
 * Time: 21:51
 */
foreach (CreateProfilePage::$userCards as $card) {
    ?>
    <a href="http://<?=$_SERVER['SERVER_NAME']?>/user/opencard/cardid/<?=$card['idcards']?>" id="cardId<?=$card['idcards']?>">
        <div style="background-image: url(<?=$card['img']?>)"></div>
    </a>
    <?
}
?>
