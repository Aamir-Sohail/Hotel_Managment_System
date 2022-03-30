<?php
 // include 'include/header.php';
$con=mysqli_connect('localhost','root','','hotel');

if (isset($_POST['submit'])){ 

    $fullname =$_POST['fullname'];
    $cnic =$_POST['cnic'];
    $mobile =$_POST['mobile'];
    $email =$_POST['email'];
    $travellers=$_POST['travellers'];
    
    
    $sql ="INSERT INTO rooms(fullname,cnic,mobile,email,travellers) VALUES('$fullname','$cnic','$mobile','$email','$travellers')";


$result = mysqli_query($con,$sql);
    // print_r($result);
    // exit();
   if($result){
    header("Location: rooms.php?action=success");
    
   }else{
   header("Location: rooms.php?action=unsuccess");
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

                   <h4> Rooms Reservation  </h4>



                                        <div class="form-group mb-4">
                                            <input type="text" name="fullname" class="form-control" id="lFullName" placeholder="Full Name">
                                        </div>

                                        


                                        <div class="form-group mb-4">
                                            <input type="number" name="cnic" class="form-control" id="lFullName" placeholder="Cnic Number">
                                        </div> 


                                       <div class="form-group mb-4">
                                            <input type="number" name="mobile" class="form-control" id="lFullName" placeholder="Mobile Number">
                                        </div>


                                        <div class="form-group mb-4">
                                            <input type="email" class="form-control" id="lEmail" placeholder="Email Address" name="email">
                                        </div>

                                    
                   <h4> Select Room  </h4>

                                           <div class="form-group col-md-4">
                                                <label for="inputState"></label>
                                                <select name="travellers" id="inputState" class="form-control">
                                                    <option selected="">1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>Many Mores</option>
                                                </select>
                                            </div>


                                             <button type="submit" name="submit" class="btn btn-primary mt-4">Orders</button>

                                              <button type="delete" name="cancal" class="btn btn-danger mt-4"><script>alerts('unsuccessful')</script>Cancal</button>





                <!-- end content here -->
                </div>
                </div>

            </div>
    <?php 

      include 'include/footer.php';
 ?>