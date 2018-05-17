<?php 
	include_once('config.php');
	$categoryName = $_POST['inputDefault'];
	$query = "INSERT INTO tbl_categories(category_name) VALUES('$categoryName')";
	if($con -> query($query) == true){
		echo "Record added successfully";
	} else {
		echo "Record adding failes";
	}
?>