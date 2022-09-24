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
        <input name="from_flight" id="from-input" type="text" placeholder="Departing from"           
          oninput="show_flights_from()"
          onblur="hide_flights_from()"
        >
     
        <div id="from-results"></div>
      </div>

      <div id="flights_rotate">
          <img src="images/rotate.png" alt="rotate" height="50px" width="50px">
        </div>

      <div id="to-container">
        <input name="to_flight" id="to-input" type="text" placeholder="Arriving to"           
          oninput="show_flights_to()"
          onblur="hide_flights_to()"
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