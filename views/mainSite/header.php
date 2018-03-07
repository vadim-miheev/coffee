<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 02.03.2018
 * Time: 17:49
 */
?>

<header>
    <div>
        <div class="logo">
            <a href="http://<?=$_SERVER['SERVER_NAME']?>">
                <img src="/imgs/logo.png">
                <div class="headerText">Coffee Cards</div>
            </a>
        </div>
        <?FrontController::requireWithCheckFile(FrontController::$navigation);?>
    </div>
</header>
