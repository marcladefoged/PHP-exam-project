<?php
$title ='flights';
require_once __DIR__.'/comp_header.php';
?>

<?php
require_once __DIR__.'/comp_navbar.php';
?>

<main>

<div id="index_title">
  <h1>
    Welcome to Momondo!
  </h1>
</div>
<div id="flights-search">
    <form>
      <div id="from-container">
        <input name="from_city" id="from-input" type="text" placeholder="from"           
          oninput="show_from_results()"
          onblur="hide_from_results()"
        >
     
        <div id="from-results"></div>
      </div>
      <div id="to-container">
        <input name="to_city" id="to-input" type="text" placeholder="to"           
          oninput="show_to_results()"
          onblur="hide_to_results()"
        >
     
        <div id="to-results"></div>
        
      </div>
    </form>
  </div>'
  
</main>

<script src="app.js"></script> 

<?php
require_once __DIR__.'/comp_footer.php';
?>