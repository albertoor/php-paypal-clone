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
        $this->expiration_date = $expiration_date;
        $this->security_code = $security_code;
        $this->billing_address = $billing_address;
        $this->fund = $fund;
        $this->id_user = $id_user;
    }

    public static function link_new_card($card_number, $card_type, $expiration_date, $security_code, $billing_address, $fund, $id_user) {
        $connectionDB = DB::createInstance();
        $sql = $connectionDB->prepare("INSERT INTO card_banks(card_number, card_type, expiration_date, security_code, billing_address, fund, id_user) VALUES (?,?,?,?,?,?,?)");
        $sql->execute(array($card_number, $card_type, $expiration_date, $security_code, $billing_address, $fund, $id_user));
        $count = $sql->rowCount();
        
        if ($count) {
            header("Location:./?controller=cardbank&action=success_add_card");
        } else {
            header("Location:./?controller=users&action=login&err=1");
        }
    }

    public static function all_user_cards($id_user) {
        $user_cards = [];
        $connectionDB = DB::createInstance();
        $sql = $connectionDB->prepare("SELECT * FROM card_banks WHERE id_user=?");
        $sql->execute(array($id_user));
        
        foreach($sql->fetchAll() as $card_bank) {
            $user_cards[] = new CardBank(
                            $card_bank['id_card_bank'],
                            $card_bank['card_number'],
                            $card_bank['card_type'],
                            $card_bank['expiration_date'],
                            $card_bank['security_code'],
                            $card_bank['billing_address'],
                            $card_bank['fund'],
                            $card_bank['id_user']
            );
        }
        return $user_cards;
    }

    public static function remove_card($id_card_bank) {
        $connectionDB = DB::createInstance();
        $sql = $connectionDB->prepare("DELETE FROM card_banks WHERE id_card_bank=?");
        $sql->execute(array($id_card_bank));
        $count = $sql->rowCount();
        
        if ($count) {
            header("Location:./?controller=cardbank&action=success_add_card");
        } else {
            header("Location:./?controller=users&action=login&err=1");
        }
    }
}
?>