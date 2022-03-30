<?php


$con =mysqli_connect('localhost','root','','hotel');

$id=$_GET['id'];
$sql ="SELECT * FROM tour_category WHERE id ='$id'";

$result=mysqli_query($con,$sql);

$row111 =mysqli_fetch_assoc($result);


if (isset($_POST['Submit'])) {

  $fullname =$_POST['fullname'];
  $fathername =$_POST['fathername'];
  $cnic =$_POST['cnic'];
  $mobile =$_POST['mobile'];
  $email =$_POST['email'];
  $password =$_POST['password'];
  $travellers =$_POST['travellers'];
  $address =$_POST['address'];
  $select_relation =$_POST['select_relation'];
  $select_country =$_POST['select_country'];
  $select_city =$_POST['select_city'];
  $select_hotel =$_POST['select_hotel'];
  
$sql ="UPDATE tour_category set  fullname ='$fullname',fathername ='$fathername',cnic ='$cnic',mobile ='$mobile', email ='$email',password ='$password', travellers ='$travellers',address ='$address',select_relation ='$select_relation', select_country ='$select_country',select_city ='$select_city', select_hotel ='$select_hotel' WHERE id ='$id'";

$result =mysqli_query($con,$sql);
if ($result) {
  echo "<script>
    alert('successful update');
    window.location.href ='updatetour.php';
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


<form action="" method="POST">
                                         <div class="form-group mb-4">
                                            <input type="text" name="fullname" class="form-control" id="lFullName" placeholder="Full Name" value="<?php echo $row111['fullname']?>">
                                        </div>

                                       <div class="form-group mb-4">
                                            <input type="text" name="fathername" class="form-control" id="lFullName" placeholder="Full Name" value="<?php echo $row111['fathername']?>">
                                        </div>                                        


                                        <div class="form-group mb-4">
                                            <input type="number" name="cnic" class="form-control" id="lFullName" placeholder="Cnic Number"  value="<?php echo $row111['cnic']?>">
                                        </div> 


                                       <div class="form-group mb-4">
                                            <input type="number" name="mobile" class="form-control" id="lFullName" placeholder="Mobile Number"  value="<?php echo $row111['mobile']?>">
                                        </div>


                                        <div class="form-group mb-4">
                                            <input type="email" class="form-control" id="lEmail" placeholder="Email Address" name="email"  value="<?php echo $row111['email']?>">
                                        </div>

                                        <div class="form-group mb-4">
                                            <input type="password" name="password" class="form-control" id="lFullName" placeholder="Full Name" value="<?php echo $row111['password']?>">
                                        </div>

                                        <div class="form-group mb-4">
                                            <input type="text" name="address" class="form-control" id="lFullName" placeholder="Address" value="<?php echo $row111['address']?>">
                                        </div>

                                          <div class="form-group mb-4">
                                            <input type="text" name="address" class="form-control" id="lFullName" placeholder="Address" value="<?php echo $row111['address']?>">
                                        </div>

                                       
                                     <div class="form-group col-md-4">
                                                <label for="inputState">Number of Travellers</label>
                                                <select name="travellers" id="inputState" class="form-control" value="<?php echo $row111['travellers']?>">
                                                    <option selected="">1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>Many Mores</option>
                                                </select>
                                            </div>


                                       <div class="form-group col-md-12">
                                                <label for="inputState">Relation of Travellers</label>
                                                <select name="select_relation" id="inputState" class="form-control" value="<?php echo $row111['select_relation']?>">
                                                    <option selected="">Default</option>
                                                    <option>Husband-Wife</option>
                                                    <option>Bother-Sister</option>
                                                    <option>Son-Father</option>
                                                    <option>Son-Mother</option>
                                                    <option>Daughter-Father</option>
                                                    <option>Daughter-Mother</option>
                                                    <option>Family</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>


<h4> To Travels </h4>

                                               <div class="form-row mb-4">
                                            <div class="form-group col-md-4">
                                                <label for="inputCity">Country</label>
                                               <select name="select_country" id="Country" class="form-control" value="<?php echo $row111['select_country']?>">
                                                <option selected="">Choose...</option>
                                                    <?php 
                                                    $sql = "SELECT *  FROM country";
                                                    $result = mysqli_query($con, $sql);
                                                    if(mysqli_num_rows($result) > 0){
                                                        while($row = mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['Country_Name']."</option>";
                                                        }
                                                    }
                                                    ?>
                                                    <option>Paksitan</option>
                                                    <option>China</option>
                                                    <option>Russia</option>
                                                    <option>Afghanistan</option>
                                                    <option>Iran</option>
                                                    <option>Turkey</option>
                                                    <option>Austrila</option>
                                                    <option>England</option>
                                                    <option>Japan</option>
                                                    <option>Windies</option>
                                                    <option>South Aferica</option>
                                                    

                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">City</label>
                                                <select name="select_city" id="city" class="form-control" value="<?php echo $row['select_city']?>">
                                                    <option selected="">Choose...</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputZip">Hotel</label>
                                                 <select name="select_hotel" id="hotel" class="form-control" value="<?php echo $row111['select_hotel']?>">
                                                <option selected="">Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>


                                         
<!-- 
 <td><a href="alltour.php?id=<!-- <?php echo $row['id']?>" --> class="btn btn-primary btn-sm">Update</a></td> -->
 
 <input type="submit" name="Submit" value="<?php echo $row111['id']?>">

</form>

                <!-- end content here -->
                </div>
                </div>

            </div>
    <?php 

      include 'include/footer.php';
 ?>