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

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->addNewCard();
        }

        require_once "/views/index.php";
    }

    function addNewCard() {

        if ($_FILES["photo"]['size'] != 0) {
            $type = basename(mb_strtolower($_FILES['photo']['type']));
            if($type == 'png' or $type == 'jpeg' or $type == 'gif'){
                $tmp_name = $_FILES["photo"]["tmp_name"];
                $name = uniqid('card', 1);
                $dir = "/cards/$name.$type";
                if (move_uploaded_file($tmp_name,realpath(dirname(__FILE__)) . "/.." . $dir )) {
                    $this->addCardToDb($dir);
                    header("Location: http://" . $_SERVER['SERVER_NAME']. "/user/profile");
                } else {
                    echo "Ошибка загрузки";
                }
            } else {
                echo "Можно загружать лишь фото форматов jpg/png/gif";
            }
        } else {
            echo "Выберите загружаемое фото размеро до 10 мегабайт";
        }
    }

    function addCardToDb($dir) {
        $db = DbConnect::getCoffee();
        $author = $_SESSION['login'];
        $date = time();
        $description = trim($_POST['description']);
        $sql = "INSERT INTO cards (author, date, img, description) VALUES ('$author', '$date', '$dir', '$description')";
        $db->exec($sql);
    }
}