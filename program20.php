<?php
 $connection = mysqli_connect("localhost", "root", "", "db_internship");

if($_POST) {
	 $name = $_POST['txt1'];
	 $gender = $_POST['txt2'];
	 $mobile = $_POST['txt3'];
	  $email= $_POST['txt4'];
	$pincode = $_POST['txt5']; 
	$DOB = $_POST['txt6'];
	$address = $_POST['txt7'];
	  
	 
	 
	 	 
	 
$q = mysqli_query($connection, "insert into tbl_user(user_name,user_gender,user_mobile, user_email,user_pincode,user_DOB,user_address) values('{$name}','{$gender}','{$mobile}','{$email}','{$pincode}' ,'{$DOB}','{$address}')") or die("Error". mysqli_error($connection));
     if($q) {
	     echo "<script>alert('Record added sucessfully');</script>";
		 }
	}
?>

<html>  
  <body>
        <form method="post">
	    Name    <input type="text" name="txt1"/></br>
		Gender  <select name="txt2"/>
					 <option>Male</option>
					 <option>Female</option>
					 </select></br>
		 Mobile <input type="number" name="txt3"/></br> 			 
         Email id <input type="email" name="txt4"/></br>  
        pincode <input type="text" name="txt5"/></br>
        DOB <input type="date" name="txt6"/></br>
       Address <input type="text" name="txt7"/></br>		
        <input type="submit"/>
		</form>
     </body>
</html>		
		
		
