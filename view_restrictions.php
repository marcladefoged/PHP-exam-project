<?php
$title ='restrictions';
require_once __DIR__.'/comp_header.php';
?>


<?php
require_once __DIR__.'/comp_navbar.php';
?>

<main>
    <div id="page_title">
        <h2><?= $restrictions_dictionary[$lang.'_restrictions_headline']; ?></h2>
    </div>

    <div id="restriction_text">
        <p>
        <?= $restrictions_dictionary[$lang.'_restrictions_text']; ?>
        </p>
    </div>
    <div id="restriction_map">
        <img src="images/restrictionmap.png" alt="restrictionmap">
    </div>

</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>
