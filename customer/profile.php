<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pharma Customer</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars-o.css">
    <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="form4.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>
        Update Customer
    </title>
</head>

<body>
    <?php

    include "config.php";
    session_start();

    $sql1 = "SELECT c_username from cuslogin WHERE c_id='$_SESSION[user]'";
    $sql2 = "SELECT c_id from cuslogin WHERE c_id='$_SESSION[user]'";
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    $row1 = $result1->fetch_row();
    $row2 = $result2->fetch_row();
    $cname = $row1[0];
    $cid1 = $row2[0];
    

    ?>

    <?php
    include "config.php";
    
    $cus_id = "SELECT * FROM customer WHERE C_ID='$cid1'";
    $result_cus = $conn->query($cus_id);
    $row_cus = $result_cus->fetch_row();
    
    ?>

    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include('includes/header.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="padding-left: 0px;background-color: #f2f2f2;">
            <!-- partial:partials/_sidebar.html -->
            <?php include('includes/leftbar.php'); ?>
            <!-- partial -->

            <div class="container">
                <div style="width: 100%;height: 60px;padding-top: 50px;" class="mt-3 ">
                    <h2> YOUR PROFILE</h2>
                    <h6 class="text-center mt-4">General settings</h6>
                </div>

                <div class="form-group ">
                    <form class="m-4" style="padding-top: 100px;" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div style="float: left;width: 50%;" class="column">
                        <p>
                                <label for="cid">Customer ID:</label><br>
                                <label for="cid"><?php echo $row_cus[0]; ?></label><br>

                            </p>
                            <p>
                                <label for="cfname">First Name:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="cfname" value="<?php echo $row_cus[1]; ?>" readonly>
                            </p>
                            <p>
                                <label for="clname">Last Name:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="clname" value="<?php echo $row_cus[2]; ?>" readonly>
                            </p>
                            
                            
                            <p>
                                <label for="cage">Age:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="cage" value="<?php echo $row_cus[3]; ?>">
                            </p>
                            
                        </div>
                        <div style="float: left;width: 50%;" class="column">
                            
                            <p>
                                <label for="csex">Sex:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="csex" value="<?php echo $row_cus[4]; ?>">
                            </p>
                            <p>
                                <label for="cphno">Phone Number:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="cphno" value="<?php echo $row_cus[5]; ?>" readonly>
                            </p>
                            <p>
                                <label for="c_mail">Email ID:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="c_mail" value="<?php echo $row_cus[6]; ?>" readonly>
                            </p>



                    

                        </div>


                        <a style="width: 40%; " class="btn btn-primary mt-4" href="update-profile.php">Edit profile</a>
                    </form>


                </div>


            </div>

        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>
<!-- base:js -->
<script src="vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<!-- End custom js for this page-->

</html>