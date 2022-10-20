<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/">
	<script src="bootstrap/js/"></script>
	<script type="text/javascript" src="jquery-3.6.0.slim.min.js"></script>
</head>
<body>
	<div id="header">
		<a href="homepage.php" class="text">UCID</a>

		<div>
			<ul id="navbar">
				<li><a href="homepage.php">HOME</a></li>
				<li><a href="courses.php">COURSES</a></li>
				<li><a href="#">INSTITUTIONS</a></li>
				<li><a href="#">PROFILE</a></li>
				<li><a href="loginform.php">LOGIN|SIGN UP</a></li>
				<li><a href="#"><i class="fa fa-heart"></i></a></li>
				
			</ul>
		</div>
	</div>

	<form action="registerform.php" method="post">
		
		<div class="container">
		<div class="card">
			<h2>REGISTRATION</h2>
			<input type="fname" class="input-box" id="name" name="fname" placeholder="First Name" value="" >
			
			<input type="lname" id="name" class="input-box" name="lname" placeholder="Last Name"  value="" >
			</p>
			<p>
				<input type="email" class="input-box" placeholder="Email" name="email" value=" ">
				<input type="tel" class="input-box" name="tel" placeholder="Telephone number" value="" >
			</p>
			<p style="margin-left: 25px;">
			<label ><span style="margin-left:55px;">Gender:</span></label>
			<select name="gender" class="input-box">
				<option value=""></option>
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
		</p>
			<input type="Uname" id="name" class="input-box" name="username" placeholder=" Enter User Name" value="" >
			
			<p>
				<input type="password" class="input-box" name="password1" placeholder="Password" value="">

				<input type="password" class="input-box" name="password2" placeholder="Confirm Password" value="" >
			</p>
			
				<input type="checkbox" required><span>I accept the <a href="#"><u> Terms of Use</u></a> & <a href="#"><u>Privacy Policy</u></a></span>

		</p>
		<span style="margin-left: 30px;"> <a href="loginform.php"><u>I already have an account,<b>LOGIN</b></u></a></span>
			<p>
				
				<button type="submit" class="btn" name="register_btn">REGISTER</button>
			
			</p>
	</div>		
	</div>
	</form>

</body>
</html>