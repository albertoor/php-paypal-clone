<?php
// Making private route
session_start ();
include "partials/navbar.php";
if(!isset($_SESSION["email"]))
    header("Location:./?controller=users&action=login");
?>
<div class="link_card_option">
        <a href="?controller=cardbank&action=link_new_card&id=<?= $_SESSION["id"]?>">
            <span class="material-icons">
                credit_card
            </span>
            <h4>Link a card</h4>
        </a>
    </div>
<div>
<?php foreach ($user_cards as $user_card) { ?>    
    <?php echo $user_card->card_type; ?>
    <section class="card_bank">
            <div>
                <span class="material-icons">
                    payment
                </span>
                </div>
            <div>
                <h4><?php echo $user_card->card_type; ?></h4>
                <p><?php echo $user_card->card_number; ?></p>
            </div>
        </div>
    </section>
    <section>
        <div>
            <img src="public/img/visa_card.png" alt="">
            <p><?php echo $user_card->card_number; ?></p>
        </div>
        <p>Visa Debit <?php echo $user_card->card_number; ?></p>
        <div>
            <h5>Expiration date</h5>
            <p><?php echo $user_card->card_number; ?></p>
        </div>
        <div>
            <h5>Billing address</h5>
            <p><?php echo $user_card->billing_address; ?></p>
        </div>
        <div>
            <a href="#">Update card</a>
            <a href="#">Remove card</a>
        </div>
    </section>
<?php } ?>
