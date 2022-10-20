<?php
	include_once ('../connect.php');
	$id = $_GET['id'];
	
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$gender = $_POST['city'];
	$address = $_POST['address'];
	$user = $_POST['user'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	
 
	$sql = mysqli_query(connect(),"UPDATE  users_tbl SET fname = '$fname' ,lname = '$lname',email = '$email',tel = '$tel',gender = '$gender' ,username = '$user',password1 = '$password1',password2 = '$password2' where userid = '$id' ");
	
	header('location:userslist.php');
?>