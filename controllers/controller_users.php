<?php

include_once("models/user.php");
include_once("database/connection.php");
// Init database
DB::createInstance();

class UsersController {
    public function login(){
        include_once("views/pages/login.php");
    }

    public function signup(){
        if ($_POST) {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $encryptedPwd = md5($_POST['password']);
            $birthDate = date("Y-m-d", strtotime($_POST['birthDate']));;

            if ( ($fullname == "") || ($email == "") || ($encryptedPwd == "") || ($birthDate == "")) {
                echo "All fileds are required, please fill the form";
            } else {
                User::signUpProcess($fullname, $email, $encryptedPwd, $birthDate);
            }
        }
        include_once("views/pages/signup.php");
    }
}


?>