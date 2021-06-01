<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";

//establishing a connection
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$q = mysqli_query($connection,"insert into tbl_user(user_name,user_gender,user_mobile) values('john','male','9564738243')") or die("Error". mysqli_error($connection));


if($q)
 {
    echo"<script>alert('record added');</script>";
	}

