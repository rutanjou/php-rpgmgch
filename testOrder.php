<?php 
require_once "data/users.php";
$products = require_once "data/products.php";
 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TestOrder</title>
</head>
<body>
<h2>Le premier client achète un de vos légumes</h1>
<table>
	<?php $client1->buy($vegetable1);?>
	 <tr>
		<td>Client ID: </td>
		<td>Produit acheté: </td>
		<td>Prix: </td>
		<td>Producteur: </td>
		<td>Date: </td>
	</tr>
	<tr>
		<td><?= $client1->getId(); ?></td>
		<td><?= $vegetable1->getName(); ?></td>
		<td><?= $vegetable1->getPrice(); ?></td>
		<td><?= method_exists($vegetable1, 'getProductorName') ? $vegetable1->getProductorName() :null;?></td>
		<td><?= method_exists($vegetable1, 'getExpiresAt') ? $vegetable1->getExpiresAt() :null;?></td>
	</tr>
</table>
<h3>La somme total: <?= $client1->getBillAmount().'' .'€' ?></h3>
<h2>Le second client achète un légume et un vêtement
</h2>
<table>
	<?php $client2->buy($vegetable2); ?>
	<?php $client2->buy($clothes1); ?>
	<tr>
		<td>Client ID: </td>
		<td>Produit acheté: </td>
		<td>Prix: </td>
		<td>Producteur: </td>
		<td>Date: </td>
		<td>Marque: </td>
	</tr>
	<tr>
		<td><?= $client2->getId(); ?></td>
		<td><?= $vegetable2->getName(); ?></td>
		<td><?= $vegetable2->getPrice(); ?></td>
		<td><?= method_exists($vegetable2, 'getProductorName') ? $vegetable2->getProductorName() :null;?></td>
		<td><?= method_exists($vegetable2, 'getExpiresAt') ? $vegetable2->getExpiresAt() :null;?></td>
	</tr>
	<tr>
		<td><?= $client2->getId(); ?></td>
		<td><?= $clothes1->getName(); ?></td>
		<td><?= $clothes1->getPrice(); ?></td>
		<td><?= method_exists($clothes1, 'getProductorName') ? $clothes1->getProductorName() :null;?></td>
		<td><?= method_exists($clothes1, 'getExpiresAt') ? $clothes1->getExpiresAt() :null;?></td>
		<td><?= method_exists($clothes1, 'getBrand') ? $clothes1->getBrand() :null;?></td>
	</tr>
</table>
	<h3>La somme total: <?= $client2->getBillAmount().'' .'€' ?></h3>
</body>
</html>