<?php
$title ='cars';
require_once __DIR__.'/comp_header.php';
?> 

<?php
require_once __DIR__.'/comp_navbar.php';
?>

<main>
<div id="cars_section">
    <div id="cars_title">
        <h2>
        <?= $cars_dictionary[$lang.'_cars_title']; ?>
        </h2>
    </div>
    <div id="cars_reasons">
        <div class="cars_reason">
            <h3>
            <?= $cars_dictionary[$lang.'_cars_box1_headline']; ?>
            </h3>
            <p>
            <?= $cars_dictionary[$lang.'_cars_box1_text']; ?>
            </p>
        </div>

        <div class="cars_reason">
            <h3>
            <?= $cars_dictionary[$lang.'_cars_box2_headline']; ?>
            </h3>
            <p>
            <?= $cars_dictionary[$lang.'_cars_box2_text']; ?>
            </p>
        </div>

        <div class="cars_reason">
            <h3>
            <?= $cars_dictionary[$lang.'_cars_box3_headline']; ?>
            </h3>
            <p>
            <?= $cars_dictionary[$lang.'_cars_box3_text']; ?>
            </p>
        </div>

        <div class="cars_reason">
            <h3>
            <?= $cars_dictionary[$lang.'_cars_box4_headline']; ?>
            </h3>
            <p>
            <?= $cars_dictionary[$lang.'_cars_box4_text']; ?> 
            </p>
        </div>
    </div>

    <div id="cars_splashimage">
<img src="/images/cartravel1.jpg" height="600px" width="950px" alt="cartravel1">
    </div>

    <div id="cars_cta">
        <div>
        <h3>
        <?= $cars_dictionary[$lang.'_cars_cheapcars']; ?> 
        </h3>
        <p>
        <?= $cars_dictionary[$lang.'_cars_find']; ?> 
        </p>
        <p>
        <?= $cars_dictionary[$lang.'_cars_search']; ?> 
        </p>
        </div>
    </div>
</div>
</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>
