<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 02.03.2018
 * Time: 16:15
 */

class AuthorizationController {

    function registAction() {
        if (empty($_SESSION['login'])) {
            new CreateRegisterPageModel();
        } else {
            new CreateCoffeeCardsPage();
        }

    }

    function loginAction() {
        if(empty($_SESSION['login'])) {
            new CreateLoginPageModel();
        } else {
            new CreateCoffeeCardsPage();
        }
    }

}