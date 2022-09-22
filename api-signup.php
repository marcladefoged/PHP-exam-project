<?php

require_once __DIR__.'/_x.php';

$user = [
    'user_email' => $_POST['user_email'],
    'user_name' => $_POST['user_name'],
    'user_password' => $_POST['user_password'],
    'user_confirm_password' => $_POST['user_confirm_password']
  ];


// Validate the data

// BACKEND VALIDATION
_validate_email();
_validate_user_name();
_validate_password();

// FRONTEND VALIDATION

// VALIDATION OF EMAIL
if( ! isset($_POST['user_email']) ) {
    http_response_code(400);
    echo json_encode(['info' => 'user_email is missing']);
    exit();
}

// VALIDATION OF USER_NAME
if( ! isset($_POST['user_name']) ){
  http_response_code(400);
  echo json_encode(['info'=>'user_name missing']);
  exit();
}
if( strlen($_POST['user_name']) < _USER_NAME_MIN_LEN ){
  http_response_code(400);
  echo json_encode(['info'=>'username must be atleast '._USER_NAME_MIN_LEN.' characters']);
  exit(); 
}
if( strlen($_POST['user_name']) > _USER_NAME_MAX_LEN ){
  http_response_code(400);
  echo json_encode(['info'=>'username must be max '._USER_NAME_MAX_LEN.' characters']);
  exit(); 
}

// VALICATION OF USER_PASSWORD

if( ! isset($_POST['user_password']) ) {
    http_response_code(400);
    echo json_encode(['info' => 'user_password is missing']);
    exit();
}

if( ! isset($_POST['user_confirm_password']) ) {
    http_response_code(400);
    echo json_encode(['info' => 'user_confirm_password is missing']);
    exit();
}

echo json_encode($user);