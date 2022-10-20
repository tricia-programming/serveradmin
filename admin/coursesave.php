<?php
include_once '../connect.php';
$course_name=$_POST["course_name"];
$course_duration=$_POST["course_duration"];
$course_foryou=$_POST["course_foryou"];
$course_cat=$_POST["course_cat"];
$course_type=$_POST["course_type"];
$uni_name=$_POST["uni_name"];




$query="INSERT INTO coursesubcategory_tbl(course_name, course_duration, course_foryou, course_categoryid, course_universityid, course_type) values ('$course_name','$course_duration','$course_foryou', '$course_cat', '$uni_name', '$course_type')";
$results= mysqli_query(connect(),$query);
if ($results==TRUE)
{
      
     $message = "Data Entered successfully";
      echo "<script>
      alert('$message')
    window.location.replace('http://localhost//UCID/admin/courseadd.php');
       </script>";
   
      mysql_close();
}else
{
    
      $message = "Something went wrong";
      echo "<script>
      alert('$message')
    window.location.replace('http://localhost//UCID/admin/courseadd.php');
       </script>";
   
      mysql_close();
}
?>