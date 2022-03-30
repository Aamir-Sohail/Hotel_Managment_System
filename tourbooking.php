<?php
$con=mysqli_connect('localhost','root','','hotel');
if (isset($_POST['submit'])) {
    $tour =$_POST['tour'];
    $datein =$_POST['datein'];
    $dateoff =$_POST['dateoff'];
    $travellers =$_POST['travellers'];
    $children =$_POST['children'];
    $room =$_POST['room'];
    

    

$sql ="INSERT INTO tourbooking(tour,datein,dateoff,travellers,children,room) VALUES('$tour','$datein','$dateoff','$travellers','$children','$room')";


$result=mysqli_query($con,$sql);
if ($result) {
    header("Location: tourbooking.php?action=success");
}else{
        header("Location: tourbooking.php?action=unsuccess");
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
                <h4> Tour Booking  </h4>



                                        <div class="form-group mb-4">
                                            <input type="text" name="tour" class="form-control" id="lFullName" placeholder="Where You are Going?">
                                        </div>
                                        <h4> Form To  </h4>
                                        <div class="form-group mb-4">
                                            <input type="date" name="datein" class="form-control" id="lFullName" placeholder="date_in">
                                        </div>

                                         <h4> Off To  </h4>
                                        <div class="form-group mb-4">
                                            <input type="date" name="dateoff" class="form-control" id="lFullName" placeholder="date_off">
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


                                             <div class="form-group col-md-4">
                                                <label for="inputState">Number of children's</label>
                                                <select name="children" id="inputState" class="form-control">
                                                    <option selected="">1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>Many Mores</option>
                                                </select>
                                            </div>

                                             <div class="form-group col-md-4">
                                                <label for="inputState">Number of Rooms</label>
                                                <select name="room" id="inputState" class="form-control">
                                                    <option selected="">1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>Many Mores</option>
                                                </select>
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