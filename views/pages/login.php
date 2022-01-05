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
          <input type="submit" value="Log In" class="main_btn" />
          <div class="division_separator">or</div>
          <a href="?controller=users&action=signup" class="secondary_btn">Sign Up</a>
          <?php 
            if(isset($_REQUEST["err"]))
	            $msg="Invalid username or Password";?>
                <p style="color:red;">
                <?php if(isset($msg)) {
                    echo $msg;
            }?></p>
        </form>
    </div>
</section>