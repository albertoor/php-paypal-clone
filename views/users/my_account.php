<?php
// Making private route
session_start ();
include "partials/navbar.php";
if(!isset($_SESSION["email"]))
    header("Location:./?controller=users&action=login");
?>
<div>
    <h1>HELLO WELCOME</h1>
    <?= $_SESSION["email"]?>
</div>