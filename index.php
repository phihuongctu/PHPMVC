<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="my.css">
	<title>Home</title>
</head>
<body>
	
</body>
</html>


<?php 
	include "Model/configDB.php";
	$db = new Database;
	$db->connect();

	if(isset($_GET['controller']))
	{
		$controller = $_GET['controller'];
	}
	else {
		$controller = '';
	}
	switch($controller)
	{
		case 'thanh-vien':{
			require_once('Controler/thanhvien/index.php');
		}
	}

 ?>