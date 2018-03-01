<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 28.02.2018
 * Time: 23:09
 */

class IndexController {

    function indexAction() {

        if (!empty($_COOKIE['first_entry'])) {
            echo "Главная страница";
        } else {
            setcookie('first_entry', "1", time() + 3600);
            echo "Данный сайт создан в тренировочных целях и не содержит в себе какой-либо актуальной информации";
        }
    }
}