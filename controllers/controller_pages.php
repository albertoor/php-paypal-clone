<?php
class PagesController {
    public function home() {
        include_once("views/pages/home.php");
    }

    public function error() {
        include_once("views/pages/error.php");
    }

    public function login(){
        include_once("views/pages/login.php");
    }

    public function signup(){
        include_once("views/pages/signup.php");
    }
}
?>