<?php

$id = $_POST['flight_id'] ?? 0;

try{
  $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $q = $db->prepare('DELETE FROM table_flights WHERE flight_id = :flight_id');
  $q->bindValue(':flight_id', $_POST['flight_id']);
  $q->execute();

  // Success
  // echo "flight_id {$_POST['flight_id']}";
  echo json_encode(['info'=>$_POST['flight_id']]);
  exit();
}catch(Exception $ex){
  echo $ex;
  http_response_code(500);
  echo json_encode(['info'=>'System maintainance']);
  exit();  
}

