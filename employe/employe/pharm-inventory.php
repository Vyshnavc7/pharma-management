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
  <title>Pharma Pharmacy</title>
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
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
<?php

include "config.php";
session_start();

$sql1 = "SELECT E_FNAME from EMPLOYEE WHERE E_ID='$_SESSION[user]'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_row();

$ename = $row1[0];

?>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <!-- header -->
    <?php include('includes/header.php'); ?>
    <!-- header ends -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <!-- sidebar -->
      <?php include('includes/leftbar.php'); ?>
      <!-- sidebar ends -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>

            </div>
          </div>
          <div style="width: 100%;height: 60px;padding-top: 5px;" class="mt-3 text-center">
            <h2> MEDICINE INVENTORY</h2>
          </div>
          
          <table class="table table-bordered  table-hover ">
            <thead class="table-dark">
              <tr>
                <th>Medicine ID</th>
                <th>Medicine Name</th>
                <th>Quantity Available</th>
                <th>Category</th>
                <th>Price</th>
                <th>Location in Store</th>
              </tr>
            </thead>
            <?php

            if ($search_result->num_rows > 0) {

              while ($row = $search_result->fetch_assoc()) {

                echo "<tr>";
                echo "<td>" . $row["medid"] . "</td>";
                echo "<td>" . $row["medname"] . "</td>";
                echo "<td>" . $row["medqty"] . "</td>";
                echo "<td>" . $row["medcategory"] . "</td>";
                echo "<td>" . $row["medprice"] . "</td>";
                echo "<td>" . $row["medlocation"] . "</td>";
                echo "</tr>";
              }
              echo "</table>";
            }

            $conn->close();
            ?>
          </table>



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