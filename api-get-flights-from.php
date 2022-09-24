<?php

// try{
//   $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
//   $q = $db->prepare('SELECT * FROM table_flights WHERE departure_city');
//   $q->bindValue(':from_flight', '%'.$_GET['from_flight'].'%');
//   $q->execute();
//   $users = $q->fetchAll(PDO::FETCH_ASSOC);
//   echo json_encode($users);
// }
// catch(Exception $ex){
//   echo 'error';
// }

try{
  $departure_city = $_GET['departure_city'] ?? 0;
  // Connect to the database
  $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $q = $db->prepare('SELECT * FROM table_flights WHERE departure_city LIKE departure_city');
  $q->bindValue(':from_city', '%'.$from_city.'%');
  $q->execute();
  $flights = $q->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($flights);
}catch(Exception $ex){
  // echo $ex;
  http_response_code(400);
  echo json_encode(['info'=>'upppsss...']);
}