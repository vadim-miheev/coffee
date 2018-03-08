<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 06.03.2018
 * Time: 15:34
 */

class CreateProfilePage {

    public static $user, $db, $msg, $userCards;

    function __construct() {
        FrontController::$navigation = "/mainSite/nav.php";
        FrontController::$content = "/profile/mainPage.php";
        FrontController::$stylesheet = "main.css";
        FrontController::$script = '/profile/script.php';
        self::$db = DbConnect::getCoffee();
        $this->getLoginAndEmail();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $email = mb_strtolower(trim($_POST['newEmail']));
            $password = $_POST['newPassword'];

            if(!empty($email)){
                $this->newEmail($email);
            }

            if (!empty($password)) {
                $this->newPassword($password);
            }
        }

        $this->getCardsFromDB();

        require_once "/views/index.php";
    }

    function getCardsFromDB() {
        $author = self::$user['login'];
        $sql = "SELECT idcards, author, date, img, description FROM cards WHERE author = '$author' ORDER BY date DESC";
        $result = self::$db->query($sql);
        while ($value = $result->fetch(PDO::FETCH_ASSOC)){
            self::$userCards[] = $value;
        }
    }

    function newPassword($password) {
        if ($this->checkPassword($password)) {
            $login = self::$user['login'];
            $sql = "UPDATE users SET password = '$password' WHERE login = '$login'";
            self::$db->exec($sql);
            self::$msg = "Пароль успешно изменён";
        }
    }

    function newEmail($email) {
        if ($this->checkEmail($email)) {
            $login = self::$user['login'];
            $sql = "UPDATE users SET email = '$email' WHERE login = '$login'";
            self::$db->exec($sql);
            self::$msg = "Email успешно изменён";
            $this->getLoginAndEmail();
        }
    }

    function getLoginAndEmail() {
        $login = $_SESSION['login'];
        $sql = "SELECT login, email FROM users WHERE login = '$login'";
        $result = self::$db->query($sql);
        self::$user = $result->fetch(PDO::FETCH_ASSOC);
    }

    function checkEmail($email) {
        $sql = "SELECT email FROM users WHERE email = '$email'";
        $result = self::$db->query($sql) or die("ошибка запроса");
        if(is_array($result->fetch(PDO::FETCH_ASSOC))){
            self::$msg = "Этот email адрес уже зарегистрирован";
        } else {
            return true;
        }
    }

    function checkPassword($password) {
        if (strlen($password) < 5) {
            self::$msg = "Слишком короткий пароль";
        } else {
            return true;
        }
    }


}