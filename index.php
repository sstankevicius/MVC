<?php

$path = str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['REQUEST_URI']);


$path = explode('/', ltrim($path,'/'));


$controller = ucfirst($path[0]);

if (file_exists('controller/'.$controller.'.php')) {
  require 'controller/'.$controller.'.php';
  $obj = new $controller;

}else{
  require ('controller/Error.php');
  $obj = new ErrorController();
  $obj->showErrorPage();
}
?>
