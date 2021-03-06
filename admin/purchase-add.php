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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>
		PURCHASE ADD
	</title>
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<?php include('includes/mainheader.php'); ?>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper" style="padding-left: 0px;">
			<!-- partial:partials/_sidebar.html -->
			<?php include('includes/leftbar.php'); ?>
			<!-- partial -->

			<div class="container">
				<div style="width: 100%;height: 60px;padding-top: 5px;" class="mt-3 text-center">
					<h2> ADD PURCHASE DETAILS</h2>
				</div>

				<div class="form-group ">


					<form style="height: 500px;border-radius: 10px;padding: 29px;background-color: #f2f2f2;" class="m-4" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

						<?php

						include "config.php";

						if (isset($_POST['add'])) {
							$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
							$sid = mysqli_real_escape_string($conn, $_REQUEST['sid']);
							$mid = mysqli_real_escape_string($conn, $_REQUEST['mid']);
							$qty = mysqli_real_escape_string($conn, $_REQUEST['pqty']);
							$cost = mysqli_real_escape_string($conn, $_REQUEST['pcost']);
							$pdate = mysqli_real_escape_string($conn, $_REQUEST['pdate']);
							$mdate = mysqli_real_escape_string($conn, $_REQUEST['mdate']);
							$edate = mysqli_real_escape_string($conn, $_REQUEST['edate']);

							$sql = "INSERT INTO purchase VALUES ($pid, $sid, $mid,'$qty','$cost','$pdate','$mdate','$edate')";
							if (mysqli_query($conn, $sql)) {
								echo "<p style='font-size:8;'>Purchase details successfully added!</p>";
							} else {
								echo "<p style='font-size:8;color:red;'>Error! Check details of Med ID or Sup ID.</p>";
							}
						}

						$conn->close();
						?>



						<div style="float: left;width: 45%;" class="column">

							<p>
								<label for="pid">Purchase ID:</label><br>
								<input class="form-control" style="width: 50%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="pid" required>
							</p>


							<p>
								<label for="pid">Supplier ID:</label><br>
								<input class="form-control" style="width: 50%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="sid" required>
							</p>


							<p>
								<label for="mid">Medicine ID:</label><br>
								<input class="form-control" style="width: 50%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="mid" required>
							</p>
							<p>
								<label for="pqty">Purchase Quantity:</label><br>
								<input class="form-control" style="width: 50%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="pqty" required>
							</p>


						</div>
						<div style="float: left;width: 39%;margin-left: -135px;" class="column mt-4">
							<?php

							include "config.php";
							$qry = "SELECT sup_id,sup_name FROM suppliers";


							$result = $conn->query($qry);
							echo mysqli_error($conn);
							echo "<h6> Choose The Suppier ID and will the Space </h6>";
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {

									echo "<option> ID : " . $row["sup_id"] ."  | "."  Name : " . $row["sup_name"] . "</option>";
								}
							}

							?>

							<select style="width: 80%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" class="mt-3 form-select" id="med" name="med">
								<option value="0" selected="selected">Check the Medicine ID</option>

								<?php
								$qry3 = "SELECT med_name,med_id FROM meds";
								$result3 = $conn->query($qry3);
								echo mysqli_error($conn);
								if ($result3->num_rows > 0) {
									while ($row4 = $result3->fetch_assoc()) {

										echo "<option> ID : " . $row4["med_name"] ."   "."Name : ".$row4["med_id"]. "</option>";
										$view = $row4['med_id'];
									}
								}
								echo "<p value ='.$view.'> </p>";
								?>

							</select>


						</div>
						<div style="float: right;width: 45%;margin-right: -158px;" class="column">

							<p>
								<label for="pcost">Purchase Cost:</label><br>
								<input class="form-control" style="width: 50%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" type="number" step="0.01" name="pcost" required>
							</p>


							<p>
								<label for="pdate">Date of Purchase:</label><br>
								<input class="form-control" style="width: 50%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" type="date" name="pdate" required>
							</p>
							<p>
								<label for="mdate">Manufacturing Date:</label><br>
								<input class="form-control" style="width: 50%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" type="date" name="mdate" required>
							</p>
							<p>
								<label for="edate">Expiry Date:</label><br>
								<input class="form-control" style="width: 50%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" type="date" name="edate" required>
							</p>
							<inpuT class="btn btn-primary" type="submit" name="add" value="Add Purchase">
						</div>





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