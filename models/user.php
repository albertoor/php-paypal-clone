<?php
class User{
    public $id;
    public $fullname;
    public $email;
    public $pass;
    public $birthDate;

    // constructor
    public function __construct($id, $fullname, $email, $pass, $birthDate) {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->pass= $pass;
        $this->birthDate = $birthDate;
    }

    public static function loginProcess($email, $pass) {
        
    }

    public static function signUpProcess($email, $pass) {
        
    }
}

?>