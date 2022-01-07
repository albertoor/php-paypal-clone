<?php
// Making private route
session_start ();
include "partials/navbar.php";
if(!isset($_SESSION["email"]))
    header("Location:./?controller=users&action=login");
?>

<style>
    .section_my_account{
        display:flex;
        flex-direction:column;
        margin: 1rem 1rem;
        justify-content: center;
        align-items:center;
    }
    .card_account {
        box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px,
            rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
        border-radius: 10px;
        width: 300px;
        margin: 1rem 1rem;
    }
    .recent_activity {
        display:flex;
        flex-direction: column;
    }
    .user_options{
        display:flex;
        justify-content: space-around;
    }
    .bank_cards{
        display:flex;
        flex-direction: row;
    }
    .bank_cards img{
        width: 50px;
    }
</style>

<section class="section_my_account">
    <h3>Hello <strong><?= $_SESSION["email"]?></strong></h3>
    <div class="user_options card_account">
        <div>
            <span class="material-icons">
                paid
            </span>
            <p>Send</p>
        </div>
        <div>
            <span class="material-icons">
                payments
            </span>
            <p>Request</p>
        </div>
    </div>
    <div class="recent_activity card_account">
        <div>
            <h4>WDC (Mexico) S. de R.L de C.V</h4>
        </div>
        <div>
            <p>16 Dec</p>
            <p>Payment</p>
        </div>
        <h4>$0.00</h4>
    </div>
    <div class="bank_cards card_account">
        <img src="public/img/visa.png" alt="" >
        <div>
            <p>Visa</p>
            <p>Debit ****1234</p>
        </div>
    </div>
    <a href="#">Link a Card</a>
</section>


