<?php
// Validate the flight id
if( ! isset($_POST['flight_id']) ){
  http_response_code(400);
  echo json_encode(['info'=>'flight_id missing']);
  exit();
}

if( ! ctype_digit($_POST['flight_id']) ){
  http_response_code(400);
  echo json_encode(['info'=>'flight_id must be a digit']);
  exit();  
}

try{
  $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $q = $db->prepare('DELETE FROM table_flights WHERE id = :id');
  $q->bindValue(':id', $_POST['flight_id']);
  $q->execute();

  // Success
  echo "flight_id {$_POST['flight_id']}";
  echo json_encode(['info'=>'flight delete', 'flight_id'=>$_POST['flight_id']]);
  exit();
}catch(Exception $ex){
  http_response_code(400);
  echo json_encode(['info'=>'System maintainance']);
  exit();  
}

