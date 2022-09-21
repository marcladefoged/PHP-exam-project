<?php

require_once __DIR__.'/_x.php';

_validate_email();
_validate_password();

$user = [
    'user_name' => 'Marc',
    'user_last_name' => 'Jensen',
    'email' => 'a@a.com',
    'user_password' => 'password'
];

if( $_POST['email'] != $user['email'] ) {
    $error_message = 'No user with that email';
    _respond($error_message, 400); 
};

if( $_POST['user_password'] != $user['user_password'] ) {
    $error_message = 'Wrong password';
    _respond($error_message, 400); 
};



echo json_encode($user);