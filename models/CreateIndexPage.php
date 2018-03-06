<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 02.03.2018
 * Time: 18:13
 */

class CreateIndexPage {

    function __construct() {
        if (!empty($_COOKIE['first_entry'])) {
            FrontController::$navigation = "logoutNav.php";
            FrontController::$content = "logoutContent.php";
            FrontController::$stylesheet = "main.css";

        } else {
            setcookie('first_entry', "1", time() + 999999999);
            FrontController::$navigation = "logoutNav.php";
            FrontController::$content = "IntroContent.php";
            FrontController::$stylesheet = "main.css";
            FrontController::$script = "introScript.php";
        }
        require_once "/views/index.php";
    }

}