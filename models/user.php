<?php
class User{
    public $id;
    public $fullname;
    public $email;
    public $password;
    public $birthDate;

    // constructor
    public function __construct($id, $fullname, $email, $password, $birthDate) {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->password= $password;
        $this->birthDate = $birthDate;
    }

    public static function loginProcess($email, $password) {
        $connectionDB = DB::createInstance();
        $sql = $connectionDB->prepare("SELECT * FROM users WHERE email=? AND password=?");
        $user = $sql->fetch();
        if ($sql->execute(array($email, $password))) {
            return;
        } else {
            echo "Incorrect Credentials";
        }
    }

    public static function signUpProcess($fullname, $email, $password, $birthDate) {
        $connectionDB = DB::createInstance();
        $sql = $connectionDB->prepare("INSERT INTO users(fullname, email, password, birthDate) VALUES (?,?,?,?)");
        if ($sql->execute(array($fullname, $email, $password, $birthDate))) {
            echo "Account created successful";
        } else {
            echo "Something wrong!";
        }
    }
}

?>