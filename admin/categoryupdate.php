<?php
	include_once ('../connect.php');
	$id = $_GET['id'];
	
    $cat_name = $_POST['cat_name'];
	$cat_desc = $_POST['cat_desc'];
	
	
 
	$sql = mysqli_query(connect(),"UPDATE  coursecategory_tbl SET category_name = '$cat_name' ,category_description = '$cat_desc' where category_id = '$id' ");
	
	header('location:categorylist.php');
?>