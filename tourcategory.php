<?php
 include 'include/header.php';
$con=mysqli_connect('localhost','root','','hotel');

if (isset($_POST['submit'])){ 

    $fullname =$_POST['fullname'];
    $fathername =$_POST['fathername'];
    $cnic =$_POST['cnic'];
    $mobile =$_POST['mobile'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $address =$_POST['address'];
    $travellers=$_POST['travellers'];
    $select_relation =$_POST['select_relation'];
    $select_country =$_POST['select_country'];
    $select_city =$_POST['select_city'];
    $select_hotel =$_POST['select_hotel'];
   
    
    $sql ="INSERT INTO tour_category(fullname,fathername,cnic,mobile,email,password,address,travellers,select_relation,select_country,select_city,select_hotel) VALUES('$fullname','$fathername','$cnic','$mobile','$email','$password','$address','$travellers','$select_relation','$select_country','$select_city',' $select_hotel')";


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

                   <h4> Traveller Information  </h4>



                                        <div class="form-group mb-4">
                                            <input type="text" name="fullname" class="form-control" id="lFullName" placeholder="Full Name *">
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

                                       

                                        <div class="form-group">
                                            <input type="password" class="form-control" id="lPassword" placeholder="Password" name="password">
                                        </div>


                                        <div class="form-group mb-4">
                                            <input type="text" name="address" class="form-control" id="FullName" placeholder="Address">
                                        </div>


                                     <div class="form-group col-md-4">
                                                <label for="inputState">Number of Travellers</label>
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


                                       <div class="form-group col-md-12">
                                                <label for="inputState">Relation of Travellers</label>
                                                <select name="select_relation" id="inputState" class="form-control">
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
                                               <select name="select_country" id="Country" class="form-control">
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
                                                <select name="select_city" id="city" class="form-control">
                                                    <option selected="">Choose...</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputZip">Hotel</label>
                                                 <select name="select_hotel" id="hotel" class="form-control">
                                                <option selected="">Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>



                                        <small id="emailHelp" class="form-text text-muted">*Required Fields</small>
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-4">
                                    </form>




                                             



               

                <!-- end content here -->
                </div>
                </div>

            </div>
    <?php 

      include 'include/footer.php';
 ?>
 <script type="text/javascript">
     $("#Country").on("change",function() {
        var country_id = $("#Country").val();
         // alert(country_id);
          $.ajax({
            type: "POST",
            url: 'include/process.php',
            data: 'country_id='+country_id,
            success: function(response)
            {
                $("#city").html(response);
           }
       });
     })
     $("#city").on("change",function() {
        var city_id = $("#city").val();
         // alert(country_id);
          $.ajax({
            type: "POST",
            url: 'include/process.php',
            data: 'city_id='+city_id,
            success: function(response)
            {
                $("#hotel").html(response);
           }
       });
     })
 </script>