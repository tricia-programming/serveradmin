<?php
	include_once ('../connect.php');
	$id=$_GET['id'];
	$sql=mysqli_query(connect(),"SELECT * FROM coursecategory_tbl where category_id='$id'");
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
	
	<form method="POST" action="categoryupdate.php?id=<?php echo $id; ?>">
		
		<div class="card">
			<header>EDIT USERS FORM</header>
			<p>
		<label>Category Name:</label>
		<input type="cat_name" class="input-box" id="name" name="cat_name" value="<?php echo $rows['category_name'];?>"  >
</p>

			  <p>
                    <input type="cat_desc" class="input-box" id="describe" name="cat_desc"  value="<?php echo $rows['category_description'];?>"> 
                    </input>
                </p>
			
				
				<input type="submit"  class="btn" name="SUBMIT">
				<a href="categorylist.php"><span>Back to the category display table</span></a>
			
			</p>
		</div>
			</form>
	</div>


</body>
</html>