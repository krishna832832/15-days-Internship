<?php
$connection = mysqli_connect("localhost","root","","db_internship");
//query
$q = mysqli_query($connection,"select * from tbl_user") or die("Error". mysqli_error($connection));
// fetch data
$row = mysqli_fetch_row($q);
//debug
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];

//Numerical  and associative array
$row = mysqli_fetch_array($q);
echo "<pre">
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
echo  $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'];

















