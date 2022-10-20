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
    <meta charset="utf-8">
    <title>ADD COURSE</title>
    <link rel="stylesheet" type="text/css" href="../css/editform.css">
    <link rel="stylesheet" type="text/css" href="../css/sidebar.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/">
    <script src="bootstrap/js/"></script>
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
<form method="POST" Action="coursesave.php">
              <div class="container">
        <div class="card">
            
               <h2>ADMIN - ADD COURSE</h2>
               <p>   
                 
                   <input type="text" class="input-box" id="course_name" name="course_name"  placeholder="Enter Course Name" required="">
               </p>
               <p>   
                 
                   <input type="text" class="input-box" id="course_duration" name="course_duration"  placeholder="Course Duration" required="">
               </p>

                 <p>
                    <input type="text" cols="40" rows="5" class="input-box" id="describe" name="course_foryou" placeholder="Describe what the Course Entails ...." required="" style="height: 60px; width: 45%;"> 
                    </Input>
                </p>
                  <p style="margin-left: 25px;">
            <label ><span>Select Course Category:</span></label>
            <select name="course_cat" class="input-box" required="">
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
            <label ><span>Select University name:</span></label>
             <select name="uni_name" class="input-box" required="">
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

        <p style="margin-left: 25px;">
            <label ><span style="margin-left:55px;">Course Type:</span></label>
            <select name="course_type" class="input-box" required="">
                <option value=""></option>
                <option value="bachelors_degree">Bachelor's Degree</option>
                <option value="associates_degree">Associate's Degree</option>
                 <option value="phd">PhD</option>
                <option value="certificate">Certificate</option>
            </select>
        </p>
              <p>
             
             
             
              <button type="submit" class="btn">Submit</button>
        </p>
          </div>
      </div>
            </form>
        </div></div>
</body>
</html>