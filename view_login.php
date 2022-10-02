<?php
$title ='login';
require_once __DIR__.'/comp_header.php';
?>

<?php
require_once __DIR__.'/comp_navbar.php';
?>

<html>
    <main>

    <div id="login_title">
        <div>
            <h2><?= $dictionary[$lang.'_login']; ?>!</h2>
            <p><?= $dictionary[$lang.'_login_member']; ?></p>
        </div>
    </div>

    <div id="login_button">
        <!-- <button> -->
        <a href="#" onclick="show_login_popup()"><?= $dictionary[$lang.'_login']; ?>!</a>
        <!-- </button> -->
    </div>

    <div id="signup_title">
        <div>
            <h2><?= $dictionary[$lang.'_signup_headline2']; ?></h2>
            <p><?= $dictionary[$lang.'_login_notamember']; ?></p>
        </div>
    </div>

    <div id="signup_button">
        <a href="view_signup.php">Sign up!</a>
    </div>

    <div id="login_splashimage">
    <img src="/images/login1.jpg" height="600px" width="950px" alt="login1">
    </div>

        <div class="login_popup">
                <div class="login_popup_content">
                <img src="close.png" alt="close" onclick="hide_login_popup()" class="login_close">
                <img src="logo.png" class="logo" alt="logo">

                <form id="login_form" method="POST" onsubmit="validate(login_validation); return false">
                <input 
                type="text" 
                name="user_email" 
                data-validate="email" 
                placeholder="Email"
                onblur="validate_email()"
                >

                <input 
                type="text" 
                name="user_password" 
                data-validate="password" 
                placeholder="Password"
                >
                <button class="login_button">Log ind!</button>
                </form>
            </div>
        </div>
    </main>
</html>

<script>

async function login_validation() {
    // console.log('TEST123')
    const loginform = document.getElementById("login_form");
    const conn = await fetch('api-login.php', {
      method : "POST",
      body : new FormData(loginform)
    });
    if( !conn.ok ) {
      console.log('No login connection');
      Swal.fire(
        'Login failed!',
        '',
        'error'
        )
     loginform.user_email.classList.add("validate_error");
     loginform.user_password.classList.add("validate_error");
    };
    if (conn.ok) {
      console.log('login connection successful')
      window.location = 'admin.php';
  }
}

async function validate_email() {
    const email_input = event.target
    const conn = await fetch('api-get-email.php?user_email='+email_input.value);
    console.log(email_input);

    if( ! conn.ok ) {
        email_input.classList.remove("validate_error");
    }
    if( conn.ok ) {
        email_input.classList.add("validate_error");
    }
  }

  function display_error_message(input_field) {
      let error_message = 'Email already exists!'
      console.log(input_field.nextSibling);
      input_field.nextElementSibling.innerHTML = error_message;
  }
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require_once __DIR__.'/comp_footer.php';
?>