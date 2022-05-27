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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div style="background-color: #000000;" class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a style="color:  white;" class="navbar-brand brand-logo" href="#">PHARMA</a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <strong>
        <a href="index.php"><p class="mb-0 font-weight-normal float-left dropdown-header"> PHARMACIST DASHBOARD</p></a>
        </strong>


        <ul class="navbar-nav navbar-nav-right">


          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>

            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item">
                <i class="icon-head"></i> Profile
              </a>
              <a href="logout.php" class="dropdown-item preview-item">
                <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav style="background-color: #000000;" class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="images/faces/pharm1.png">
          </div>
          <div class="user-name">
            Pharma Management
          </div>
          <div class="user-designation">
          PHARMACIST
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" href="index.php">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" href="sales-view.php">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">View Inventory</span>
            </a>
          </li>
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" href="salesitems-view.php">
              <i class="icon-pie-graph menu-icon"></i>
              <span class="menu-title">Sold Products Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" href="pos1.php">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Add New Sale</span>
            </a>
          </li>
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" href="expiryreport.php">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Medicine Expiry</span>
            </a>
          </li>

          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">CUSTOMERS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="stockreport.php">ADD NEW </a></li>
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="expiryreport.php"> VIEW THEM </a></li>
                

              </ul>
            </div>

          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>

            </div>
          </div>
          <div class="row mt-3">
		  <div class="container">
				<div style="width: 100%;height: 60px;padding-top: 5px;" class="mt-3 text-center">
					<h2> SUPPLIERS LIST</h2>
				</div>

				<table class="table table-bordered  table-hover">
					<thead class="table-dark">
						<tr>
							<th>Supplier ID</th>
							<th>Company Name</th>
							<th>Address</th>
							<th>Phone Number</th>
							<th>Email Address</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php

					include "config.php";
					$sql = "SELECT sup_id,sup_name,sup_add,sup_phno,sup_mail FROM suppliers";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {

						while ($row = $result->fetch_assoc()) {

							echo "<tr>";
							echo "<td>" . $row["sup_id"] . "</td>";
							echo "<td>" . $row["sup_name"] . "</td>";
							echo "<td>" . $row["sup_add"] . "</td>";
							echo "<td>" . $row["sup_phno"] . "</td>";
							echo "<td>" . $row["sup_mail"] . "</td>";
							echo "<td align=center>";
							echo "<a class='btn btn-primary mr-2' href=supplier-update.php?id=" . $row['sup_id'] . ">Edit</a>";
							echo "<a class='btn btn-danger ml-2' href=supplier-delete.php?id=" . $row['sup_id'] . ">Delete</a>";
							echo "</td>";
							echo "</tr>";
						}
						echo "</table>";
					}

					$conn->close();

					?>
				</table>




			</div>
            

            

          </div>


          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between ">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Pharma
              2022</span>

          </div>
        </footer>
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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>