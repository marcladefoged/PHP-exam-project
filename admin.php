<?php

// TODO: Check the session is valid / if the user is logged
session_start();
if ( ! $_SESSION ){
 header('Location: view_login.php');
 exit();
}

?>
<!-- TODO: if user is not logged in redirect to login password_get_info -->

<!-- TODO: if user is logged then display user information and flights that can be deleted -->
<?php
$title ='admin';
require_once __DIR__.'/comp_header.php';
?>


<?php
require_once __DIR__.'/comp_navbar.php';
?>

<main>
    <div id="admin_title">
        <h1>Welcome <?= $_SESSION['user_name'] ?> B</h1>
        <p>YOU ARE NOW LOGGED IN!</p>
    </div>

    <?php
    if( $_SESSION ){
      echo '<a href="logout.php">Signout</a>';
    }
    ?>

</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>


<!-- TODO: Show all the flights with a delete button next to each flights -->

<!-- ODO: if the user clicks on the delete button you connect to an API via AJAX/FETCH and the API deletes the flight -->

<!-- TODO: create api-delete-flight.php -->