<?php 
$users = require ('users.php')
 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UserTable</title>
</head>
<body>
<h1>UserTable</h1>
	<table>
		<?php foreach ($users as $key => $user) :?>
	 	<tr>
			<td>Client </td>
			<td> Id: <?= $user->getId(); ?></td>
			<td>Mail: <?= $user->getEmail(); ?></td>
			<td>Date: <?= $user-> getCreatedAt(); ?></td>
		</tr>
		
	<?php endforeach; ?>

</table>
</body>
</html>