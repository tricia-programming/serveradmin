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
	<meta charset="utf-8">
	<title>UCID</title>
	<link rel="stylesheet" type="text/css" href="css/home1.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/newsletter.css">
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<link rel="stylesheet" type="text/css" href="css/comment.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/">
	<script src="bootstrap/js/"></script>
	<script type="text/javascript" src="jquery-3.6.0.slim.min.js"></script>
</head>
<body>

	<div id="header">
		<a href="#" class="text">UCID</a>

		<div>
			<ul id="navbar">
				<li><a href="homepage.php">HOME</a></li>
				<li><a href="courses.php">COURSES</a></li>
				<li><a href="institutions.php">INSTITUTIONS</a></li>
				<li><a href="profile.php">PROFILE</a></li>
				<li><a href="loginform.php">LOGIN|SIGN UP</a></li>
				<li><a href="#"><i class="fa fa-heart"></i></a></li>
				
			</ul>
		</div>
	</div>
<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>
		<section class="footer">
		
 
 
 
   <div class="footer-col">
  <h4>Need help?</h4>
  <ul>
  <li><a href="#">FAQ</a></li>
  <li><a href="#">Contact Us</a></li>
  <li><a href="comment.php">Leave a Comment</a></li>
 
  
  </ul>
  </div>

   <div class="footer-col">
  <h4>Company</h4>
  <ul>
  <li><a href="#">About Us</a></li>
  <li><a href="#">Terms & Conditions</a></li>
  <li><a href="#">Privacy Policy</a></li>
  
  
  </ul>
  </div>

  
 <div class="footer-col">
  <h4>Work with us</h4>
  <ul>
  <li><a href="#">Join our Team</a></li>
  <li><a href="#">Press office</a></li>
  <li><a href="#">Affiliates</a></li>
  
  
  </ul>
  </div>

 
  
 
	
	</section>

</body>
</html>
</body>
</html>