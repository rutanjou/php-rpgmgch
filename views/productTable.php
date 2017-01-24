<?php 
$products = require_once "products.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">">
	<meta charset="UTF-8">
	<title>ProductTable</title>
</head>
<body>
	<h1>Table des légumes et vêtements</h1>

	<?php foreach ($products as $value):?>

	<table>
		<tr>
			<td><?= $value->getId();?></td>
			<td><?= $value->getName();?></td>
			<td><?= $value->getPrice();?></td>
			<td><?= method_exists($value, 'getProductorName') ? $value->getProductorName() :null;?></td>
			<td><?= method_exists($value, 'getExpiresAt') ? $value->getExpiresAt() :null;?></td> 
			<td><?= method_exists($value, 'getBrand') ? $value->getBrand() :null;?></td>
		</tr>
	</table>
	<?php endforeach; ?>	
</body>
</html>