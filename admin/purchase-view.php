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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>
		PURCHASE LIST
	</title>
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<?php include('includes/mainheader.php'); ?>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper"style="padding-left: 0px;">
			<!-- partial:partials/_sidebar.html -->
			<?php include('includes/leftbar.php'); ?>
			<!-- partial -->

			<div class="container">
				<div style="width: 100%;height: 60px;padding-top: 5px;" class="mt-3 text-center">
					<h2> STOCK PURCHASE LIST</h2>
				</div>

				<table class="table table-bordered table-responsive  table-hover">
					<thead class="table-dark">
						<tr>
							<th>Purchase ID</th>
							<th>Supplier ID</th>
							<th>Medicine ID</th>
							<th>Medicine Name</th>
							<th>Quantity</th>
							<th>Cost of Purchase</th>
							<th>Date of Purchase</th>
							<th>Manufacturing Date</th>
							<th>Expiry Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php

					include "config.php";
					$sql = "SELECT p_id,sup_id,med_id,p_qty,p_cost,pur_date,mfg_date,exp_date FROM purchase";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {

						while ($row = $result->fetch_assoc()) {

							$sql1 = "SELECT med_name from meds where med_id=" . $row["med_id"] . "";
							$result1 = $conn->query($sql1);

							while ($row1 = $result1->fetch_assoc()) {

								echo "<tr>";
								echo "<td>" . $row["p_id"] . "</td>";
								echo "<td>" . $row["sup_id"] . "</td>";
								echo "<td>" . $row["med_id"] . "</td>";
								echo "<td>" . $row1["med_name"] . "</td>";
								echo "<td>" . $row["p_qty"] . "</td>";
								echo "<td>" . $row["p_cost"] . "</td>";
								echo "<td>" . $row["pur_date"] . "</td>";
								echo "<td>" . $row["mfg_date"] . "</td>";
								echo "<td>" . $row["exp_date"] . "</td>";
								echo "<td align:center>";
								echo "<a class='btn btn-primary mt-2' href=purchase-update.php?pid=" . $row['p_id'] . "&sid=" . $row['sup_id'] . "&mid=" . $row['med_id'] . ">Edit</a>";
								echo "<a class='btn btn-danger mt-2' href=purchase-delete.php?pid=" . $row['p_id'] . "&sid=" . $row['sup_id'] . "&mid=" . $row['med_id'] . ">Delete</a>";
								echo "</td>";
								echo "</tr>";
							}
						}
						echo "</table>";
					}
					$conn->close();

					?>

					<?php
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
						if (!($conn->query($sql)))
							echo "<p style='font-size:8; color:red;'>Error! Unable to update.</p>";
					}
					?>
				</table>

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