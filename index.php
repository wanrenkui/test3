<?php

define("SERVER_ROOT", dirname(__FILE__));

$request = $_SERVER['REQUEST_URI'];

$method= $_GET['action'].'Action';

include(SERVER_ROOT . '/' . 'Controller'. '/' . 'user-controller' . '.php');

$class = new User();
$class -> $method();

?>