<?php
include_once("models/card_bank.php");
include_once("database/connection.php");
// Init database
DB::createInstance();

class CardBankController {
    public function link_card() {
        include_once("views/cardbank/card_bank.php");
    }

    public function link_new_card() {
        $errors = [];
        if ($_POST) {
            $card_number = $_POST['card_number'];
            $card_type = $_POST['card_type'];
            $expiration_date = $_POST['expiration_date'];
            $security_code = $_POST['security_code'];
            $billing_address = $_POST['billing_address'];
            $fund = (int)$_POST['fund'];
            $id_user = 14;

            // if ( ($card_number == "") )

            CardBank::link_new_card($card_number, $card_type, $expiration_date, $security_code, $billing_address, $fund, $id_user);            
        }
        include_once("views/cardbank/add_card.php");
    }
}


?>