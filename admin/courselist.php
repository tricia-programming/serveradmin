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
	<header>COURSE LIST</header>
	<table class="styled-table">
		<thead>
		<tr class="active row">
			<th>COURSE NAME</th>
			<th>COURSE DURATION</th>
			<th>COURSE FOR YOU?</th>
			<th>COURSE CATEGORY</th>
			<th>UNIVERSITY</th>
			<th>COURSE TYPE</th>
		
			
		</tr>
	</thead>
	<tbody>
		<?php
		session_start();
		include_once '../connect.php';
		$sql = mysqli_query(connect(),"SELECT * FROM coursesubcategory_tbl order by course_id");
		while($rows = mysqli_fetch_array($sql))
		{
		 ?>
		<tr class="active-row">
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['course_name'];?></td>
                <td><?php echo $rows['course_duration'];?></td>
                <td><?php echo $rows['course_foryou'];?></td>
                 
                <td><?php echo $rows['course_categoryid'];?></td>
                <td><?php echo $rows['course_universityid'];?></td>
                <td><?php echo $rows['course_type'];?></td>
                <td><a class="button" href="courseedit.php?id=<?php echo $rows['course_id'];?>"><span>EDIT</span></a></td>
                <td><a class="button" href="coursedelete.php?id=<?php echo $rows['course_id'];?>"><span>DELETE</span></a></td>
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
