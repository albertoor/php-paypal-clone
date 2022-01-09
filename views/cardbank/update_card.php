<?php
// Making private route
session_start ();
include "partials/navbar.php";
if(!isset($_SESSION["email"]))
    header("Location:./?controller=users&action=login");
?>

<style>
    .add_card {
        display:flex;
        flex-direction: column;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        padding:1rem 1rem;
        margin:2rem 2rem;
        align-items:center;
    }
    .add_card h2 {
        color: #0f9edd;
        font-weight: 450;
    }
    .add_card img {
        width: 150px;
    }

    .add_card form {
        display:flex;
        flex-direction: column;
        align-items:center;
    }
    .add_card form input, select {
        width: 350px;
        margin-bottom: 1rem;
        padding: 1rem 1rem;
        border: none;
        border-radius: 10px;
        -webkit-box-sizing: content-box; 
        -moz-box-sizing: content-box;    
        box-sizing: content-box;         
    }
    .link_card_btn {
        background-color: #0f9edd;
        color: #fff;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }
</style>

<div class="add_card">
    <h2>Update card</h2>
    <img src="public/img/form-logo-paypal.png" alt="logo" >
    <form action="" method="POST">
        <input name="id_user" value="<?php echo $card_bank->id_user ?>" hidden/>
        <input value="<?php echo $card_bank->card_number ?>" type="text" name="card_number" id="card_number" placeholder="Card number" required maxlength="16">
        <select name="card_type" id="card_type" required>
            <option value="Visa">Visa</option>
            <option value="Mastercard">Mastercard</option>
            <option value="American/Express">American/Express</option>
            <option value="Discover">Discover</option>
        </select>
        <input value="<?php echo $card_bank->expiration_date ?>" type="text" name="expiration_date" id="expiration_date" placeholder="mm-yy" required maxlength="5">
        <input value="<?php echo $card_bank->security_code ?>" type="number" name="security_code" id="security_code" placeholder="Security code" required maxlength="3">
        <input value="<?php echo $card_bank->billing_address ?>" type="text" name="billing_address" id="billing_address" placeholder="Billing Address" required>
        <input value="<?php echo $card_bank->fund ?>" type="number" name="fund" id="fund" placeholder="Fund" hidden>
        <input class="link_card_btn" type="submit" value="Link card">
        <?php 
          if(isset($_REQUEST["err"]))
            $msg="Check your data";
          ?>
            <p style="color:red;">
          <?php 
          if(isset($msg)){
            echo $msg;
          }
          ?>
    </form>
</div>