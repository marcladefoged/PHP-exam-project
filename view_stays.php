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
<!-- 
    <div id="frontpage_search">
        <input type="text" placeholder="from this city">
        <input type="text" placeholder="to this city">
        <input type="text" placeholder="number of rooms">
    </div> -->
</div>

</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>

