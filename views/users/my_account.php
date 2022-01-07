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
    .section_my_account h3 {
        color: #05a3e3;
        font-weight: 400;
    }
    .card_account {
        box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px,
            rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
        border-radius: 10px;
        width: 300px;
        margin: 1rem 1rem;
        padding: 1rem 1rem;
    }
    .recent_activity {
        display:flex;
        flex-direction: column;
    }
    .recent_activity div p {
        margin-top: .2rem;
    }
    .recent_activity h4 {
        margin-bottom: .2rem;
    }
    .user_options{
        display:flex;
        justify-content: space-around;
    }
    .user_option a{
        display:flex;
        flex-direction:column;
        justify-content: center;
        align-items:center;
        text-decoration: none;
        color: black;
    }
    .user_option a p{
        margin-top: .7rem;
    }
    .bank_cards{
        display:flex;
        flex-direction: row;
    }
    .bank_cards img{
        width: 50px;
        margin-right: 1rem;
    }
    .link_card {
        padding: .8rem .8rem;
        text-decoration:none;
        color: #05a3e3;
        border: 1px solid #05a3e3;
        border-radius: 15px;
    }
</style>

<section class="section_my_account">
    <h3>Hello <?= $_SESSION["email"]?> !</h3>
    <div class="user_options card_account">
        <div class="user_option">
            <a href="#">
                <span class="material-icons">
                    paid
                </span>
                <p>Send</p>
            </a>
        </div>
        <div class="user_option">
            <a href="#">
                <span class="material-icons">
                    payments
                </span>
                <p>Request</p>
            </a>
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
    <a href="#" class="link_card">Link a Card</a>
</section>


