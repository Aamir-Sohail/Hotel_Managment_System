<?php
$con=mysqli_connect('localhost','root','','hotel');
if (isset($_POST['submit'])) {
    $hotel =$_POST['hotel'];
    $textarea =$_POST['textarea'];
    $file =$_POST['file'];
    

    

$sql ="INSERT INTO addhotel(hotel,textarea,file) VALUES('$hotel','$textarea','$file')";


$result=mysqli_query($con,$sql);
if ($result) {
    header("Location: addhotel.php?action=success");
}else{
        header("Location: addhotel.php?action=unsuccess");
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

                  <h4>Add Hotel </h4>
<form action="" method="POST">


                                        <div class="form-group mb-4">
                                            <input type="text" name="hotel" class="form-control" id="lFullName" placeholder="Add Hotel Name">
                                        </div>



                                        <div class="form-group mb-4">
                                             <textarea name="textarea" id="textarea" rows="10" cols="80">
                
                                       </textarea>
                                        </div>

                             <div class="form-group mb-4">
                                            <input type="file" name="file" placeholder="Upload File">
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