<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 06.03.2018
 * Time: 13:31
 */

class CreateCoffeeCardsPage {

    public static $cards;

    function __construct() {
        FrontController::$navigation = "/mainSite/nav.php";
        FrontController::$content = "/mainSite/coffeecardsContent.php";
        FrontController::$stylesheet = "main.css";
        FrontController::$script = "/mainSite/script.php";

        $this->getCardsFromDB();

        require_once "/views/index.php";
    }

    function getCardsFromDB() {
        $db = DbConnect::getCoffee();
        $sql = "SELECT idcards, author, date, img, description FROM cards ORDER BY date DESC";
        $result = $db->query($sql);
        while ($value = $result->fetch(PDO::FETCH_ASSOC)){
            self::$cards[] = $value;
        }
    }
}