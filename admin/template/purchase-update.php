<?php
include "config.php";

if (isset($_GET['pid']) && isset($_GET['sid']) && isset($_GET['mid'])) {
	$pid = $_GET['pid'];
	$sid = $_GET['sid'];
	$mid = $_GET['mid'];
	$qry1 = "SELECT * FROM purchase WHERE p_id='$pid' and sup_id='$sid' and med_id='$mid'";
	$result = $conn->query($qry1);
	$row = $result->fetch_row();
}

if (isset($_POST['update'])) {
	$pid = $_POST['pid'];
	$sid = $_POST['sid'];
	$mid = $_POST['mid'];
	$qty = $_POST['pqty'];
	$cost = $_POST['pcost'];
	$pdate = $_POST['pdate'];
	$mdate = $_POST['mdate'];
	$edate = $_POST['edate'];

	$sql = "UPDATE purchase SET p_cost='$cost',p_qty='$qty',pur_date='$pdate',mfg_date='$mdate',exp_date='$edate' 
				where p_id='$pid' and sup_id='$sid' and med_id='$mid'";
	if ($conn->query($sql))
		header("location:purchase-view.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Pharma Admin</title>
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
		New Sales
	</title>
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div style="background-color: #3b3a3a;" class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
				<a style="color:  white;" class="navbar-brand brand-logo" href="#">PHARMA</a>
				<a class="navbar-brand brand-logo-mini" href="#"><img src="images/logo-mini.svg" alt="logo" /></a>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
				<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
					<span class="icon-menu"></span>
				</button>
				<strong>
					<p class="mb-0 font-weight-normal float-left dropdown-header"> ADMIN DASHBOARD</p>
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
			<nav style="background-color: #3b3a3a;margin-left: -15px;" class="sidebar sidebar-offcanvas" id="sidebar">
				<div class="user-profile">
					<div class="user-image">
						<img src="images/faces/pharm1.png">
					</div>
					<div class="user-name">
						Pharma Management
					</div>
					<div class="user-designation">
						Admin
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
						<a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
							<i class="icon-disc menu-icon"></i>
							<span class="menu-title">Inventory</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="ui-basic">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="inventory-add.php">Add New Medicine</a></li>
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="inventory-view.php">Manage Inventory</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
							<i class="icon-disc menu-icon"></i>
							<span class="menu-title">Suppliers</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="ui-basic">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="supplier-add.php">Add New Supplier</a></li>
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="supplier-view.php">Manage Suppliers</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
							<i class="icon-disc menu-icon"></i>
							<span class="menu-title">Stock Purchase</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="ui-basic">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/buttons.html">Add New Purchase</a></li>
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/typography.html">Manage Purchase</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
							<i class="icon-disc menu-icon"></i>
							<span class="menu-title">Employees</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="ui-basic">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/buttons.html">Add New Employees</a></li>
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/typography.html">Manage Employees</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
							<i class="icon-disc menu-icon"></i>
							<span class="menu-title">Customers</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="ui-basic">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/buttons.html">Add New Customers</a></li>
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/typography.html">Manage Customers</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a style="border-top: solid;" class="nav-link" href="sales-view.php">
							<i class="icon-file menu-icon"></i>
							<span class="menu-title">Sales Invoice Details</span>
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
						<a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
							<i class="icon-head menu-icon"></i>
							<span class="menu-title">Reports</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="auth">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/samples/login.html">Medicine:Low stock </a></li>
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/samples/login-2.html"> Medicine Expiry </a></li>
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/samples/register.html"> Transaction Report </a></li>

							</ul>
						</div>

					</li>
				</ul>
			</nav>
			<!-- partial -->

			<div class="container">
				<div style="width: 100%;height: 60px;padding-top: 5px;" class="mt-3 text-center">
					<h2> UPDATE SUPPLIER DETAILS</h2>
				</div>

				<div class="form-group ">
					<form class="m-4" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
						<div style="float: left;width: 50%;" class="column">
							<p>
								<label for="pid">Purchase ID:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="pid" value="<?php echo $row[0]; ?>" readonly>
							</p>
							<p>
								<label for="sid">Supplier ID:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="sid" value="<?php echo $row[1]; ?>" readonly>
							</p>
							<p>
								<label for="mid">Medicine ID:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="mid" value="<?php echo $row[2]; ?>" readonly>
							</p>
							<p>
								<label for="pqty">Purchase Quantity:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="pqty" value="<?php echo $row[3]; ?>">
							</p>
						</div>

						<div style="float: left;width: 50%;" class="column">
							<p>
								<label for="pcost">Purchase Cost:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" step="0.01" name="pcost" value="<?php echo $row[4]; ?>">
							</p>


							<p>
								<label for="pdate">Date of Purchase:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="date" name="pdate" value="<?php echo $row[5]; ?>">
							</p>
							<p>
								<label for="mdate">Manufacturing Date:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="date" name="mdate" value="<?php echo $row[6]; ?>">
							</p>
							<p>
								<label for="edate">Expiry Date:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="date" name="edate" value="<?php echo $row[7]; ?>">
							</p>
						</div>

						<input class="btn btn-primary" type="submit" name="update" value="Update">
					</form>


				</div>


			</div>

		</div>








		<div class="one row" style="margin-right:160px;">

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