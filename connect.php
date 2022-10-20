<?php

function connect(){
  $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "informatics_project";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
}
function setData($sql){
	$link = connect();
	if(mysqli_query($link,$sql)){
		return true;
	}else{
		return false;
	}
}
/*
function getData($sql){
	$link = connect();
	$result = mysqli_query($link,$sql);
	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		$rows[] = $row;
	}
	return $rows;
	}
*/

?>