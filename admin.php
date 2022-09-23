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
        <h1>Velkommen <?= $_SESSION['user_name'] ?></h1>
        <p>Du er nu logget ind!</p>
    </div>

    <div id="logout_button">
    <?php
    if( $_SESSION ){
      echo '<a href="logout.php">logout</a>';
    }
    ?>
    </div>

    <div>
        <img src="/img/copenhagen.jpg" alt="">
    </div>

    <?php
    foreach($flights as $flight){
    ?>

    <form id="admin_flightlist">

    
      <div>
        <img src="/images/<?= $flight['departure_city'] ?>.jpg" alt="departure image" width="100px" height="100px">
        <span>
          Departure city: <?= $flight['departure_city'] ?>
        </span>
        <span>
          Arrival city: <?= $flight['arrival_city'] ?>
        </span>
          <input style="display:none" 
          name="flight_id" 
          value="<?= $flight['id'] ?>" 
          type="text"
          >

          <input style="display:none" 
          name="flight_id" 
          value="<?= $flight['id'] ?>" 
          type="text"
          placeholder="Arriving to">
          <img src="/images/<?= $flight['arrival_city'] ?>.jpg" alt="arrival image" width="100px" height="100px">
          <button type="button" onclick="delete_flight()">
            🗑️ Delete
          </button>
        </div>
      </form>

    <?php
    }
    ?>


</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>

<script>
        async function delete_flight(){
      const frm = event.target.form
      console.log(frm)
      const conn = await fetch('api-delete-flight.php', {
        method : "POST",
        body : new FormData(frm)
      })
      const data = await conn.json()
      if( ! conn.ok ){
        // Sweet alert: ups... fligth not found
        console.log(data)
        return
      }
      // Success
      console.log(data)
      frm.remove()
    }
</script>


<!-- TODO: Show all the flights with a delete button next to each flights -->

<!-- ODO: if the user clicks on the delete button you connect to an API via AJAX/FETCH and the API deletes the flight -->

<!-- TODO: create api-delete-flight.php -->