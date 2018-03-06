<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 03.03.2018
 * Time: 12:20
 */

class CreateLoginPage {

    public static $err;

    function __construct() {
        FrontController::$navigation = "logoutNav.php";
        FrontController::$content = "loginContent.php";
        FrontController::$stylesheet = "main.css";
        FrontController::$script = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->loginWithForm();
        }

        require_once "/views/index.php";
    }

    function loginWithForm() {
        $loginOrEmail = trim($_POST['loginOrEmail']);
        $password = ($_POST['password']);
        $this->login($loginOrEmail, $password);
    }

    function login($loginOrEmail, $password) {
        $db = DbConnect::getCoffee();
        $sql = "SELECT * FROM users WHERE login = '$loginOrEmail' OR email = '$loginOrEmail'";
        $result = $db->query($sql) or die("Ошибка входа");
        if(is_array($arr = $result->fetch(PDO::FETCH_ASSOC))) {
            if ($arr['password'] == $password) {
                $_SESSION['login'] = $arr['login'];
                header("Location: http://" . $_SERVER['SERVER_NAME']);
            } else {
                self::$err = 'Не верный логин или пароль';
            }
        } else {
            self::$err = 'Не верный логин или пароль';
        }
    }
}