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
        $sql->execute(array($email, $password));
        $count = $sql->rowCount();
        $user = $sql->fetch();
        if ($count) {
            session_start();
            $_SESSION['email'] = $user['email'];
            $_SESSION['id'] = $user['id'];
            header("Location:./?controller=users&action=my_account");
        } else {
            header("Location:./?controller=users&action=login&err=1");
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