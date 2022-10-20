<?php 
	include('functions.php');
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: loginform.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">	
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/">
	<script src="bootstrap/js/"></script>
	<script type="text/javascript" src="jquery-3.6.0.slim.min.js"></script>

</head>
<body>

	<div id="header">
		<a href="mainhomepage.php" class="text">UCID</a>

		<div>
			<ul id="navbar">
				<li><a href="mainhomepage.php">HOME</a></li>
				<li><a href="courses.php">COURSES</a></li>
				<li><a href="#">INSTITUTIONS</a></li>
				<li><a href="loginform.php">LOGOUT|PROFILE</a></li>
				<li><a href="#"><i class="fa fa-heart"></i></a></li>
				
			</ul>
		</div>
	</div> 

	<div class="header">
		<h2>Profile Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
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
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="IMAGES/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="profile.php?logout='1'" style="color: red; position: initial;" >LOGOUT</a>
						
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>