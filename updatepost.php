<?php


$con =mysqli_connect('localhost','root','','hotel');

$id=$_GET['id'];
$sql ="SELECT * FROM addnewpostconnection WHERE id ='$id'";

$result=mysqli_query($con,$sql);

$row =mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
  $name =$_POST['name'];
  $post =$_POST['post'];
  $category =$_POST['category'];
  $author =$_POST['author'];
  $description =$_POST['description'];
$sql ="UPDATE addnewpostconnection set  name ='$name',post ='$post', category ='$category', author ='$author',description ='$description' WHERE id =$id";

$result =mysqli_query($con,$sql);
if ($result) {
  echo "<script>
    alert('successful update');
    window.location.href ='allnews.php';
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

                  <h4> Update New Post  </h4>


                            <form action="" method="POST">
                                        <div class="form-group mb-4">
                                            <input type="text" name="name" class="form-control" id="lFullName" placeholder="Full Name" value="<?php echo $row['name']?>">
                                        </div>

                                        


                                        <div class="form-group mb-4">
                                            <input type="text" name="post" class="form-control" id="lFullName" placeholder="Post" value="<?php echo $row['post']?>">
                                        </div> 


                                       <div class="form-group mb-4">
                                            <input type="text" name="category" class="form-control" id="lFullName" value="<?php echo $row['category']?>" placeholder="Author">
                                        </div>


                                        <div class="form-group mb-4">
                                            <input type="text" class="form-control" id="lEmail" placeholder="Author" value="<?php echo $row['author']?>"  name="author">
                                        </div>
                                         
                                        <div class="form-group mb-4">
                                            <input type="textarea" class="form-control" id="lEmail" placeholder="Description" value="<?php echo $row['description']?>" name="description">
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