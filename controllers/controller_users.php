<?php

include_once("models/user.php");
include_once("database/connection.php");
// Init database
DB::createInstance();

class UsersController {
    public function login(){

        if ($_POST) {
            print_r($_POST);
        }

        include_once("views/pages/login.php");
    }

    public function signup(){
        if ($_POST) {
            print_r($_POST);
        }
        include_once("views/pages/signup.php");
    }
}


?>