<?php
$title ='ferries';
require_once __DIR__.'/comp_header.php';
?>


<?php
require_once __DIR__.'/comp_navbar.php';
?>

<main>
<div id="ferries_section">
    <div id="ferries_title">
        <h2>Find billige færgebilletter i hele verden.</h2>
    </div>

    <div id="ferries_splashimage">
    <img src="/images/ferriestravel1.jpg" height="600px" width="950px" alt="ferriestravel1">
    </div>

    <div id="ferries_travel">
        <div>
        <h3>Rejs til et nyt sted med færge</h3>
        <p>Selvfølgelig ville du kunne komme dertil på ingen tid med fly, mens kan du nyde
            udsigten og den friske havluft undervejs? Se disse europæiske færgeruter, du sandsynligvis
            ikke har prøvet.
        </p>
        <a href="https://www.momondo.dk/discover/bedste-faergeruter-danmark-europa">
        <button id="ferries_button">Rejse med færge</button>
        </a>
        </div>
    </div>
</div>

</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>
