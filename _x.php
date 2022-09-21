<?php
define('_NAME_MIN_LEN', 2);
define('_NAME_MAX-LEN', 20);

define('_PASSWORD_MIN_LEN', 2);
define('_PASSWORD_MAX_LEN', 20);


define('_REGEX_EMAIL', '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/');

function _validate_email(){
    $error_message = 'email missing or invalid';
    if( ! isset($_POST['email']) ){ _respond($error_message, 400); }
    $_POST['email'] = trim($_POST['email']);
    if( ! preg_match(_REGEX_EMAIL, $_POST['email']) ){ _respond($error_message, 400); }
    return $_POST['email'];
  };

function _validate_password() {
    $error_message = 'invalid password';
    if ( !isset($_POST['user_password'])) { _respond($error_message, 400); }
    $_POST['user_password'] = trim($_POST['user_password']);
    if (strlen($_POST['user_password']) < _PASSWORD_MIN_LEN) { _respond($error_message, 400); }
    if (strlen($_POST['user_password']) > _PASSWORD_MAX_LEN) { _respond($error_message, 400); }
    return $_POST['user_password'];
}

  function _respond( $message = '',  $http_response_code = 200 ){
    header('Content-Type: application/json');
    http_response_code($http_response_code);
    $response = is_array($message) ? $message : ['info'=>$message];
    echo json_encode($response);
    exit();
  };
  