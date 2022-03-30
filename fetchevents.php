<?php


$con =mysqli_connect('localhost','root','','hotel');

$sql= "SELECT * FROM events";
$result=mysqli_query($con,$sql);
$row =mysqli_fetch_assoc($result);

// exit();

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

               
<a href="events.php" button class="btn btn-primary btn-sm"> Add New Button </a>
                            <table class="multi-table table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Full_Name</th>
                                        <th>Cnic</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Events</th>
                                        <th>Travellers</th>
                                        <th>Date_in</th>
                                        <th>Date_out</th>
                                        <th class="text-center  dt-no-sorting">Status</th>
                                        <th colspan="4" class="text-center dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

         <?php
            
         while ($row =mysqli_fetch_assoc($result)) 
         {

                ?>

                         
                                    <tr>
                                    <td><?php echo $row['fullname'];?></td>
                                    <td><?php echo $row['cnic'];?></td>
                                    <td><?php echo $row['mobile'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['events'];?></td>
                                    <td><?php echo $row['travellers'];?></td>
                                    <td><?php echo $row['datein'];?></td>
                                    <td><?php echo $row['dateout'];?></td>
                                    <td><?php
                                         if ($row['status'] == 1) {
                                             echo '<button class="btn btn-primary btn-sm">Booked</button>';
                                         }else
                                         {
                                             echo '<button class="btn btn-danger btn-sm">UnBooked</button>';
                                         }

                                         ?>
                                    </td>
                                    
                                    


                                        <td>
        <td><a href="updateevents.php?id=<?php echo $row['id']?>" button class="btn btn-primary btn-sm">Edit</a></td>
        <td><a href="eventsdeleted.php?id=<?php echo $row['id']?>" button class="btn btn-danger btn-sm">Delete</a></td>

        </tr>
            <?php }?>
                                </tbody>
                                
                            </table>
                        </div>









                <!-- end content here -->
                </div>
                </div>

            </div>
    <?php 

      include 'include/footer.php';
 ?>