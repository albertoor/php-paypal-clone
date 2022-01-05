<?php
include_once("controllers/controller_".$controller.".php");

$controllerObj = ucfirst($controller)."Controller";

$controller = new $controllerObj();

$controller->$action();
?>