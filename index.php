<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 28.02.2018
 * Time: 13:30
 */

// Пути по-умолчанию для поиска файлов
set_include_path(get_include_path()
    .PATH_SEPARATOR.'controllers'
    .PATH_SEPARATOR.'models'
    .PATH_SEPARATOR.'views');
// Автозагрузка классов
function __autoload($class){
    //Проверка существут ли файл класса
    $_include_path = explode( PATH_SEPARATOR, get_include_path());
    for ($i = 0; $i < count($_include_path); $i++ ){
        $pathToFile = $_include_path[$i] . '/' . $class . '.php';
        if (file_exists($pathToFile)) {
            include_once($class . '.php');
            break;
        }
    }
}

$front = FrontController::getInstance();
$front->startSomeController();

//echo $front->getHtml();