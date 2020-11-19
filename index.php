<?php

define("SERVER_ROOT", dirname(__FILE__));

function my_autoloader($class) {
    $classArray = explode('\\', $class);

    $classPath = '';
    $count = sizeof($classArray);
    if ($classArray[0] == 'PDO') {
        include "pdoObject.php";
    } else {
        foreach ($classArray as $key => $item) {
            if ($key + 1 != $count) {
                $classPath .= $item . '/';
            } else {
                $classPath .= $item;
            }
        }

        include $classPath . '.php';
    }
}

spl_autoload_register('my_autoloader');

$method= $_GET['action'].'Action';

include(SERVER_ROOT . '/' . 'Controller'. '/' . 'UserController' . '.php');

$class = new \Controller\UserController();

$class -> $method();

?>