<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 06.03.2018
 * Time: 13:31
 */

class CreateCoffeeCardsPage {

    function __construct() {
        FrontController::$navigation = "Nav.php";
        FrontController::$content = "logoutContent.php";
        FrontController::$stylesheet = "main.css";

        require_once "/views/index.php";
    }
}