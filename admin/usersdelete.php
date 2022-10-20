<?php
$id = $_GET['id'];
	include_once('../connect.php');
	
	
 
	mysqli_query(connect(), "DELETE FROM users_tbl WHERE userid = '$id' ");
	
	header('location:userslist.php');
?>