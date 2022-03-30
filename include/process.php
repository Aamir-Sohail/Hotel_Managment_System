<?php 
 $con=mysqli_connect('localhost','root','','hotel');

 if(isset($_POST['country_id'])){
 	$id = $_POST['country_id'];
    $sql = "SELECT *  FROM city where country_id ='$id'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<option value='".$row['id']."'>".$row['city_name']."</option>";
        }
   }
}
if(isset($_POST['city_id'])){
    $id = $_POST['city_id'];
    $sql = "SELECT *  FROM hotel where city_id ='$id'";

    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<option value='".$row['id']."'>".$row['hotel_name']."</option>";
        }
   }
}


if(isset($_POST['hotel'])){
    $id = $_POST['hotel'];
    $sql = "SELECT *  FROM foodmenu where hotel_id ='$id'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<option value='".$row['id']."'>".$row['foodname']."</option>";
        }
   }else{
   echo "<option value=''>Sorry no data found</option>";
   }
}
?> 