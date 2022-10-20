<?php
	include_once ('../connect.php');
	$id = $_GET['id'];
	
$course_name=$_POST["course_name"];
$course_duration=$_POST["course_duration"];
$course_foryou=$_POST["course_foryou"];
$course_cat=$_POST["course_cat"];
$uni_name=$_POST["uni_name"];

	$sql = mysqli_query(connect(),"UPDATE  coursesubcategory_tbl SET course_name = '$course_name' ,course_duration = '$course_duration', course_foryou = '$course_foryou', course_categoryid = '$course_cat', course_universityid = '$uni_name' where course_id = '$id' ");
	
	header('location:courselist.php');
?>