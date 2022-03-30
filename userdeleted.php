<?php
// include('all_user.php');

$con =mysqli_connect('localhost','root','','hotel');

if (isset($_GET['id'])){
  $id =$_GET["id"];
  // echo"$id";
  $sql="DELETE FROM userreg WHERE id = $id";

$result =mysqli_query($con,$sql);

  
// print_r($id);
  // exit();

  if ($result) {
    echo "<script>
    alert('success');
    window.location.href = 'alluser.php';
</script>";

  }else{

     echo "unsuccessful";
}

}




?>