
<?php

$con =mysqli_connect('localhost','root','','hotel');

$sql= "SELECT * FROM tour_category";
$result=mysqli_query($con,$sql);
$row =mysqli_fetch_assoc($result);

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

                <div class="widget-content widget-content-area br-6">

                      <a href="tourcategory.php" button class="btn btn-primary btn-sm"> Add New Button </a>
                            <table class="multi-table table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>fullname</th>
                                        <th>fathername</th>
                                        <th>cnic</th>
                                        <th>mobile</th>
                                        <th>email</th>
                                        <th>password</th>
                                        <th>address</th>
                                        <th>travellers</th>
                                        <th>select_reletion</th>
                                        <th>select_country</th>
                                        <th>select_city</th>
                                        <th>select_hotel</th>
                                        <th colspan="2">
                                        Action
                                    </th>
                                   
                                        <!-- <th class="text-center  dt-no-sorting">Status</th>
                                        <th class="text-center dt-no-sorting">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>

         <?php
            
         while ($row =mysqli_fetch_assoc($result)) 
         {

                ?>

                         
                                    <tr>
                                    <td><?php echo $row['fullname'];?></td>
                                    <td><?php echo $row['fathername'];?></td>
                                    <td><?php echo $row['cnic'];?></td>
                                    <td><?php echo $row['mobile'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['password'];?></td>
                                    <td><?php echo $row['address'];?></td>
                                    <td><?php echo $row['travellers'];?></td>
                                    <td><?php echo $row['select_relation'];?></td>
                                    <td><?php echo $row['select_country'];?></td>
                                    <td><?php echo $row['select_city'];?></td>
                                    <td><?php echo $row['select_hotel'];?></td>
                                    
                                    

 
                                
        
        <td><a href="alltour.php?id=<?php echo $row['id']?>" button class="btn btn-primary btn-sm">Edit</a></td>

         <td><a href="tourdelete.php?id=<?php echo $row['id']?>" button class="btn btn-danger btn-sm">Canal</a>
        

        </td>
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