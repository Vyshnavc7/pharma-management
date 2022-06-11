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
	<title>getMED Admin</title>
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
		UPDATE PURCHASE
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
					<h2> UPDATE SUPPLIER DETAILS</h2>
				</div>

				<div class="form-group ">
					<form style="border: 3px solid #ccc;border-radius: 10px;padding: 29px;background-color: #f2f2f2;" class="m-4" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
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