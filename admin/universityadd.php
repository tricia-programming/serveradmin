<?php
include_once '../connect.php';

$sql = "SELECT * FROM `unitype_tbl`";
$all_unitypes = mysqli_query (connect(),$sql);

?>

<?php
include_once '../connect.php';

$query = "SELECT * FROM `location_tbl`";
$all_unilocations = mysqli_query (connect(),$query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADD UNIVERSITY</title>
	<link rel="stylesheet" type="text/css" href="../css/editform.css">
    <link rel="stylesheet" type="text/css" href="../css/sidebar.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/">
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
<form method="POST" Action="universitysave.php">
              <div class="container">
		<div class="card">
            
               <h2>ADMIN - ADD UNIVERSITY</h2>
               <p>   
                 
                   <input type="text" class="input-box" id="uni_name" name="uni_name"  placeholder="University Name">
               </p>
               <p>   
                 
                   <input type="text" class="input-box" id="uni_email" name="uni_email"  placeholder="University email">
               </p>

                  <p>   
                 
                   <input type="text" class="input-box" id="uni_tel" name="uni_tel"  placeholder="University Telephone Number">
               </p>
              <p>
                    <input type="text" cols="40" rows="5" class="input-box" id="describe" name="uni_address" placeholder="Enter the address ...." required="" style="height: 60px; width: 45%;"> 
                    </Input>
                </p>
                  <p style="margin-left: 25px;">
            <label ><span>Select University Type:</span></label>
            <select name="uni_type" class="input-box">
                <?php
                    while ($uni_type = mysqli_fetch_array($all_unitypes, MYSQLI_ASSOC)):;

                ?>

                <option value="<?php echo $uni_type["unitype_id"]; 
                ?>">
                    <?php echo $uni_type["unitype_name"];
                    ?>
                </option>
                <?php
                    endwhile;
                ?>
            </select>
        </p>
        <p style="margin-left: 25px;">
            <label ><span>Select University County:</span></label>
             <select name="uni_location" class="input-box">
                <?php
                    while ($uni_location = mysqli_fetch_array($all_unilocations, MYSQLI_ASSOC)):;

                ?>

                <option value="<?php echo $uni_location["location_id"]; 
                ?>">
                    <?php echo $uni_location["county"];
                    ?>
                </option>
                <?php
                    endwhile;
                ?>
            </select>
        </p>
               </p>

             
             
             
              <button type="submit" class="btn">Submit</button>
        </p>
          </div>
      </div>
            </form>
        </div></div>
</body>
</html>