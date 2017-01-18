<?php

require 'Client.php';

$client1 = new Client("id1", "maxime@simplon.co", date('d/m/Y', time()));
$client2 = new Client("id2", "jfk@simplon.co", date('d/m/Y', time()));

$monTableau = [
  $client1,
  $client2
];

// var_dump($monTableau);
return $monTableau;
