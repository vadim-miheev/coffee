<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 07.03.2018
 * Time: 14:02
 */

class CreateAddCardPage {
    function __construct() {
        FrontController::$navigation = "/mainSite/nav.php";
        FrontController::$content = "/profile/addCardContent.php";
        FrontController::$stylesheet = "main.css";
        FrontController::$script = "";

        require_once "/views/index.php";
    }
}