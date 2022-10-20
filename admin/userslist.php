<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>USERS LIST</title>
	<link rel="stylesheet" type="text/css" href="../css/listusers.css">
	 <link rel="stylesheet" type="text/css" href="../css/sidebar.css">
   <script src="../bootstrap/js/"></script>
   <script type="text/javascript" src="../jquery-3.6.0.slim.min.js"></script>
	
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
      	<div class="card">
	<header class="active-row">USERS LIST</header>
	<table class="styled-table">
		<thead>
		<tr class="active-row">
			<th>FIRST NAME</th>
			<th>LAST NAME</th>
			<th>EMAIL</th>
			<th>TELEPHONE</th>
			<th>GENDER</th>
			<th>USERNAME</th>
			<th>USER_TYPE</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
		session_start();
		include_once '../connect.php';
		$sql = mysqli_query(connect(),"SELECT * FROM users_tbl order by userid");
		while($rows = mysqli_fetch_array($sql))
		{
		 ?>
		<tr class="active-row">
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['lname'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['tel'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['username'];?></td>            
                <td><?php echo $rows['user_type'];?></td>
                <td><a class="button" href="usersedit.php?id=<?php echo $rows['userid'];?>"><span>EDIT</span></a></td>
                <td><a class="button" href="usersdelete.php?id=<?php echo $rows['userid'];?>"><span>DELETE</span></a></td>
            </tr>
	<?php
	}
	?>
	</tbody>
	</table>
</div>
</div>
</div>
</body>
</html>