<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 02.03.2018
 * Time: 16:15
 */

class LoginController {

    function registAction() {
        new CreateRegisterPageModel();
    }

    function loginAction() {
        new CreateLoginPageModel();
    }

}