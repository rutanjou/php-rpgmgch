<?php 
require_once __DIR__.('/../models/Cloth.php');
$client1 = new Client('id 1', 'client1@gmail.com', date('d-m-y',time()));
$client2 = new Client('id 2', 'client2@gmail.com', date('d-m-y',time()));

$tab = [
  $client1,
  $client2
];
//print_r($tab);
return $tab;
 ?>