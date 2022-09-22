<?php
define('_USER_NAME_MIN_LEN', 2);
define('_USER_NAME_MAX_LEN', 20);

define('_REGEX_EMAIL', '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/');

function _validate_user_name(){
    $error_message = 'user name must be between '._USER_NAME_MIN_LEN.' and '._USER_NAME_MAX_LEN.' characters';
    if ( ! isset($_POST['user_name']) ) {_respond($error_message, 400); }
    $_POST['user_name'] = trim($_POST['user_name']);
    if (strlen($_POST['user_name']) < _USER_NAME_MIN_LEN) {_respond($error_message, 400);}
    if (strlen($_POST['user_name']) > _USER_NAME_MAX_LEN) {_respond($error_message, 400);}
    return $_POST['user_name'];
  };

function _validate_email(){
    $error_message = 'email missing or invalid';
    if( ! isset($_POST['user_email']) ){ _respond($error_message, 400); }
    $_POST['user_email'] = trim($_POST['user_email']);
    if( ! preg_match(_REGEX_EMAIL, $_POST['user_email']) ){ _respond($error_message, 400); }
    return $_POST['user_email'];
  };

function _validate_password() {
    $error_message = 'invalid password';
    if ( !isset($_POST['user_password'])) { _respond($error_message, 400); }
    $_POST['user_password'] = trim($_POST['user_password']);
    return $_POST['user_password'];
}

  function _respond( $message = '',  $http_response_code = 200 ){
    header('Content-Type: application/json');
    http_response_code($http_response_code);
    $response = is_array($message) ? $message : ['info'=>$message];
    echo json_encode($response);
    exit();
  };
  