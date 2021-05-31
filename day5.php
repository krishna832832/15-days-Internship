<?php
//Numerical Array
//method 1
$x[0] =  5;
$x[1] =  -10;
$x[2] =  15.5;
$x[3] =  20;
$x[4] = "java";
$x[5] = "4";

//Method 2 
$x[] = 5;
$x[] = -10;
$x[] = 15.5;
$x[] = 20;
$x[] = "java";
$x[] = "4";


//Method 3
$x= array(5,-10,15.5,30,"4","java",20);
// print array value
echo $x[5];

// print whole array
for($i=0; $i< count($x); $i++) {
	 echo "</br>".$x[$i];
}


