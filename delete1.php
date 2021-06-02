<?php
$connection = mysqli_connect("localhost","root","","db_internship");

$d = $_GET['deleteid'];
$q = mysqli_query($connection,"delete from tbl_user where user_id='{$id}' ") or die(mysqli_error($connection));

if($q)
{
	 echo "<script>alert('Record deleted') ;window.location='table.php';</script>";

}
  