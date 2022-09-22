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
    <a href="view_index.php" <?= $title == 'flights' ? 'class="active"' : '' ?>>
     <ion-icon class="navicon" name="airplane-outline"></ion-icon>
     <span>
     Fly
    </span>
    </a>        
    
     <a href="view_stays.php" <?= $title == 'stays' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="bed-outline"></ion-icon>
    <span>
    Overnatning
    </span>   
    </a> 
    
    <a href="view_cars.php" <?= $title == 'cars' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="car-sport-outline"></ion-icon>
    <span>
    Bil
    </span>
    </a>  
    
    <a href="view_ferries.php" <?= $title == 'ferries' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="boat-outline"></ion-icon>
    <span>
    Færger
    </span>
    </a>  
    
    <a href="view_experiences.php" <?= $title == 'experiences' ? 'class="active"' : '' ?>>
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
    
    <a href="view_explore.php" <?= $title == 'explore' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="globe-outline"></ion-icon>
    <span>
    Udforsk
     </span>
    </a>
    
    <a href="view_restrictions.php" <?= $title == 'restrictions' ? 'class="active"' : '' ?>>
    <ion-icon class="navicon" name="heart-circle-outline"></ion-icon>
    <span>
    Rejserestriktioner
    </span>
    </a>
    
    </li>
</ul>


</nav>