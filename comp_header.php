
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
    <input type="text" placeholder="Email">
    <input type="text" placeholder="Username">
    <input type="password" placeholder="Password">
    <input type="password" placeholder="Confirm password">
    <a href="#" class="signup_button">Sign up!</a>
  </div>
</div>

<div class="login_popup">
  <div class="login_popup_content">
    <img src="close.png" alt="close" onclick="hide_login_popup()" class="login_close">
    <img src="logo.png" class="logo" alt="logo">
    <input type="text" placeholder="Username">
    <input type="password" placeholder="Password">
    <a href="#" class="login_button">Log ind!</a>
  </div>
</div>

