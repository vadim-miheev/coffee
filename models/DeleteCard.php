<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 08.03.2018
 * Time: 12:16
 */

class DeleteCard {

    function __construct() {
        if (empty(FrontController::$params['cardid'])) {
            header("Location: http://" . $_SERVER['SERVER_NAME']);
        }

        $db = DbConnect::getCoffee();
        $id = FrontController::$params['cardid'];
        $sql = "SELECT img FROM cards WHERE idcards = '$id'";
        $result = $db->query($sql);
        unlink(realpath(dirname(__FILE__)) . "/.." . $result->fetch(PDO::FETCH_ASSOC)['img']);
        $sql = "DELETE FROM cards WHERE idcards = '$id'";
        $db->exec($sql);
        header("Location: http://" . $_SERVER['SERVER_NAME'] . "/user/profile");

    }
}