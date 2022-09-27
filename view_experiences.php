<?php
$title ='experiences';
require_once __DIR__.'/comp_header.php';
?>

<?php
require_once __DIR__.'/comp_navbar.php';
?>

<main>
<div id="page_title">
    <h2><?= $experiences_dictionary[$lang.'_experiences_headline']; ?></h2>
</div>

<div id="explore_imageupload">

<form id="frmImage" onsubmit="return false">
    <input type="file" name="image" placeholder="Choose image">
    <button onclick="upload_image()">Upload Image</button>
    <!-- Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit"> -->
</form>

</div>

<div id="explore_cta">
    <h3>
    <?= $experiences_dictionary[$lang.'_experiences_memories']; ?>
    </h3>
</div>

<div id="upload_gallery">

<div class="image_upload_gallery">
    <img src="632af063c9a0d" alt="Copenhagen" width="600" height="400"> 
  <div class="desc"><?= $experiences_dictionary[$lang.'_experiences_box1']; ?></div>
</div>

<div class="image_upload_gallery">
    <img src="6332011761d37" alt="Barcelona" width="600" height="400"> 
  <div class="desc"><?= $experiences_dictionary[$lang.'_experiences_box2']; ?></div>
</div>

<div class="image_upload_gallery">
    <img src="63320179f317d" alt="Seoul" width="600" height="400"> 
  <div class="desc"><?= $experiences_dictionary[$lang.'_experiences_box3']; ?></div>
</div>

</div>
</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>