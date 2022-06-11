<?php
error_reporting(0);
?>

<?php

include "config.php";
session_start();

$sql1 = "SELECT E_FNAME from EMPLOYEE WHERE E_ID='$_SESSION[user]'";
$sql2 = "SELECT E_ID from EMPLOYEE WHERE E_ID='$_SESSION[user]'";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$row1 = $result1->fetch_row();
$row2 = $result2->fetch_row();
$ename = $row1[0];
$eid1 = $row2[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>getMED Pharmacist<?php echo $ename ?></title>
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
        Update Me
    </title>
</head>

<body>


    <?php
    include "config.php";

    $empl_id = "SELECT * FROM employee WHERE e_id='$eid1'";
    $result_emp = $conn->query($empl_id);
    $row_emp = $result_emp->fetch_row();
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
                <div style="width: 100%;height: 60px;padding-top: 50px;" class="mt-3 text-center">
                    <h2>EDIT YOUR PROFILE</h2>
                </div>

                <div class="form-group ">
                    <form class="m-4" style="padding: 29px;" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div style="float: left;width: 50%;" class="column">
                            <p>
                                <label for="eid">Employee ID:</label><br>
                                <label for="eid"><?php echo $row_emp[0]; ?></label><br>

                            </p>
                            <p>
                                <label for="efname">First Name:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="efname" value="<?php echo $row_emp[1]; ?>" require>
                            </p>
                            <p>
                                <label for="elname">Last Name:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="elname" value="<?php echo $row_emp[2]; ?>" Required>
                            </p>
                            <p>
                                <label for="ebdate">Date of Birth:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="date" name="ebdate" value="<?php echo $row_emp[3]; ?>" require>
                            </p>
                            <p>
                                <label for="eage">Age:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="eage" value="<?php echo $row_emp[4]; ?>" require>
                            </p>
                            <p>
                                <label for="esex">Sex:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="esex" value="<?php echo $row_emp[5]; ?>" require>
                            </p>
                        </div>
                        <div style="float: left;width: 50%;" class="column">
                            <p>
                                <label for="etype">Employee Type:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="etype" value="<?php echo $row_emp[6]; ?>" require>
                            </p>
                            <p>
                                <label for="ejdate">Date of Joining:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="date" name="ejdate" value="<?php echo $row_emp[7]; ?>" require>
                            </p>
                            <p>
                                <label for="esal">Salary:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" step="0.01" name="esal" value="<?php echo $row_emp[8]; ?>" Required>
                            </p>
                            <p>
                                <label for="ephno">Phone Number:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="ephno" value="<?php echo $row_emp[9]; ?>" require>
                            </p>

                            <p>
                                <label for="e_mail">Email ID:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="e_mail" value="<?php echo $row_emp[10]; ?>" require>
                            </p>
                            <p>
                                <label for="eadd">Address:</label><br>
                                <input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="eadd" value="<?php echo $row_emp[11]; ?>" require>
                            </p>

                        </div>


                        <input class="btn btn-primary" type="submit" name="update" value="Update Profile">
                    </form>

                    <?php
                    if (isset($_POST['update'])) {

                        $fname = mysqli_real_escape_string($conn, $_REQUEST['efname']);
                        $lname = mysqli_real_escape_string($conn, $_REQUEST['elname']);
                        $bdate = mysqli_real_escape_string($conn, $_REQUEST['ebdate']);
                        $age = mysqli_real_escape_string($conn, $_REQUEST['eage']);
                        $sex = mysqli_real_escape_string($conn, $_REQUEST['esex']);
                        $etype = mysqli_real_escape_string($conn, $_REQUEST['etype']);
                        $jdate = mysqli_real_escape_string($conn, $_REQUEST['ejdate']);
                        $sal = mysqli_real_escape_string($conn, $_REQUEST['esal']);
                        $phno = mysqli_real_escape_string($conn, $_REQUEST['ephno']);
                        $mail = mysqli_real_escape_string($conn, $_REQUEST['e_mail']);
                        $add = mysqli_real_escape_string($conn, $_REQUEST['eadd']);

                        $sql = "UPDATE employee SET e_fname='$fname',e_lname='$lname',bdate='$bdate',e_age='$age',e_sex='$sex',e_type='$etype',e_jdate='$jdate',e_sal='$sal',e_phno='$phno',e_mail='$mail',e_add='$add' where e_id='$eid1'";

                        if ($conn->query($sql)) {
                            header("Location:profile.php");

                            echo "Details updated";
                        } else
                            echo "<p style='font-size:8; color:red;'>Error! Unable to update.</p>";
                    }

                    ?>
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