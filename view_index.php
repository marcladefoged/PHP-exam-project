<?php
$title ='flights';
require_once __DIR__.'/comp_header.php';
require_once __DIR__.'/_dictionary.php';
?>

<?php
require_once __DIR__.'/comp_navbar.php';
?>

<?php
try{
  $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $q = $db->prepare('SELECT * FROM table_flights');
  $q->execute();
  $flights = $q->fetchAll(PDO::FETCH_ASSOC);
  // echo json_encode($flights);
}catch(Exception $ex){
  echo "Sorry went terribly wrong";
  exit();
}
?>

<main>

<div id="index_title">
  <h1>
   <?= $dictionary[$lang.'_index_title']; ?>
  </h1>
</div>
<div id="flights-search">
    <form>
      <div id="from-container">
        <input name="from_city" id="from-input" type="text" placeholder="<?= $dictionary[$lang.'_search_from']; ?>"           
          oninput="show_cities_from()"
          onblur="hide_cities_from()"
        >
     
        <div id="from-results">
          <span >
          <?= $flight['from_city'] ?>
          </span>
        </div>
      </div>

      <div id="flights_rotate">
          <img src="images/rotate.png" alt="rotate" height="50px" width="50px">
        </div>

      <div id="to-container">
        <input name="to_city" id="to-input" type="text" placeholder="<?= $dictionary[$lang.'_search_to']; ?>"           
          oninput="show_cities_to()"
          onblur="hide_cities_to()"
        >
     
        <div id="to-results"></div>

        <!-- <div id="date-container">
          <input type="date" placeholder="Select date">
        </div> -->
        
      </div>
    </form>
  </div>

  <div id=frontpage_image>
    <img src="images/frontpageimage.jpg" alt="frontpage image">
  </div>
  
</main>

<script src="app.js"></script> 

<?php
require_once __DIR__.'/comp_footer.php';
?>