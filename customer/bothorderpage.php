<?php

include "config.php";

if (isset($_POST['search'])) {

    $search = $_POST['valuetosearch'];
    $search_result = mysqli_query($conn, "SET @p0='$search';") or die(mysqli_error($conn));
    $search_result = mysqli_query($conn, "CALL `SEARCH_INVENTORY`(@p0);") or die(mysqli_error($conn));
} else {
    $query = "SELECT med_id as medid, med_name as medname,med_qty as medqty,category as medcategory,med_price as medprice,location_rack as medlocation FROM meds";
    $search_result = filtertable($query);
}

function filtertable($query)
{
    $conn = mysqli_connect("localhost", "root", "", "pharmacy");
    $filter_result = mysqli_query($conn, $query);
    return $filter_result;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>getMED Customer</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <?php

    include "config.php";
    session_start();
    // to retrieve data frm base using session details
    $sql1 = "SELECT c_username from cuslogin WHERE c_id='$_SESSION[user]'";
    $sql2 = "SELECT c_id from cuslogin WHERE c_id='$_SESSION[user]'";
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    $row1 = $result1->fetch_row();
    $row2 = $result2->fetch_row();
    $cname = $row1[0];
    $cid1 = $row2[0];

    ?>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <!-- header -->
        <?php include('includes/header.php'); ?>
        <!-- header ends -->
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="padding-left: 0px;">
            <!-- partial:partials/_sidebar.html -->
            <!-- sidebar -->
            <?php include('includes/leftbar.php'); ?>
            <!-- sidebar ends -->
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12 mb-4 mb-xl-0">

                            <h4 style="text-transform:uppercase;" class="font-weight-bold text-dark">Hi, <?php echo $cname; ?></h4>
                            <a href="logout1.php">Logout(signed in as <?php echo $cname; ?>)</a>
                        </div>
                    </div>
                    <div style="width: 100%;height: 60px;padding-top: 5px;" class="mt-3 text-center">
                        <h2> BOTH ORDERS</h2>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xl-3 flex-column d-flex grid-margin stretch-card m-4">
                            <div class="row flex-grow">
                                <div class="col-sm-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Given Order</h4>
                                            <a href="pos1.php" title="Give new order">
                                                <img style="padding-left: 52px;width: 65%;height: 80%;padding-top: 29px;" src="images/meds/givenorder.png" alt="Add New Sale">
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-3 flex-column d-flex grid-margin stretch-card m-4">
                            <div class="row flex-grow">
                                <div class="col-sm-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Current Order</h4>
                                            <a href="pos2.php" title="Show Current Order">
                                                <img style="padding-left: 52px;width: 65%;height: 80%;padding-top: 29px;" src="images/meds/currentorder.png" alt="Add New Sale">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include('includes/footerr.php'); ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- End custom js for this page-->
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

</html>