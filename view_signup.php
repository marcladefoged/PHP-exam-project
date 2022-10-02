<?php
$title ='login';
require_once __DIR__.'/comp_header.php';
?>

<?php
require_once __DIR__.'/comp_navbar.php';
?>

<html>
    <main>

    <div id="signup_title">
        <div>
            <h2><?= $dictionary[$lang.'_signup_headline']; ?></h2>
            <p><?= $dictionary[$lang.'_signup_benefits']; ?></p>
        </div>
    </div>

    <div id="signup_button">
        <a href="#" onclick="show_signup_popup()">Sign up!</a>
    </div>

    <div id="signup_splashigif">
    <img src="/images/signup1.gif" height="500px" width="750px" alt="login1">
    </div>

    <div class="signup_popup">
    <div class="signup_popup_content">
    <img src="close.png" alt="close" onclick="hide_signup_popup()" class="signup_close">
    <img src="logo.png" class="logo" alt="logo">
    <form id="signup_form" method="POST" onsubmit="validate(signup_validation); return false">
    <input 
    type="text" 
    name="user_email" 
    placeholder="Email"
    data-validate="email"
    onblur="validate_email()"
    >
    <p style="color:red;"></p>
    <input
     type="text" 
     name="user_name" 
     placeholder="Username"
     data-validate="str"
     data-min="2"
     data-max="20"
     >
    <input
     type="text"
    name="user_password" 
    placeholder="Password"
    data-validate="str"
     data-min="2"
     data-max="20"
    >
    <input 
    type="text" 
    name="user_confirm_password" 
    placeholder="Confirm password"
    data-match-name="user_password"
    data-validate="match"
    
    >
    <button class="signup_button">Sign up!</button>
    </form>
  </div>
</div>

    </main>
</html>

<script>

async function signup_validation() {
    const signupform = document.getElementById("signup_form");
    const conn = await fetch('api-signup.php', {
      method : "POST",
      body : new FormData(signupform)
    }); 
    if( ! conn.ok ) {
      console.log('Could not sign in');
      return
    }
    const data = await conn.json()
    // Success
    // if (conn.ok) { 
      console.log(data.message)
      Swal.fire(
        'Good job!',
        'You have now signed up!',
        'success'
        )
        // window.location = 'view_index.php';
    // }
  }

  async function validate_email() {
    const email_input = event.target
    const conn = await fetch('api-get-email.php?user_email='+email_input.value);
    console.log(email_input);

    if( ! conn.ok ) {
      console.log('Email already exists!');
      email_input.classList.add("validate_error");
      display_error_message(email_input);
    }
    if( conn.ok ) {
      console.log('Email is available!');
      email_input.classList.remove("validate_error");
      remove_error_message(email_input)
    }
  }

  function display_error_message(input_field) {
      let error_message = 'Email already exists!'
      console.log(input_field.nextSibling);
      input_field.nextElementSibling.innerHTML = error_message;
  }

  function remove_error_message(input_field) {
      let error_message = ''
      input_field.nextElementSibling.innerHTML = error_message;
  }


</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require_once __DIR__.'/comp_footer.php';
?>