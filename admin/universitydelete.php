<?php
$id = $_GET['id'];
	include_once('../connect.php');
	
	
 
	mysqli_query(connect(), "DELETE FROM university_table WHERE course_id = '$id' ");
	
	header('location:universitylist.php');
?>