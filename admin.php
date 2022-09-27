<?php

// TODO: Check the session is valid / if the user is logged
session_start();
if ( ! $_SESSION ){
 header('Location: view_login.php');
 exit();
}

?>
<!-- TODO: if user is not logged in redirect to login password_get_info -->


<?php
$title ='admin';
require_once __DIR__.'/comp_header.php';
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

<!-- TODO: if user is logged then display user information and flights that can be deleted -->
<main>
    <div id="admin_title">
        <h1><?= $dictionary[$lang.'_admin_welcome']; ?> <?= $_SESSION['user_name'] ?></h1>
        <p><?= $dictionary[$lang.'_admin_headline']; ?></p>
    </div>

    <div id="logout_button">
    <?php
    if( $_SESSION ){
      echo '<a href="bridge-logout.php">logout</a>';
    }
    ?>
    </div>

    <div id="admin_flightlist_container">

    <?php
    foreach($flights as $flight){
    ?>

    <form id="admin_flightlist">

    
      <div id="admin_flight">
        <!-- <img src="/images/<?= $flight['departure_city'] ?>.jpg" alt="departure image" width="100px" height="100px">
        <span> -->
        <div id="admin_flight_departure">
        <?= $dictionary[$lang.'_admin_departure']; ?>: <?= $flight['departure_city'] ?>
        <?= $dictionary[$lang.'_admin_airport']; ?>: <?= $flight['departure_airport'] ?>
        <?= $dictionary[$lang.'_admin_departure_date']; ?>: <?= $flight['departure_date'] ?>
        <?= $dictionary[$lang.'_admin_departure_time']; ?>: <?= $flight['departure_time'] ?>
        </div>
        </span>
        <span>
        <div id="admin_flight_arrival">
        <?= $dictionary[$lang.'_admin_arrival']; ?>: <?= $flight['arrival_city'] ?>
        <?= $dictionary[$lang.'_admin_airport']; ?>: <?= $flight['arrival_airport'] ?>
        <?= $dictionary[$lang.'_admin_arrival_date']; ?>: <?= $flight['return_date'] ?>
        <?= $dictionary[$lang.'_admin_arrival_time']; ?>: <?= $flight['return_time'] ?>
        </div>
        </span>
          <!-- <img src="/images/<?= $flight['arrival_city'] ?>.jpg" alt="arrival image" width="100px" height="100px"> -->
          <button type="button" onclick="delete_flight()">
            🗑️ <?= $dictionary[$lang.'_admin_delete']; ?>
          </button>
        </div>

    </form>

    <?php
    }
    ?>

</div>


</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>

<script>
        async function delete_flight(){
      const flight = event.target.form;
      // console.log(flight)
      const conn = await fetch("api-delete-flight.php", {
        method : "POST",
        body : new FormData(flight)
      })
      const data = await conn.text()
      if( ! conn.ok ){
        // Sweet alert: ups... fligth not found
        console.log(data)
        return
      }
      // Success
      console.log(data)
      flight.remove()
    }
</script>


<!-- TODO: Show all the flights with a delete button next to each flights -->

<!-- ODO: if the user clicks on the delete button you connect to an API via AJAX/FETCH and the API deletes the flight -->

<!-- TODO: create api-delete-flight.php -->