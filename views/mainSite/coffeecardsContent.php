<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 06.03.2018
 * Time: 13:46
 */
?>

<article class="content" id="mainPage">
    <h3>Последние публикации</h3>
    <?
    foreach (CreateCoffeeCardsPage::$cards as $card){
    ?>
    <section id="cardId<?=$card['idcards']?>">
        <div>
            <a style="text-decoration: none"
               href="http://<?=$_SERVER['SERVER_NAME']?>/user/opencard/username/<?=$card['author']?>">
                <p><?=$card['author']?></p>
            </a>
        </div>
        <div><a href="http://<?=$_SERVER['SERVER_NAME']?>/user/opencard/cardid/<?=$card['idcards']?>">
                <img src="<?=$card['img']?>">
            </a></div>
        <div class="description">
            <?=$card['description']?>
        </div>
        <div>
            <a><p class="date"><?= date( "G:i j-M-Y", $card['date'])?></p></a>
        </div>

    </section>
    <?
    }
    ?>

</article>
