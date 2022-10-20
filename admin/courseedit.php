<?php
	include_once ('../connect.php');
	$id=$_GET['id'];
	$sql=mysqli_query(connect(),"SELECT * FROM `coursesubcategory_tbl` 
     where course_id='$id'");
	$rows = mysqli_fetch_assoc($sql);
?>

<?php
include_once '../connect.php';

$sql = "SELECT * FROM `university_table`";
$all_universities = mysqli_query (connect(),$sql);

?>

<?php
include_once '../connect.php';

$sql= "SELECT * FROM `coursecategory_tbl`";
$all_courses = mysqli_query (connect(),$sql);

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
	
	<form method="POST" action="courseupdate.php?id=<?php echo $id; ?>">
		
		<div class="card">
			<header>EDIT COURSE FORM</header>
			
		
                 <p>   
                 
                   <input type="text" class="input-box" id="course_name" name="course_name"  placeholder="Enter Course Name" value="<?php echo $rows['course_name'];?>"  >
               </p>
               <p>   
                 
                   <input type="text" class="input-box" id="course_duration" name="course_duration"  placeholder="Course Duration" value="<?php echo $rows['course_duration'];?>" >
               </p>

                 <p>
                    <input type="text" cols="40" rows="5" class="input-box" id="describe" name="course_foryou" placeholder="Describe what the Course Entails ...." style="height: 60px; width: 45%;" value="<?php echo $rows['course_foryou'];?>" > 
                    </Input>
                </p>
                
                  <p style="margin-left: 25px;">
            <label ><span>Select Course Category:</span></label>
            <select name="course_cat" class="input-box" >
                <?php
                    while ($course_cat = mysqli_fetch_array($all_courses, MYSQLI_ASSOC)):;

                ?>

                <option value="<?php echo $course_cat["category_id"]; 
                ?>">
                    <?php echo $course_cat["category_name"];
                    ?>
                </option>
                <?php
                    endwhile;
                ?>
            </select>
        </p>

         
        <p style="margin-left: 25px;" >
            <label ><span>Select New University name:</span></label>
             <select name="uni_name" class="input-box" >
                <?php
                    while ($uni_name = mysqli_fetch_array($all_universities, MYSQLI_ASSOC)):;

                ?>

                <option value="<?php echo $uni_name["university_id"]; 
                ?>">
                    <?php echo $uni_name["university_name"];
                    ?>
                </option>
                <?php
                    endwhile;
                ?>
            </select>
        </p>
        <p>

                 <label ><span>Course Type:</span>
           <input type="text" class="input-box" id="course_cat" name="course_type"  value="<?php echo $rows['course_type'];?>" readonly="readonly">
        </label>

        
    </p>
              <p>
             
             
             
			
				
				<input type="submit"  class="btn" name="SUBMIT">
				<a href="courselist.php"><span>Back to the category display table</span></a>
			
			</p>
		</div>
			</form>
	</div>


</body>
</html>