<?php
$title ='experiences';
require_once __DIR__.'/comp_header.php';
?>

<?php
require_once __DIR__.'/comp_navbar.php';
?>

<main>
<div id="page_title">
    <h2>Del dine oplevelser!</h2>
</div>

<div id="explore_imageupload">

<form id="frmImage" onsubmit="return false">
    <input type="file" name="image" placeholder="Choose image">
    <button onclick="upload_image()">Upload Image</button>
</form>

</div>

<div id="explore_cta">
    <h3>
        Her kan du uploade og dele dine billeder og minder fra tidligere rejser!
    </h3>
</div>

<div id="upload_gallery">

<div class="image_upload_gallery">
    <img src="632af063c9a0d" alt="Copenhagen" width="600" height="400"> 
  <div class="desc">Her besøger jeg Nyhavn i København!</div>
</div>

<div class="image_upload_gallery">
    <img src="632af063c9a0d" alt="Copenhagen" width="600" height="400"> 
  <div class="desc">Her besøger jeg Nyhavn i København!</div>
</div>

<div class="image_upload_gallery">
    <img src="632af063c9a0d" alt="Copenhagen" width="600" height="400"> 
  <div class="desc">Her besøger jeg Nyhavn i København!</div>
</div>

</div>
</main>

<?php
require_once __DIR__.'/comp_footer.php';
?>