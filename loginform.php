<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/loginform.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">	
	<link rel="stylesheet" type="text/css" href="css/profile.css">
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
				<li><a href="profile.php">PROFILE</a></li>
				<li><a href="loginform.php">LOGIN|SIGN UP</a></li>
				<li><a href="#"><i class="fa fa-heart"></i></a></li>
				
			</ul>
		</div>
	</div>

<form  action="loginform.php" method="post">


	<div class="container">
		<div class="card">
		
			<h2 >LOGIN</h2>

			<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
			
				<p>
				<input type="username" class="input-box" placeholder="USERNAME" name="username" value="" >
			</p>
			<p>
				<input type="password" class="input-box" placeholder="PASSWORD" name="password" value="" >
			</p>
			<p>
				
				<button type="submit" class="btn" name="login_btn" >LOGIN</button>
			
			</p>
			<p>
				<input type="checkbox" ><span>Remember Me</span>
			</p>
			<div class="anchor">
			<a href="registerform.php"><u>I don't have an account</u></a>
			<a href="#"><u>Forgot Password?</u></a>
		</div>
	</div>
	</div>

</form>
</body>
</html>