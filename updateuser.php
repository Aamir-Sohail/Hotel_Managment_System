<?php


$con =mysqli_connect('localhost','root','','hotel');

$id=$_GET['id'];
$sql ="SELECT * FROM userreg WHERE id ='$id'";

$result=mysqli_query($con,$sql);

$row =mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
  $fullname =$_POST['fullname'];
  $fathername =$_POST['fathername'];
  $cnic =$_POST['cnic'];
  $mobile =$_POST['mobile'];
  $email =$_POST['email'];
  $address =$_POST['address'];
$sql ="UPDATE userreg set  fullname ='$fullname',fathername ='$fathername', cnic ='$cnic', mobile ='$mobile',email ='$email', address ='$address' WHERE id =$id";

$result =mysqli_query($con,$sql);
if ($result) {
  echo "<script>
    alert('successful update');
    window.location.href ='alluser.php';
  </script>";
}else{
  echo "<script>
    alert('unsuccessful update');
  </script>";

}


}


?>




<?php
 include 'include/header.php';
?>
    <!-- 2nd END NAVBAR  -->
        <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
        <!--  BEGIN SIDEBAR  -->
<?php
 include 'include/sidebar.php';
?>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
               <!-- your content area -->

               
                  <h4> Update Users Information </h4>


                            <form action="" method="POST">
                                        <div class="form-group mb-4">
                                            <input type="text" name="fullname" class="form-control" id="lFullName" placeholder="Full Name" value="<?php echo $row['fullname']?>">
                                        </div>

                                        


                                        <div class="form-group mb-4">
                                            <input type="text" name="fathername" class="form-control" id="lFullName" placeholder="Post" value="<?php echo $row['fathername']?>">
                                        </div> 


                                       <div class="form-group mb-4">
                                            <input type="number" name="cnic" class="form-control" id="lFullName" value="<?php echo $row['cnic']?>" placeholder="cnic">
                                        </div>


                                        <div class="form-group mb-4">
                                            <input type="mobile" class="form-control" id="mobile" placeholder="Mobile" value="<?php echo $row['mobile']?>"  name="mobile">
                                        </div>
                                         
                                        <div class="form-group mb-4">
                                            <input type="email" class="form-control" id="lEmail" placeholder="email" value="<?php echo $row['email']?>" name="email">
                                        </div>

                                         <div class="form-group mb-4">
                                            <input type="text" class="form-control" id="lEmail" placeholder="Address" value="<?php echo $row['address']?>" name="address">
                                        </div>
                                         
                                         

<input type="submit" name="submit" value="Submit" class="btn btn-primary mt-4">

</form>

                <!-- end content here -->
                </div>
                </div>

            </div>
    <?php 

      include 'include/footer.php';
 ?>