<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 03.03.2018
 * Time: 12:20
 */

class CreateLoginPageModel {

    function __construct() {
        FrontController::$navigation = "logoutNav.php";
        FrontController::$content = "loginContent.php";
        FrontController::$stylesheet = "main.css";
        FrontController::$script = "";
        require_once "/views/index.php";
    }
}