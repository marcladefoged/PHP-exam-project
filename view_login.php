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
            <h2>Log ind!</h2>
            <p>Følg priser, organiser rejseplaner, og få adgang til medlemstilbud med din momondo-konto.</p>
        </div>
    </div>

    <div id="login_button">
        <!-- <button> -->
        <a href="#" onclick="show_login_popup()">Log ind!</a>
        <!-- </button> -->
    </div>

    <div id="signup_title">
        <div>
            <h2>Eller opret dig her!</h2>
            <p>Hvis du ikke allerede har oprettet dig hos Momondo, kan du gøre det her!</p>
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
                placeholder="Email">
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
    console.log('TEST123')
    const loginform = document.getElementById("login_form");
    const conn = await fetch('api-login.php', {
      method : "POST",
      body : new FormData(loginform)
    }); 
    if( !conn.ok ) {
      console.log('No login connection');
    };
    if (conn.ok) {
      console.log('login connection successful')
      window.location = 'admin.php';
  }
}
</script>

<?php
require_once __DIR__.'/comp_footer.php';
?>