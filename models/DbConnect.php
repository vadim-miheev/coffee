<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 05.03.2018
 * Time: 17:46
 */

class DbConnect {

    const HOST = "127.0.0.1:3307";
    const DB = 'coffeecards';
    const DNS = "mysql:host=".self::HOST.";dbname=".self::DB.";charset=utf8";
    const USER = 'root';
    const PASSWORD = '';

    public static function getCoffee () {
        return new PDO(self::DNS, self::USER, self::PASSWORD);
    }
}
