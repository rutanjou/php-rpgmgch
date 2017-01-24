<?php 

require_once __DIR__.('/../Vegetable.php');
require_once __DIR__.('/../models/Cloth.php');

$vegetable1 = new Vegetable('1','carrote','1euro','maroc','23/01/2017');
$vegetable2 = new Vegetable("2","tommate","1.5euro","france",'20/01/2017');
$clothes1 = new Cloth("3","pull","30euro","Maje");
$clothes2 = new Cloth("4","robe","80euro","Chanel");
$clothes3 = new Cloth("5","veste","120euro","Sandro");
$tableau = [$vegetable1, $vegetable2,$clothes1,$clothes2,$clothes3];

return $tableau;
 ?>