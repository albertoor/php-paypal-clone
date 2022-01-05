<section class="section_form">
    <div class="card_form">
        <div class="logo">
          <img src="public/img/form-logo-paypal.png" alt="logo" />
        </div>
        <form action="" method="post">
          <input name="fullname" type="text" placeholder="Full Name" />
          <input name="email" type="text" placeholder="Email" />
          <input name="password" type="password" placeholder="Password" />
          <label>Date of birth</label>
          <input name="birthDate" type="date" />
          <input type="submit" value="Sign Up" class="main_btn" />

          <a class="link_form" href="forgot-password">
            Already have an account?
          </a>
          <a href="?controller=users&action=login" class="secondary_btn">Login</a>
        </form>
    </div>
</section>