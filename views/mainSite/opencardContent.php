<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 08.03.2018
 * Time: 10:32
 */

if(!empty(CreateOpenCardPage::$cards['idcards'])){
    $arr[] = CreateOpenCardPage::$cards;
} else {
    $arr = CreateOpenCardPage::$cards;
}
?>
<article class="content" id="mainPage">
    <h3><?=CreateOpenCardPage::$headline?></h3>
    <?foreach ( $arr as $card) { ?>
        <section id="cardId<?= $card['idcards'] ?>">
            <div>
                <a href="http://<?= $_SERVER['SERVER_NAME'] ?>/user/opencard/username/<?= $card['author']?>">
                    <p><?= $card['author'] ?></p>
                </a>
            </div>
            <div><img src="<?= $card['img'] ?>"></div>
            <div class="description">
                <?= $card['description'] ?>
            </div>
            <div>
                <a><p class="date"><?= date("G:i j-M-Y", $card['date']) ?></p></a>
            </div>
            <div class="description" id="deleteButton">
                <a style="text-decoration: none" href="http://<?= $_SERVER['SERVER_NAME'] ?>/user/delete/cardid/<?= $card['idcards'] ?>">
                    <?
                    if($card['author'] == $_SESSION['login']){
                        echo "Удалить";
                    }
                    ?></a>
            </div>
        </section>
        <?
    }
    ?>
</article>
