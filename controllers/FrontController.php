<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 28.02.2018
 * Time: 21:42
 */

class FrontController {
    private $controller, $action, $params;

    static $instance;

    public static function getInstance() {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    function __construct() {
        $request = $_SERVER['REQUEST_URI'];
        $splitRequest = explode('/', trim($request, '/'));

        $this->controller = !empty($splitRequest[0]) ? ucfirst($splitRequest[0]).'Controller' : 'IndexController';
        $this->action = !empty($splitRequest[1]) ? $splitRequest[1].'Action' : 'indexAction';

        if (!empty($splitRequest[2]) and (count($splitRequest)%2 == 0)) {
            $keys = $values = [];
            for ($i = 2, $iteration = count($splitRequest); $iteration; $i++) {
                if ($i % 2 == 0) {
                    $keys = $splitRequest[$i];
                } else {
                    $values = $splitRequest[$i];
                }
            }

            $this->params = array_combine($keys, $values);
        }
    }

    function start() {
        echo "сейчас будет проверка";
        if (class_exists($this->getController())) {
            echo "класс есть";
            $link = new ReflectionClass($this->getController());
            if ($link->hasMethod($this->getAction())) {
                $method = $link->getMethod($this->getAction());
                $controller = $link->newInstance();
                $method->invoke($controller);
            } else {
                echo "Вы ввели несуществуюй адреес";
            }
        } else {
            echo "Вы ввели несуществующий адресс";
        }
    }

    public function getController() {
        return $this->controller;
    }

    public function getAction() {
        return $this->action;
    }

    public function getParams() {
        return $this->params;
    }
}