<?php
// Making private route
session_start ();
if(!isset($_SESSION["email"]))
    header("Location:./?controller=users&action=login");
?>
<div>
    <h1>HELLO WELCOME</h1>
    <?= $_SESSION["email"]?>
    <a href="?controller=users&action=logout">Log out</a>
</div>