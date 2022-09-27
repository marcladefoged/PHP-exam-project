<?php
$title ='stays';
require_once __DIR__.'/comp_header.php';
?>
<?php
require_once __DIR__.'/comp_navbar.php';
?>

<main>
<div id="frontpage">
    <div id="frontpage_cta">
        <h2>
        <?= $dictionary[$lang.'_stays_title']; ?>
        </h2>
    </div>
</div>

<div id="stays_content">
    <h1>
    <?= $stays_dictionary[$lang.'_stays_rentals']; ?>
    </h1>
    <p>
    <?= $stays_dictionary[$lang.'_stays_text']; ?>
    </p>
    <h2>
    <?= $stays_dictionary[$lang.'_stays_find']; ?>
    </h2>
    <p>
    <?= $stays_dictionary[$lang.'_stays_smalltext']; ?>
    </p>
    <img src="images/staysplaces.png" alt="">
</div>

</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>

