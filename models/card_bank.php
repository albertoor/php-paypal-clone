<?php
class CardBank {
    public $id_card_bank;
    public $card_number;
    public $card_type;
    public $expiration_date;
    public $security_code;
    public $billing_address;
    public $fund;
    public $id_user;

    // constructor
    public function __construct($id_card_bank, $card_number, $card_type, $expiration_date, $security_code, $billing_address, $fund, $id_user) {
        $this->id_card_bank = $id_card_bank;
        $this->card_number = $card_number;
        $this->card_type = $card_type;
        $this->expiration_code = $expiration_code;
        $this->security_code = $security_code;
        $this->billing_address = $billing_address;
        $this->fund = $fund;
        $this->id_user = $id_user;
    }

    // public function linkCard() {
    //     $id_user = 
    // }
}
?>