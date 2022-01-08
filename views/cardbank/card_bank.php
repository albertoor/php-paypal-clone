<?php
// Making private route
session_start ();
include "partials/navbar.php";
if(!isset($_SESSION["email"]))
    header("Location:./?controller=users&action=login");
?>
<section class="card_bank">
    <div class="link_card_option">
        <a href="?controller=cardbank&action=link_new_card&id=<?= $_SESSION["id"]?>">
            <span class="material-icons">
                credit_card
            </span>
            <h4>Link a card</h4>
        </a>
    </div>
    <div>
        <div>
        <span class="material-icons">
            payment
        </span>
        </div>
        <div>
            <h4>Visa</h4>
            <p>Debit ****1234</p>
        </div>
    </div>
</section>

<section>
    <div>
        <img src="public/img/visa_card.png" alt="">
        <p>****1234</p>
    </div>
    <p>Visa Debit ****1234</p>
    <div>
        <h5>Expiration date</h5>
        <p>08/2024</p>
    </div>
    <div>
        <h5>Billing address</h5>
        <p>Av. Carrillero 65</p>
        <p>Col. Sol</p>
        <p>89456 Guaymas, Son.</p>
    </div>
    <div>
        <a href="#">Update card</a>
        <a href="#">Remove card</a>
    </div>
</section>