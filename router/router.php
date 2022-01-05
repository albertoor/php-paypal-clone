<?php
include_once("controllers/".$controller."_controller.php");

$controllerObj = ucfirst($controller)."Controller";

$controller = new $controllerObj();

$controller->$action();
?>