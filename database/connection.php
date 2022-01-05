<?php
class DB {
    private static $instace=NULL;

    public static function createInstance() {
        if (!isset(self::$instace)) {
            $optionsPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost; dbname=paypal_clone_db', 'root', 'root', $optionsPDO);
            // print if connection is Okay
            echo "Connection Succesfully";
        }
    }
}
?>