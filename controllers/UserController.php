<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 06.03.2018
 * Time: 17:10
 */

class UserController {

    function profileAction() {
        if(empty($_SESSION['login'])) {
            new CreateLoginPage();
        } else {
            new CreateProfilePage();
        }
    }

    function addcardAction() {
        if(empty($_SESSION['login'])) {
            new CreateLoginPage();
        } else {
            new CreateAddCardPage();
        }
    }

}