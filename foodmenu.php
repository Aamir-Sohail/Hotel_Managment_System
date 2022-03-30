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

        <h3>     Food Menu        </h3>

<div class="form-row mb-4">
                                            <div class="form-group col-md-3">
                                                <label for="inputCity">Country</label>
                                               <select id="Country" class="form-control">
                                                <option selected="">Choose...</option>
                                                    <option value="1">Pakistan</option><option value="2">India</option><option value="3">England</option><option value="4">China</option><option value="5">Austrila</option><option value="6">Japan</option>                                                    <option>Paksitan</option>
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
                                            <div class="form-group col-md-3">
                                                <label for="inputState">City</label>
                                                <select id="city" class="form-control">
                                                    <option selected="">Choose...</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputZip">Hotel</label>
                                                 <select id="hotel" class="form-control">
                                                <option selected="">Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>

                                         <div class="form-group col-md-3">
                                                <label for="inputZip">Food</label>
                                                 <select id="foodmenu" class="form-control">
                                                <option selected="">Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div id="error"></div>


                                        </div>


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

      $("#hotel").on("change",function() {
        var hotel = $("#hotel").val();

          $.ajax({
            type: "POST",
            url: 'include/process.php',
            data: 'hotel='+hotel,
            success: function(response)
            {
                if (response == 'nodata') {
                 alert('Sorry no data found');

                 // $("#error").html(response);
                }else{
                $("#foodmenu").html(response);

                }
           }
       });
     })
 </script>