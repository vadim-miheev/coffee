<?php
/**
 * Created by PhpStorm.
 * User: MNixA
 * Date: 28.02.2018
 * Time: 21:42
 */

class FrontController {
    private $controller, $action, $params;

    static $instance, $navigation, $content, $stylesheet, $script;

    const UNKNOWN_URI = "Вы ввели несуществующий адрес";

    public static function getInstance() {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public static function requireWithCheckFile($fileName) {
        if (!empty($fileName)) {
            require $fileName;
        }
    }

    function __construct() {

        $request = $_SERVER['REQUEST_URI'];
        $splitRequest = explode('/', trim($request, '/'));

        $this->controller = !empty($splitRequest[0]) ? ucfirst($splitRequest[0]).'Controller' : 'IndexController';
        $this->action = !empty($splitRequest[1]) ? $splitRequest[1].'Action' : 'indexAction';

        if (!empty($splitRequest[2]) and (count($splitRequest)%2 == 0)) {
            $keys = $values = [];
            for ($i = 2; $i < count($splitRequest); $i++) {
                if ($i % 2 == 0) {
                    $keys[] = $splitRequest[$i];
                } else {
                    $values[] = $splitRequest[$i];
                }
            }
            $this->params = array_combine($keys, $values);
        }
    }

    function startSomeController() {
        if (class_exists($this->getController())) {
            $link = new ReflectionClass($this->getController());
            if ($link->hasMethod($this->getAction())) {
                $method = $link->getMethod($this->getAction());
                $controller = $link->newInstance();
                $method->invoke($controller);
            } else {
                echo self::UNKNOWN_URI."2";
            }
        } else {
            echo self::UNKNOWN_URI;
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