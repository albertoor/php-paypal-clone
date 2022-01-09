<?php
// Making private route
session_start ();
include "partials/navbar.php";
if(!isset($_SESSION["email"]))
    header("Location:./?controller=users&action=login");
?>

<h1>Operation succefull</h1>
<a href="?controller=cardbank&action=link_card&id=<?= $_SESSION["id"]?>">Continue</a>