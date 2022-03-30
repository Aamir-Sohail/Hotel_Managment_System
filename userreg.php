<?php
 include 'include/header.php';
$con=mysqli_connect('localhost','root','','hotel');

if (isset($_POST['submit'])){ 

    $fullname =$_POST['fullname'];
    $fathername =$_POST['fathername'];
    $cnic =$_POST['cnic'];
    $mobile =$_POST['mobile'];
    $email =$_POST['email'];
    $address =$_POST['address'];
   
   
    
    $sql ="INSERT INTO userreg(fullname,fathername,cnic,mobile,email,address) VALUES('$fullname','$fathername','$cnic','$mobile','$email','$address')";


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

               <form action="" method="POST">

                   <h4> User Registration  </h4>



                                        <div class="form-group mb-4">
                                            <input type="text" name="fullname" class="form-control" id="lFullName" placeholder="Full Name">
                                        </div>

                                        <div class="form-group mb-4">
                                            <input type="text" name="fathername" class="form-control" id="lFullName" placeholder="Father name">
                                        </div>


                                        <div class="form-group mb-4">
                                            <input type="number" name="cnic" class="form-control" id="lFullName" placeholder="Cnic Number">
                                        </div> 


                                       <div class="form-group mb-4">
                                            <input type="number" class="form-control" id="lFullName" placeholder="Mobile Number" name="mobile">
                                        </div>


                                        <div class="form-group mb-4">
                                            <input type="email" class="form-control" id="lEmail" placeholder="Email address" name="email">
                                        </div>

                                       


                                        <div class="form-group mb-4">
                                            <input type="text" name="address" class="form-control" id="FullName" placeholder="Address">
                                        </div>

                                          <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-4" a href="alluser.php"></a>
                                    </form>


                <!-- end content here -->
                </div>
                </div>

            </div>
    <?php 

      include 'include/footer.php';
 ?>