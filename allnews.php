<?php

$con =mysqli_connect('localhost','root','','hotel');

$sql= "SELECT * FROM addnewpostconnection";
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
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing"> 

                              <!-- your content area -->

                 <div class="widget-content widget-content-area br-6">

                      <a href="addnewpost.php" button class="btn btn-primary btn-sm"> Add New Button </a>
                            <table class="multi-table table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Post</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>PageView</th>
                                        <th class="text-center  dt-no-sorting">Status</th>
                                        <th class="text-center dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

         <?php
            
         while ($row =mysqli_fetch_assoc($result)) 
         {

                ?>

                         
                                    <tr>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['post'];?></td>
                                    <td><?php echo $row['category'];?></td>
                                    <td><?php echo $row['author'];?></td>
                                    <td><?php echo $row['description'];?></td>
                                    <td><?php
                                         if ($row['status'] == 1) {
                                             echo '<button class="btn btn-primary btn-sm">Publish</button>';
                                         }else
                                         {
                                             echo '<button class="btn btn-danger btn-sm">UnPublish</button>';
                                         }

                                         ?>
                                    </td>
                                    <td><?php echo $row['created_at'];?></td>
                                    


                                        <td>
        <td></td>
        <td><a href="updatepost.php?id=<?php echo $row['id']?>" button class="btn btn-primary btn-sm">Edit</a></td></tr>
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