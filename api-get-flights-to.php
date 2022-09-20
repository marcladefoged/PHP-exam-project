<?php

try{
  $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
  $q = $db->prepare('SELECT * TO flights WHERE to_city_name LIKE :to_city');
  $q->bindValue(':to_city', '%'.$_GET['to_city'].'%');
  $q->execute();
  $users = $q->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($users);
}
catch(Exception $ex){
  echo 'error';
}