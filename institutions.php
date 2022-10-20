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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
				<li><a href="profile.php">PROFILE</a></li>
				<li><a href="loginform.php">LOGIN|SIGN UP</a></li>
				<li><a href="savedcourses.php"><i class="fa fa-heart"></i></a></li>
				<form name="search" method="POST" action="display_data.php">
                   		<input type="text" name="search_box" value="">
                   		<input type="submit" name="search" value="Search..."</form>

			</ul>
		</div>
	</div>
	<section>
		<div class="container py-5">
			<div class="row mt-4">

				<?php
				$con = mysqli_connect("localhost","root","","informatics_project");

				$query = "SELECT * FROM university_table";
				$query_run=mysqli_query($con,$query);
				$check_university=mysqli_num_rows($query_run) > 0; 

				if($check_university)
				{
                   while($row = mysqli_fetch_array($query_run))
                   {
                   	?>
                   	<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h1 class="card-title"><?php echo $row['university_name']; ?></h1>
							<h4 class="card-title"><?php echo $row['university_email']; ?></h4>
							<p class="card-text">
								<?php echo $row['university_address']; ?>
							</p>
						</div>
					</div>
				</div>
                   	<?php
                   	  
                   }
				}
				else
				{
					echo "No University Found";
				}
				?>
				
			</div>
		</div>
	</section>
	</section>
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