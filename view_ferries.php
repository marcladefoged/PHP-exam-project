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
        <h2><?= $ferries_dictionary[$lang.'_ferries_headline']; ?></h2>
    </div>

    <div id="ferries_splashimage">
    <img src="/images/ferriestravel1.jpg" height="600px" width="950px" alt="ferriestravel1">
    </div>

    <div id="ferries_travel">
        <div>
        <h3><?= $ferries_dictionary[$lang.'_ferries_box_headline']; ?></h3>
        <p>
        <?= $ferries_dictionary[$lang.'_ferries_box_text']; ?>
        </p>
        <a href="https://www.momondo.dk/discover/bedste-faergeruter-danmark-europa">
        <button id="ferries_button"><?= $ferries_dictionary[$lang.'_ferries_box_button']; ?></button>
        </a>
        </div>
    </div>
</div>

</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>
