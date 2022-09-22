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
            <h2>Opret dig her!</h2>
            <p>Her kan du oprette dig og få del af Momondos mange fordele!</p>
        </div>
    </div>

    <div id="signup_button">
        <a href="#" onclick="show_signup_popup()">Sign up!</a>
    </div>

    <div id="signup_splashigif">
    <img src="/images/signup1.gif" height="600px" width="950px" alt="login1">
    </div>

    <div class="signup_popup">
    <div class="signup_popup_content">
    <img src="close.png" alt="close" onclick="hide_signup_popup()" class="signup_close">
    <img src="logo.png" class="logo" alt="logo">
    <form id="signup_form" onsubmit="validate(signup_validation()); return false">
    <input 
    type="text" 
    name="user_email" 
    placeholder="Email"
    data-validate="email"
    >
    <input
     type="text" 
     name="user_name" 
     placeholder="Username"
     data-validate="str"
     >
    <input
     type="text"
    name="user_password" 
    placeholder="Password"
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
        window.location = 'view_index.php';
    // }
  }

</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require_once __DIR__.'/comp_footer.php';
?>