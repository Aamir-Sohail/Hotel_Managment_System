<?php  
session_start();
$con=mysqli_connect('localhost','root','','hotel');

if (isset($_POST['login'])) {
	
	$username =$_POST['username'];
	$password =$_POST['password'];

$sql ="SELECT * from admin_login WHERE username = '$username' and password = '$password'";
$result =mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1){
$row = mysqli_fetch_array($result);
	$_SESSION['user_id'] = $row['username'];
	echo "<script> alert('successful')</script>";

header('location: dashboard.php');

}else{
	echo "<script> alert('unsuccessful')</script>";
} 

}


?>