<?php 

include('../functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create user</title>
	<link rel="stylesheet" type="text/css" href="../css/create_user.css">
	 <link rel="stylesheet" type="text/css" href="../css/sidebar.css">
	  <script src="bootstrap/js/"></script>
   <script type="text/javascript" src="jquery-3.6.0.slim.min.js"></script>
	
</head>
<body>
	<div class="main">
      <div class="menu">
         <h2 id="logo">UCID</h2>
        <a href="admin_home.php">HOME</a>
         <a href="admin_profile.php">PROFILE|LOGOUT</a>
         <a href="admin_createuser.php">ADD USERS</a>
         <a href="userslist.php">VIEW USERS</a>
          <a href="categoryadd.php">ADD COURSE CATEGORY</a>
         <a href="categorylist.php">VIEW COURSE CATEGORY</a>
         <a href="universityadd.php">ADD UNIVERSITY</a>
         <a href="universitylist.php">VIEW COURSE SUBCATEGORY</a>
         <a href="courseadd.php">ADD COURSE</a>
         <a href="courselist.php">VIEW COURSES</a>
      </div>
      <div class="body">
	
	<form action="admin_createuser.php" method="post" >

		
		<div class="card">
			<h2>ADMIN - CREATE USER</h2>
			<p>

			<input type="fname" id="name" class="input-box" name="fname" placeholder="First Name" value="" required>
			
			<input type="lname" id="name" class="input-box" name="lname" placeholder="Last Name" value=""  required>

			</p>

			<p>
				<input type="email" class="input-box" placeholder="Email" name="email" value=""  required>
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
			

			<p style="margin-left: 25px;">
			<label ><span>User type:</span></label>
			<select name="user_type" class="input-box">
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
				<option value="institution">Instution</option>
			</select>
		</p>

			
			<p>
				<input type="checkbox" required><span>I accept the <a href="#"><u> Terms of Use</u></a> & <a href="#"><u>Privacy Policy</u></a></span>
		    </p>
			<p>
				
				<button type="submit" class="btn" name="register_btn">+ CREATE USER</button>
				
			
			</p>
	</div>		
	</div>
	</form>
</div>
</body>
</html>