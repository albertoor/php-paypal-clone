<?php
// Making private route
session_start ();
include "partials/navbar.php";
if(!isset($_SESSION["email"]))
    header("Location:./?controller=users&action=login");
?>

<style>
    .link_card_option {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        margin:1rem 1rem;
        padding:1rem 1rem;
        width: 150px;
    }
    .link_card_option a {
        display:flex;
        width: 150px;
        justify-content:center;
        align-items:center;
        text-decoration:none;
        color: black;
        font-weight: 450;
    }
    .cards_container_list{
        display:flex;
        flex-wrap: wrap;
    }
    .card_bank {
        display:flex;
        flex-direction:column;
        border-radius:10px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        padding:1rem 1rem;
        margin:1rem 1rem;
        width:auto;
    }
    .card_bank p {
        margin-bottom:1rem;    
    }
    .title_cards{
        margin:1rem 1rem;
        color: #0f9edd;
        font-weight: 450;
    }

    .btn_action {
        color: #0f9edd;
        font-weight: 400;
        text-decoration:none;
        margin-bottom:.5rem;
    }
    .btn_action:hover {
        text-decoration:underline;
    }

</style>

<div class="link_card_option">
        <a href="?controller=cardbank&action=link_new_card&id=<?= $_SESSION["id"]?>">
            <span class="material-icons">
                credit_card
            </span>
            <h4>Link a card</h4>
        </a>
    </div>
<div>

<h2 class="title_cards">Your linked cards</h2>
<section class="cards_container_list">
    <?php foreach ($user_cards as $user_card) { ?>    
        <div class="card_bank">
            <h4><?php echo $user_card->card_type; ?></h4>
            <p><?php echo $user_card->card_number; ?></p>
            <h4>Expiration date</h4>
            <p><?php echo $user_card->expiration_date; ?></p>
            <h4>Billing address</h4>
            <p><?php echo $user_card->billing_address; ?></p>    
            <h4>Funds</h4>
            <p>$ <?php echo $user_card->fund; ?></p>    
            <a style="color: #eed202;" class="btn_action" href="?controller=cardbank&action=update_card&id_card_bank=<?php echo $user_card->id_card_bank ?> ">Update card</a>
            <a style="color: red;" class="btn_action" href="?controller=cardbank&action=remove_card&id_card_bank=<?php echo $user_card->id_card_bank ?>">Remove card</a>
        </div>
    <?php } ?>
</section>