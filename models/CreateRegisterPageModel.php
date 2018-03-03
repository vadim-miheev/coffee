<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 03.03.2018
 * Time: 12:16
 */

class CreateRegisterPageModel {

    function __construct() {
        FrontController::$navigation = "logoutNav.php";
        FrontController::$content = "registContent.php";
        FrontController::$stylesheet = "main.css";
        FrontController::$script = "";
        require_once "/views/index.php";
    }
}