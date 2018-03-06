<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 28.02.2018
 * Time: 23:09
 */

class IndexController {

    function indexAction() {
        if (empty($_SESSION['login'])) {
            new CreateIndexPageModel;
        } else {
            new CreateCoffeeCardsPage();
        }

    }
}