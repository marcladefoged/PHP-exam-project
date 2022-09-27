<?php
require_once __DIR__.'/_dictionary.php';
// session_start();
if(!isset($_GET['lang'])){$_SESSION['lang'] = "en";};
if(isset($_GET['lang'])){$_SESSION['lang'] = $_GET['lang'];};

$lang = $_SESSION['lang'];
?>

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
      <a href="index">
        <img src="logo.png" class="logo" alt="momondo.png">
      </a>
    </div>

    <div id="header_menu">
      <a href="/signup"><?= $dictionary[$lang.'_signup']; ?></a>
      <a href="/login"><?= $dictionary[$lang.'_login']; ?></a> 
        <div class="dropdown">
        <button class="dropbtn"><?= $dictionary[$lang.'_language']; ?>: <p><?= $flag_dictionary[$lang.'_flag'] ?></p></button>
          <div class="dropdown-content">
          <a id="lang-dk" href="?lang=dk">Dansk &#127465&#127472</a>
          <a id="lang-eng" href="?lang=en">English 🇬🇧</a>
          </div>
        </div>
    </div>

</header>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



