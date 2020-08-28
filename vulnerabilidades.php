<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="mystyles.css" rel="stylesheet" type="text/css">
		<title></title>
	</head>
	<body>
	<?php require_once 'header.php';?>
	
	<?php require_once 'navigation.php';?>
	
	<div>INSERTAR VULNERABILIDAD</div>
	<div>
	<form action="connection.php" method="POST">
		<label>Nombre:</label>
		<input type="text" name="Insert">
		<input type="submit" value="INSERTAR">
	</form>
	</div>
	
	<div></div>
	<div></div>
	
	<?php require_once 'footer.php';?>
	</body>
</html>