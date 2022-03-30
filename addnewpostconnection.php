<?php
$con=mysqli_connect('localhost','root','','hotel');
if (isset($_POST['login'])) {
	$name =$_POST['name'];
	$post =$_POST['post'];
	$category =$_POST['category'];
	$author =$_POST['author'];
	$description =$_POST['description'];

	

$sql ="INSERT INTO addnewpostconnection(name,post,category,author,description) VALUES('$name','$post','$category','$author','$description')";


$result=mysqli_query($con,$sql);
if ($result) {
	header("Location: addnewpost.php?action=success");
}else{
		header("Location: addnewpost.php?action=unsuccess");
}


}

?>