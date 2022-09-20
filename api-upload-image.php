<?php

move_uploaded_file( $_FILES['image']['tmp_name'] , uniqid() );

// $image = "http://localhost/632a31ce36259";

// $image_content = file_get_contents($image);

// echo $image_content;
