<?php 

session_start();

// connect to database
include_once ('connect.php');

// variable declaration
    $fname = "";
	$lname = "";
	$email = "" ;
	$tel= "" ;
	$gender= "";
	$username = "";
    $errors = array();

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $conn, $errors, $fname ,	$lname ,$email,	$tel,	$gender ,	$user ;
	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$tel= $_POST['tel'];
	$gender = $_POST['gender'];
	$username = $_POST['username'];
	$password1 =$_POST['password1'];
	$password2 = md5( $_POST['password2']);
	// form validation: ensure that the form is correctly filled

	if ($_POST['password1']!= $_POST['password2'])
 {
     $message = "Data Not Entered Not uccessfully";
      echo "<script>
      alert('$message')
    window.location.replace('http://localhost//UCID/admin/admin_createuser.php');
       </script>";
   
      mysql_close();
 }else{

		if (isset($_POST['user_type'])) {
			$user_type = ($_POST['user_type']);
			$query = "INSERT INTO users_tbl(fname,lname,email,tel,gender,username,password1,password2,user_type) VALUES ('$fname','$lname','$email','$tel','$gender','$username','$password1','$password2','$user_type')";
			mysqli_query(connect(), $query);
			
     $message = "Data Entered successfully";
      echo "<script>
      alert('$message')
    window.location.replace('http://localhost//UCID/admin/admin_createuser.php');
       </script>";
   
      mysql_close();
		}
		else{
			$query = "INSERT INTO users_tbl(fname,lname,email,tel,gender,username,password1,password2,user_type) VALUES ('$fname','$lname','$email','$tel','$gender','$username','$password1','$password2','user')";
			mysqli_query(connect(), $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id(connect());

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: profile.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $conn;
	$query = "SELECT * FROM users_tbl WHERE userid=" . $id;
	$result = mysqli_query(connect(), $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}









// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $conn, $username, $errors;

	// grap form values
	$username = ($_POST['username']);
	$password = ($_POST['password']);
	
	
		$query = "SELECT * FROM users_tbl WHERE username='$username' AND password1='$password'";
		$results = mysqli_query(connect(), $query);
		


		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			

			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/admin_profile.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: profile.php');
			}
		}else {
			echo '<script>alert("Wrong Details entry")</script>';
		}
	}


function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}
function isLoggedIn(){
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: loginform.php");
	echo '<script>alert("You were logged out")</script>';
}
?>	