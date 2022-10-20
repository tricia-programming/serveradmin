<?php
$id = $_GET['id'];
	include_once('../connect.php');
	
	
 
	mysqli_query(connect(), "DELETE FROM coursecategory_tbl WHERE category_id = '$id' ");
	
	header('location:categorylist.php');
?>