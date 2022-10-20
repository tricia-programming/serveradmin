<?php
$id = $_GET['id'];
	include_once('../connect.php');
	
	
 
	mysqli_query(connect(), "DELETE FROM coursesubcategory_tbl WHERE course_id = '$id' ");
	
	header('location:courselist.php');
?>