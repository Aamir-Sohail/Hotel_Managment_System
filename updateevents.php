<?php


$con =mysqli_connect('localhost','root','','hotel');

$id=$_GET['id'];
$sql ="SELECT * FROM events WHERE id ='$id'";

$result=mysqli_query($con,$sql);

$row =mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
  $fullname =$_POST['fullname'];
  $cnic =$_POST['cnic'];
  $email =$_POST['email'];
  $travellers =$_POST['travellers'];
  $datein =$_POST['datein'];
  $dateout =$_POST['dateout'];
$sql ="UPDATE events set  fullname ='$fullname',cnic ='$cnic', email ='$email', travellers ='$travellers',datein ='$datein' dateout ='$dateout' WHERE id ='$id'";

$result =mysqli_query($con,$sql);
if ($result) {
  echo "<script>
    alert('successful update');
    window.location.href ='fetchevents.php';
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

               
                 <h4> Update Events  </h4>



                                         <div class="form-group mb-4">
                                            <input type="text" name="fullname" class="form-control" id="lFullName" placeholder="Full Name" value="<?php echo $row['fullname']?>">
                                        </div>

                                        


                                        <div class="form-group mb-4">
                                            <input type="number" name="cnic" class="form-control" id="lFullName" placeholder="Cnic Number"  value="<?php echo $row['cnic']?>">
                                        </div> 


                                       <div class="form-group mb-4">
                                            <input type="number" name="mobile" class="form-control" id="lFullName" placeholder="Mobile Number"  value="<?php echo $row['mobile']?>">
                                        </div>


                                        <div class="form-group mb-4">
                                            <input type="email" class="form-control" id="lEmail" placeholder="Email Address" name="email"  value="<?php echo $row['email']?>">
                                        </div>
                                         <h4>Events</h4>

                                           <div class="form-group col-md-4">
                                                <label for="inputState"></label>
                                                <select name="events" id="inputState" class="form-control"  value="<?php echo $row['events']?>">
                                                    <option selected="">select</option>
                                                    <option>Wedding</option>
                                                    <option>Birthday Party</option>
                                                    <option>Engament Party</option>
                                                    <option>Bussiness Party</option>
                                                    <option>Special Day Party</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>

                                    
                                        <h4> Select Room  </h4>

                                              <div class="form-group col-md-4">
                                                <label for="inputState"></label>
                                                <select name="travellers" id="inputState" class="form-control"  value="<?php echo $row['travellers']?>">
                                                    <option selected="">1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>Many Mores</option>
                                                </select>
                                            </div>


                                           <h4> Check In </h4>
                                           <div class="form-group mb-4">
                                            <input type="date" name="datein" class="form-control" id="DATE" placeholder="date" name="date"  value="<?php echo $row['datein']?>">
                                        </div>
  

                                             <h4> Check Out </h4>
                                           <div class="form-group mb-4">
                                            <input type="date" name="dateout" class="form-control" id="DATE" placeholder="date" name="date"  value="<?php echo $row['dateout']?>">
                                        </div>

 <td><a href="fetchevents.php?id=<?php echo $row['id']?>" button class="btn btn-primary btn-sm">Update</a></td>




                <!-- end content here -->
                </div>

                </div>

            </div>
    <?php 

      include 'include/footer.php';
 ?>