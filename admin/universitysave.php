<?php
 include_once '../connect.php';
$uni_name=$_POST["uni_name"];
$uni_type=$_POST["uni_type"];
$uni_email=$_POST["uni_email"];
$uni_tel=$_POST["uni_tel"];
$uni_location=$_POST["uni_location"];
$uni_address=$_POST["uni_address"];




$query="INSERT INTO university_table(university_name, university_unitypeid, university_email, university_tel, university_locationid, university_address) values ('$uni_name','$uni_type','$uni_email', '$uni_tel', '$uni_location', '$uni_address')";
$results= mysqli_query(connect(),$query);
if ($results==TRUE)
{
     $message = "Data Entered successfully";
      echo "<script>
      alert('$message')
    window.location.replace('http://localhost//UCID/admin/universityadd.php');
       </script>";
   
      mysql_close();

}else
{
     
      $message = "Something went wrong";
      echo "<script>
      alert('$message')
    window.location.replace('http://localhost//UCID/admin/universityadd.php');
       </script>";
   
      mysql_close();
}
?>