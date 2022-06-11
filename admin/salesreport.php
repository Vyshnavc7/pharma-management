<?php
include "config.php";

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$qry1 = "SELECT * FROM suppliers WHERE sup_id='$id'";
	$result = $conn->query($qry1);
	$row = $result->fetch_row();
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
		Sales REPORT
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
					<h2> TRANSACTION DETAILS</h2>
				</div>

				<div class="form-group ">

					<form class=" m-4" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
						<p class="">
							<label for="start">Start Date:</label>
						</p>
						<p>
						<div style="width: 108%;" class="text-center  m-3">
							<input style="width: 50%; height: 56px;   border: double;" class="text-center form-control" type="date" name="start">
						</div>
						</p>

						<p>
							<label for="end">End Date:</label>
						</p>

						<p>
						<div style="width: 108%;" class="text-center  m-3">

							<input style="width: 50%; height: 56px;   border: double;" class="text-center form-control" type="date" name="end">
						</div>
						</p>

						<div style="width: 140%;" class="text-center float-right m-3">
							<input class="btn btn-primary m-4 " type="submit" name="submit" value="View Records">
						</div>
					</form>

				</div>
				<?php
				include "config.php";
				if (isset($_POST['submit'])) {

					$start = $_POST['start'];
					$end = $_POST['end'];
					$res = mysqli_query($conn, "SELECT P_AMT('$start','$end') AS PAMT") or die(mysqli_error($conn));
					while ($row = mysqli_fetch_array($res)) {
						$pamt = $row['PAMT'];
					}

					$res = mysqli_query($conn, "SELECT S_AMT('$start','$end') AS SAMT;") or die(mysqli_error($conn));
					while ($row = mysqli_fetch_array($res)) {
						$samt = $row['SAMT'];
					}

					$profit = $samt - $pamt;
					$profits = number_format($profit, 2);
				?>

					<table class="table table-bordered  table-hover " id="table1">
						<tr>
							<th class="table-dark">Purchase ID</th>
							<th class="table-dark">Supplier ID</th>
							<th class="table-dark">Medicine ID</th>

							<th class="table-dark">Quantity</th>
							<th class="table-dark">Date of Purchase</th>
							<th class="table-dark">Cost of Purchase(in Rs)</th>
						</tr>
						<?php
						$sql = "SELECT p_id,sup_id,med_id,p_qty,p_cost,pur_date FROM purchase WHERE pur_date >= '$start' AND pur_date <= '$end';";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {

							while ($row = $result->fetch_assoc()) {

								echo "<tr>";
								echo "<td>" . $row["p_id"] . "</td>";
								echo "<td>" . $row["sup_id"] . "</td>";
								echo "<td>" . $row["med_id"] . "</td>";
								echo "<td>" . $row["p_qty"] . "</td>";
								echo "<td>" . $row["pur_date"] . "</td>";
								echo "<td style='color: red;'>" . $row["p_cost"] . "</td>";

								echo "</tr>";
							}
						}

						echo "<tr>";
						echo "<td colspan=5>Total</td>";
						echo "<td >Rs." . $pamt . "</td>";
						echo "</tr>";
						echo "</table>";
						echo "</table>";
						?>


						<table class="table table-bordered  table-hover mt-4" id="table1">
							<tr>
								<th class="table-dark">Sale ID</th>
								<th class="table-dark">Customer ID</th>
								<th class="table-dark">Employee ID</th>
								<th class="table-dark">Date</th>
								<th class="table-dark">Sale Amount(in Rs)</th>
							</tr>

							<?php
							include "config.php";
							$sql = "SELECT sale_id, c_id,s_date,s_time,total_amt,e_id FROM sales WHERE s_date >= '$start' AND s_date <= '$end';";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {

								while ($row = $result->fetch_assoc()) {


									echo "<tr>";
									echo "<td>" . $row["sale_id"] . "</td>";
									echo "<td>" . $row["c_id"] . "</td>";
									echo "<td>" . $row["e_id"] . "</td>";
									echo "<td>" . $row["s_date"] . "</td>";
									echo "<td style='color: red;'>" . $row["total_amt"] . "</td>";

									echo "</tr>";
								}
								echo "<tr>";
								echo "<td colspan=4>Total</td>";
								echo "<td style='color: red;'>Rs." . $samt . "</td>";
								echo "</tr>";
								echo "</table>";
							}
							?>

							<table class="table mt-4" id="table1">
								<tr style="background-color: #f2f2f2;">
									<td>Transaction Amount </td>
									<td style="color: red;">Rs.<?php echo $profits;
															} ?></td>
								</tr>
							</table>


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