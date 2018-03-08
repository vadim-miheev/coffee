<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 08.03.2018
 * Time: 10:21
 */

class CreateOpenCardPage {

    public static $cards, $headline;

    function __construct() {

        if(!empty(FrontController::$params['cardid'])){
            $this->getCardFromDB();
        } else {
            if(!empty(FrontController::$params['username'])){
                $this->getUserCardsFromDB();
                self::$headline = "Пубилкации " . FrontController::$params['username'];
            }else {
                header("Location: http://" . $_SERVER['SERVER_NAME']);
            }
        }

        FrontController::$navigation = "/mainSite/nav.php";
        FrontController::$content = "/mainSite/opencardContent.php";
        FrontController::$stylesheet = "main.css";
        FrontController::$script = "/mainSite/script.php";

        require_once "/views/index.php";
    }

    function getCardFromDB() {
        $db = DbConnect::getCoffee();
        $id = FrontController::$params['cardid'];
        $sql = "SELECT idcards, author, date, img, description FROM cards WHERE idcards = '$id'";
        $result = $db->query($sql);
        while ($value = $result->fetch(PDO::FETCH_ASSOC)){
            self::$cards[] = $value;
        }
    }

    function getUserCardsFromDB() {
        $db = DbConnect::getCoffee();
        $username = FrontController::$params['username'];
        $sql = "SELECT idcards, author, date, img, description FROM cards WHERE author = '$username' ORDER BY date DESC";
        $result = $db->query($sql);
        while ($value = $result->fetch(PDO::FETCH_ASSOC)){
            self::$cards[] = $value;
        }
    }
}