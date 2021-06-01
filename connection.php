<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
//connection
$connection = mysqli_connect($host, $username, $passwwd, $dbname);

$q = mysqli_query($connection,"insert into tbl_user(user_name,user_gender,user_mobile) values('krishna','female','1296457876')") or die(error));