<?php 
	define('BASE_PATH', 'http://127.0.0.1/ruhunuConcreteWork/webServices');
	define('DB_HOST', '127.0.0.1');
	define('DB_NAME', 'ruhunuconcrete');
	define('DB_USERNAME', 'ruhunuConcrete');
	define('DB_PASSWORD', 'ruhunuconcrete123');
	$con = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
	if(mysqli_connect_errno()){
		echo('Failed to connect'.mysqli_connect_error());
		exit();
	}
?>