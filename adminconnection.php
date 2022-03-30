<?php

$con=mysqli_connect('localhost','root','','hotel');

if (isset($_POST['register'])){	

	$username =$_POST['username'];
	$email =$_POST['email'];
	$password =$_POST['password'];

	
	$sql ="INSERT INTO admin_login(username,email,password) VALUES('$username','$email','$password')";


$result = mysqli_query($con,$sql);
	// print_r($result);
	// exit();
   if($result){
   	echo "<script>alert('successful')</script>";
   	
   }else{
   	echo "<script>alert('successful')</script>";
   }
}


?>