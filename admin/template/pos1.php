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
	<!-- endinject -->
	<link rel="shortcut icon" href="images/favicon.png" />


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
			<nav style="background-color: #3b3a3a;" class="sidebar sidebar-offcanvas" id="sidebar">
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
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/buttons.html">Add New Medicine</a></li>
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/typography.html">Manage Inventory</a></li>
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
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/buttons.html">Add New Supplier</a></li>
								<li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/typography.html">Manage Suppliers</a></li>
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
						<a style="border-top: solid;" class="nav-link" href="pages/forms/basic_elements.html">
							<i class="icon-file menu-icon"></i>
							<span class="menu-title">Sales Invoice Details</span>
						</a>
					</li>
					<li class="nav-item">
						<a style="border-top: solid;" class="nav-link" href="pages/charts/chartjs.html">
							<i class="icon-pie-graph menu-icon"></i>
							<span class="menu-title">Sold Products Details</span>
						</a>
					</li>
					<li class="nav-item">
						<a style="border-top: solid;" class="nav-link" href="pages/tables/basic-table.html">
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
				<div style="width: 100%;height: 100px;padding-top: 34px;" class="mt-3 text-center">
					<h2> POINT OF SALE</h2>
				</div>
				<div class="form1">
					<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
						<center>

							<select id="cid" name="cid">
								<option value="0" selected="selected">*Select Customer ID (only once for a customer's sales)</option>


								<?php

								include "config.php";
								$qry = "SELECT c_id FROM customer";
								$result = $conn->query($qry);
								echo mysqli_error($conn);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo "<option>" . $row["c_id"] . "</option>";
									}
								}
								?>

							</select>
							&nbsp;&nbsp;
							<input type="submit" name="custadd" value="Add to Proceed.">
						</center>
					</form>

					<?php

					session_start();

					$qry1 = "SELECT id from admin where a_username='$_SESSION[user]'";
					$result1 = $conn->query($qry1);
					$row1 = $result1->fetch_row();
					$eid = $row1[0];

					if (isset($_GET['sid'])) {
						$sid = $_GET['sid'];
					}

					if (isset($_POST['cid']))
						$cid = $_POST['cid'];

					if (isset($_POST['custadd'])) {

						$qry2 = "INSERT INTO sales(c_id,e_id) VALUES ('$cid','$eid')";
						if (!($result2 = $conn->query($qry2))) {
							echo "<p style='font-size:8; color:red;'>Invalid! Enter valid Customer ID to record Sales.</p>";
						}
					}
					?>
				</div>

				<div class="form2">
					<center>
						<form method="post">
							<select id="med" name="med">
								<option value="0" selected="selected">Select Medicine</option>


								<?php
								$qry3 = "SELECT med_name FROM meds";
								$result3 = $conn->query($qry3);
								echo mysqli_error($conn);
								if ($result3->num_rows > 0) {
									while ($row4 = $result3->fetch_assoc()) {

										echo "<option>" . $row4["med_name"] . "</option>";
									}
								}
								?>

							</select>
							&nbsp;&nbsp;
							<input type="submit" name="search" value="Search">
						</form>
					</center>
				</div>
				<?php

				if (isset($_POST['search']) && !empty($_POST['med'])) {

					$med = $_POST['med'];
					$qry4 = "SELECT * FROM meds where med_name='$med'";
					$result4 = $conn->query($qry4);
					$row4 = $result4->fetch_row();
				}
				?>

				<div class="form3">
					<center>
					<form method="post">
						<div class="column">

							<label for="medid">Medicine ID:</label>
							<input type="number" name="medid" value="<?php echo $row4[0]; ?>" readonly><br><br>

							<label for="mdname">Medicine Name:</label>
							<input type="text" name="mdname" value="<?php echo $row4[1]; ?>" readonly><br><br>

						</div>
						<div class="column">

							<label for="mcat">Category:</label>
							<input type="text" name="mcat" value="<?php echo $row4[3]; ?>" readonly><br><br>

							<label for="mloc">Location:</label>
							<input type="text" name="mloc" value="<?php echo $row4[5]; ?>" readonly><br><br>

						</div>
						<div class="column">

							<label for="mqty">Quantity Available:</label>
							<input type="number" name="mqty" value="<?php echo $row4[2]; ?>" readonly><br><br>

							<label for="mprice">Price of One Unit:</label>
							<input type="number" name="mprice" value="<?php echo $row4[4]; ?>" readonly><br><br>

						</div>
						<label for="mcqty">Quantity Required:</label>
						<input type="number" name="mcqty">
						&nbsp;&nbsp;&nbsp;
						<input type="submit" name="add" value="Add Medicine">&nbsp;&nbsp;&nbsp;

						<?php

						if (isset($_POST['add'])) {

							$qry5 = "select sale_id from sales ORDER BY sale_id DESC LIMIT 1";
							$result5 = $conn->query($qry5);
							$row5 = $result5->fetch_row();
							$sid = $row5[0];
							echo mysqli_error($conn);

							$mid = $_POST['medid'];
							$aqty = $_POST['mqty'];
							$qty = $_POST['mcqty'];

							if ($qty > $aqty || $qty == 0) {
								echo "QUANTITY INVALID!";
							} else {
								$price = $_POST['mprice'] * $qty;
								$qry6 = "INSERT INTO sales_items(`sale_id`,`med_id`,`sale_qty`,`tot_price`) VALUES($sid,$mid,$qty,$price)";
								$result6 = mysqli_query($conn, $qry6);
								echo mysqli_error($conn);

								echo "<br><br> <center>";
								echo "<a class='button1 view-btn' href=pos2.php?sid=" . $sid . ">View Order</a>";
								echo "</center>";
							}
						}
						?>
					</form>
					</center>
				</div>
			</div>


		</div>

	</div>








	<div class="one row" style="margin-right:160px;">

	</div>
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