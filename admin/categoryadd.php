<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADD CATEGORY</title>
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
<form method="POST" Action="categorysave.php">
              <div class="container">
		<div class="card">
               <h2>ADMIN - ADD CATEGORY</h2>
               <p>   
                 
                   <input type="string" class="input-box" id="cat_name" name="cat_name"  placeholder="New Course Category">
               </p>
              <p>
                    <input type="text" cols="40" rows="5" class="input-box" id="describe" name="cat_desc" placeholder="Describe what the Course Category Entails ...." required="" style="height: 60px; width: 45%;"> 
                    </Input>
                </p>
                <p>   
             
             
              <button type="submit" class="btn">Submit</button>
        </p>
          </div>
      </div>
            </form>
        </div>
    </div>
</body>
</html>