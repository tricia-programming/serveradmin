<?php
	include_once ('../connect.php');
	$id=$_GET['id'];
	$sql=mysqli_query(connect(),"SELECT * FROM users_tbl where userid='$id'");
	$rows = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>EDIT FORM</title>
		<link rel="stylesheet" type="text/css" href="../css/editform.css">
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
         <a href="universitylist.php">VIEW UNIVERSITIES</a>
         <a href="courseadd.php">ADD COURSE</a>
         <a href="courselist.php">VIEW COURSES</a>
      </div>
      <div class="body">
	
	<form method="POST" action="usersupdate.php?id=<?php echo $id; ?>">
		
		<div class="card">
			<header>EDIT USERS FORM</header>
			<p>
		<label>First name:</label>
		<input type="fname" class="input-box" id="name" name="fname" value="<?php echo $rows['fname'];?>"  >
</p>
<p>
		<label>Last name:</label>
		<input type="lname" id="name" class="input-box" name="lname"  value="<?php echo $rows['lname'];?>">
			</p>
			<p>
				<label>Email:</label>
				<input type="email" class="input-box"  name="email" value="<?php echo $rows['email'];?>">
			</p>
			<p>
				<label>Telephone Number:</label>
				<input type="tel" class="input-box" name="tel" value="<?php echo $rows['tel'];?>">
			</p>
			<p>
				<label>Gender:</label>
				<input  class="input-box"  name="city" value="<?php echo $rows['gender'];?>">
			</p>
			<p>
			<label>User-name:</label>
			<input type="Uname"id="name" class="input-box" name="user" value="<?php echo $rows['username'];?>">
			</p>
			<p>
				
				<input type="submit"  class="btn" name="SUBMIT">
				<a href="userslist.php"><span>Back to the user display table</span></a>
			
			</p>
		</div>
			</form>
	</div>


</body>
</html>