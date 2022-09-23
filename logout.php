<?php
session_start();
session_destroy();
header('Location: view_index.php');
exit();