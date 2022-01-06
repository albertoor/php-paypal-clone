<?php
// if user is logged in redirect to my_account
session_start ();
if(isset($_SESSION["email"]))
    header("Location:./?controller=users&action=my_account");
?>
<section class="section_form">
    <div class="card_form">
        <div class="logo">
          <img src="public/img/form-logo-paypal.png" alt="logo" />
        </div>
        <form action="" method="post">
          <input name="email" type="text" placeholder="Email" />
          <input name="password" type="password" placeholder="Password" />
          <a class="link_form" href="forgot-password">
            Forgot your password?
          </a>
          <input type="submit" value="Log In" class="main_btn" name="login_sub"/>
          <div class="division_separator">or</div>
          <a href="?controller=users&action=signup" class="secondary_btn">Sign Up</a>
        </form>
    </div>
</section>