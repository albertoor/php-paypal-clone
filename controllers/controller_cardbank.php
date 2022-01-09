<?php
include_once("models/card_bank.php");
include_once("database/connection.php");
// Init database
DB::createInstance();

class CardBankController {
    public function link_card() {
        // List all user cards
        $id_user = $_REQUEST["id"];
        $user_cards = CardBank::all_user_cards($id_user);
        include_once("views/cardbank/card_bank.php");   
    }

    public function success() {
        include_once("views/cardbank/success.php");
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
            CardBank::link_new_card($card_number, $card_type, $expiration_date, $security_code, $billing_address, $fund, $id_user);            
        }
        include_once("views/cardbank/add_card.php");
    }

    public function remove_card() {
        $id_card_bank = $_REQUEST['id_card_bank'];
        $id = $_REQUEST['id'];
        CardBank::remove_card($id_card_bank);
        header("Location:./?controller=cardbank&action=link_card&id="+ id);
    }

    public function update_card() {

        if ($_POST){
            $id_card_bank=(int)$_REQUEST['id_card_bank'];
            $card_number=$_POST['card_number'];
            $card_type=$_POST['card_type'];
            $expiration_date=$_POST['expiration_date'];
            $security_code=$_POST['security_code'];
            $billing_address=$_POST['billing_address'];
            $fund=$_POST['fund'];
            $id_user=$_POST['id_user'];
    
            CardBank::update_card(
                $id_card_bank,
                $card_number,
                $card_type,
                $expiration_date,
                $security_code,
                $billing_address,
                $fund,
                $id_user,
            );
            header("Location:./?controller=cardbank&action=link_card&id=".strval($id_user));
        }
        $id_card_bank = $_REQUEST['id_card_bank'];
        $card_bank = CardBank::findById($id_card_bank); 
        include_once("views/cardbank/update_card.php");
    }
}


?>