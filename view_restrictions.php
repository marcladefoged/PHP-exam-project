<?php
$title ='restrictions';
require_once __DIR__.'/comp_header.php';
?>


<?php
require_once __DIR__.'/comp_navbar.php';
?>

<main>
    <div id="page_title">
        <h2>Globale rejserestriktioner</h2>
    </div>

    <div id="restriction_text">
        <p>
        De enkelte landes rejsestatus kan ændre sig pludseligt, og vi ved, at det kan være svært at holde øje med det hele. Derfor har vi oprettet denne side, så du kan få de oplysninger, du har brug for, når du overvejer og planlægger rejser.
        Du skal blot indtaste dit afrejseland nedenfor, og kortet ændres derefter for at afspejle landenes åbningsstatus og eventuelle indrejseskrav for flyrejsende. Sørg for at dobbelttjekke med regeringens anbefalinger i dit land, inden du booker en flyrejse.  
        </p>
    </div>
    <div id="restriction_map">
        <img src="images/restrictionmap.png" alt="restrictionmap">
    </div>

</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>
