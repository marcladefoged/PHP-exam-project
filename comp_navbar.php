<?php
require_once __DIR__.'/_dictionary.php';
require_once __DIR__.'/comp_header.php';
?>

<nav>

<ul>
    <li>
 
    <!-- <a href="view_login.php" onclick="show_login_popup() <?= $title == 'login' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="person-circle-outline"></ion-icon>
    <span>
    Log ind
    </span>
    </a>         
     -->
    <a href="/index" <?= $title == 'flights' ? 'class="active"' : '' ?>>
     <ion-icon class="navicon" name="airplane-outline"></ion-icon>
     <span>
     Fly
    </span>
    </a>        

     <a href="/stays?lang="<?= $lang ?> <?= $title == 'stays' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="bed-outline"></ion-icon>
    <span>
    Overnatning
    </span>   
    </a> 
    
    <a href="/cars" <?= $title == 'cars' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="car-sport-outline"></ion-icon>
    <span>
    Bil
    </span>
    </a>  
    
    <a href="/ferries" <?= $title == 'ferries' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="boat-outline"></ion-icon>
    <span>
    Færger
    </span>
    </a>  
    
    <a href="/experiences" <?= $title == 'experiences' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="trail-sign-outline"></ion-icon>
    <span>
    Oplevelser
    </span>
    </a>
    
     <!-- <a href="view_packagedeals.php" >
    <ion-icon class="navicon" name="albums-outline"></ion-icon>
    <span>
    Pakkerejser
    </span>
    </a> -->
    
    <a href="/explore" <?= $title == 'explore' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="globe-outline"></ion-icon>
    <span>
    Udforsk
     </span>
    </a>
    
    <a href="/restrictions" <?= $title == 'restrictions' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="heart-circle-outline"></ion-icon>
    <span>
    Rejserestriktioner
    </span>
    </a>
    
    </li>
</ul>


</nav>