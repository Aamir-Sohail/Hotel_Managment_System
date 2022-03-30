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
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
               <!-- your content area -->

               <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <?php if(isset($_GET['action']) && $_GET['action']=='unsucess'){
                                        echo '<div class="alert alert-danger" role="alert">
                                         Post is not submitted successfully!
                                        </div>';
                                    }elseif(isset($_GET['action']) && $_GET['action']=='success'){
                                     echo '<div class="alert alert-success" role="alert">
                                         Post is  submitted successdully!
                                        </div>';

                                    }




                                    ?>
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Add New Post</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form action="addnewpostconnection.php" method="POST">
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Name</label>
                                                <input type="text" class="form-control" id="" placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputPassword4">Post</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Password" name="post">
                                            </div>
                                        </div>
                                        <div class="form-group mb-12">
                                            <label for="inputAddress">Category</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Category" name="category">
                                        </div>
                                        <div class="form-group mb-12">
                                            <label for="inputAddress2">Atuhor</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Author" name="author">
                                        </div>


                                        

                                        <textarea class="form-group mb-12" placeholder="" name="description">Descripition </textarea>

                                        
                                        <div class="form-group">
                                            <div class="form-check pl-0">
                                                <div class="custom-control custom-checkbox checkbox-info">
                                                    <input type="checkbox" class="custom-control-input" id="gridCheck">
                                                    <label class="custom-control-label" for="gridCheck">Check me out</label>
                                                </div>
                                            </div>
                                        </div>
                                      <button type="submit" class="btn btn-primary mt-3" name="login">Sign in</button>
                                    </form>

 
                                        </div>
                                    </div>
                                </div>
                           
                <!-- end content here -->
                </div>
                </div>

            </div>
    <?php 

      include 'include/footer.php';
 ?>