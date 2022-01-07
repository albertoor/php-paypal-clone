<?php
include_once("models/card_bank.php");
include_once("database/connection.php");
// Init database
DB::createInstance();

class CardBankController {
    public function link_card() {
        include_once("views/cardbank/card_bank.php");
    }
}


?>