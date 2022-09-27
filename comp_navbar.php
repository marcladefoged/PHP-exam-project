<?php
require_once __DIR__.'/_dictionary.php';
require_once __DIR__.'/comp_header.php';
?>

<nav>

<ul>
    <li>
 
    <a href="/index?lang=<?=$lang?>" <?= $title == 'flights' ? 'class="active"' : '' ?>>
     <ion-icon class="navicon" name="airplane-outline"></ion-icon>
     <span>
     <?= $nav_dictionary[$lang.'_plane_nav']; ?>
    </span>
    </a>        

     <a href="/stays?lang=<?=$lang?>"<?= $title == 'stays' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="bed-outline"></ion-icon>
    <span>
    <?= $nav_dictionary[$lang.'_stays_nav']; ?>
    </span>   
    </a> 
    
    <a href="/cars?lang=<?=$lang?>" <?= $title == 'cars' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="car-sport-outline"></ion-icon>
    <span>
    <?= $nav_dictionary[$lang.'_cars_nav']; ?>
    </span>
    </a>  
    
    <a href="/ferries?lang=<?=$lang?>" <?= $title == 'ferries' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="boat-outline"></ion-icon>
    <span>
    <?= $nav_dictionary[$lang.'_ferries_nav']; ?>
    </span>
    </a>  
    
    <a href="/experiences?lang=<?=$lang?>" <?= $title == 'experiences' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="trail-sign-outline"></ion-icon>
    <span>
    <?= $nav_dictionary[$lang.'_experiences_nav']; ?>
    </span>
    </a>
    
    <a href="/explore?lang=<?=$lang?>" <?= $title == 'explore' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="globe-outline"></ion-icon>
    <span>
    <?= $nav_dictionary[$lang.'_explore_nav']; ?>
     </span>
    </a>
    
    <a href="/restrictions?lang=<?=$lang?>" <?= $title == 'restrictions' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="heart-circle-outline"></ion-icon>
    <span>
    <?= $nav_dictionary[$lang.'_restrictions_nav']; ?>
    </span>
    </a>
    
    </li>
</ul>


</nav>