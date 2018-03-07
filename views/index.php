<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 01.03.2018
 * Time: 15:42
 */
?>

<html>
    <head>
        <link type="text/css" href="/CSS/<?=FrontController::$stylesheet;?>" rel="stylesheet">
        <?FrontController::requireWithCheckFile(FrontController::$script);?>
        <title>
            Coffee Cards
        </title>

    </head>
    <body>
        <? require_once "/mainSite/header.php";?>
        <?FrontController::requireWithCheckFile(FrontController::$content);?>
        <footer>
            © CoffeeCards.by 2018
        </footer>
    </body>

</html>
