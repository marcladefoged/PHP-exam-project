<?php

$email_already_in_system = 'a@a.com';

if( $email_already_in_system == $_GET['user_email'] ){
  http_response_code(400);
  echo json_encode(['info'=>'Email is already in use!']);
  exit();
}

?>