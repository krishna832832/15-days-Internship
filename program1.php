<?php
$year= 2018;
if($year % 400==0){
      echo $year." is a leap Year";
	   } elseif($year %100==0){
	   echo $year." is not a leap Year";
	   } elseif ($year % 4==0){
		   echo $year."is a leap Year";
	   }else {
		  echo $year."is not a leap Year";  
	   }
		?>  
	  

