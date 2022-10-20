<?php
 include_once '../connect.php';
$cat_name=$_POST["cat_name"];
$cat_desc=$_POST["cat_desc"];


$query="INSERT INTO coursecategory_tbl(category_name, category_description) values ('$cat_name','$cat_desc')";
$results= mysqli_query(connect(),$query);
if ($results==TRUE)
{
     $message = "Data Entered successfully";
      echo "<script>
      alert('$message')
    window.location.replace('http://localhost//UCID/admin/categoryadd.php');
       </script>";
   
      mysql_close();
}
else
{
      $message = "Something went wrong";
      echo "<script>
      alert('$message')
    window.location.replace('http://localhost//UCID/admin/categoryadd.php');
       </script>";
   
      mysql_close();
}
?>