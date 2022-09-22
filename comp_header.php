
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_app.css">
    <script src="app.js"></script> 
    <title><?=$title ?></title>
</head>
<body>
    
<header>

    <div>
      <a href="view_index.php">
        <img src="logo.png" class="logo" alt="momondo.png">
      </a>
    </div>

    <!-- <div id="header_title">
      <h1>
      <?=$title ?>
      </h1>
    </div> -->

    <div id="header_menu">
      <a href="#" onclick="show_signup_popup()">Sign up</a>
      <a href="#" onclick="show_login_popup()">Log ind</a>
      <a href="danish">Dansk</a>
    </div>

</header>


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
    >
    <button class="signup_button">Sign up!</button>
    </form>
  </div>
</div>

<div class="login_popup">
  <div class="login_popup_content">
    <img src="close.png" alt="close" onclick="hide_login_popup()" class="login_close">
    <img src="logo.png" class="logo" alt="logo">

    <form id="login_form" onsubmit="validate(login_validation()); return false">
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

<script>
  async function login_validation() {
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
    }
  }

  async function signup_validation() {
    const signupform = document.getElementById("signup_form");
    const conn = await fetch('api-signup.php', {
      method : "POST",
      body : new FormData(signupform)
    }); 
    if( !conn.ok ) {
      console.log('Could not sign in');
    };
    if (conn.ok) {
      console.log('signup successful!')
      // Swal.fire(
      //   'Good job '+data.message,
      //   'You clicked the button!',
      //   'success')
    }
  }

  // async function signup_validation(){
  //     const signupform = document.getElementById("signup_form");
  //     console.log(the_form)
  //     const conn = await fetch('api-signup.php', {
  //       method : "POST",
  //       body : new FormData(signupform)
  //     })
  //     if( ! conn.ok ){
  //       console.log("uppssss....")
  //       return
  //     }
  //     const data = await conn.json() // Convert text to JSON
  //     // Success
  //     console.log(data.message)

  //     )
  //   }

</script>

