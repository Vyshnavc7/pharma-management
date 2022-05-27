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
		INVENTORY
	</title>
</head>

<body>
	<?php

	include "config.php";
	session_start();

	$sql = "SELECT E_FNAME from EMPLOYEE WHERE E_ID='$_SESSION[user]'";
	$result = $conn->query($sql);
	$row = $result->fetch_row();

	$ename = $row[0];

	?>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<?php include('includes/header.php'); ?>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper" style="padding-left: 0px;">
			<!-- partial:partials/_sidebar.html -->
			<?php include('includes/leftbar.php'); ?>
			<!-- partial -->

			<div class="container">
				<div style="width: 100%;height: 60px;padding-top: 5px;" class="mt-3 text-center">
					<h2> SALES INNOVACE</h2>
				</div>

				<table class="table table-bordered  table-hover ">
					<thead class="table-dark">
						<tr>
							<th>Medicine ID</th>
							<th>Medicine Name</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Total Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php

					include "config.php";

					if (isset($_GET['sid'])) {
						$sid = $_GET['sid'];
					}

					if (empty($sid)) {
						$sql = "SHOW TABLE STATUS LIKE 'sales'";

						if (!$result = $conn->query($sql)) {
							die('There was an error running the query [' . $conn->error . ']');
						}
						$row = $result->fetch_assoc();
						$sid = $row['Auto_increment'] - 1;
					}

					if (!empty($sid)) {
						$qry1 = "SELECT med_id,sale_qty,tot_price FROM sales_items where sale_id=$sid";
						$result1 = $conn->query($qry1);
						$sum = 0;

						if ($result1->num_rows > 0) {

							while ($row1 = $result1->fetch_assoc()) {

								$medid = $row1["med_id"];
								$qry2 = "SELECT med_name,med_price FROM meds where med_id=$medid";
								$result2 = $conn->query($qry2);
								$row2 = $result2->fetch_row();

								echo "<tr>";
								echo "<td>" . $row1["med_id"] . "</td>";
								echo "<td>" . $row2[0] . "</td>";
								echo "<td>" . $row1["sale_qty"] . "</td>";
								echo "<td>" . $row2[1] . "</td>";
								echo "<td>" . $row1["tot_price"] . "</td>";
								echo "<td align=center>";
								echo "<a name='delete' class='button1 del-btn' href=pos-delete.php?mid=" . $row1['med_id'] . "&slid=" . $sid . ">Delete</a>";
								echo "</td>";
								echo "</tr>";
							}

							echo "</table>";
						}
					}
					?>
				</table>
				<div class="one" style="background-color:white;">
					<form method=post>
						<a name='pos1' class='button1 view-btn' href=pos1.php?sid=".$sid.">Go Back to Sales Page</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<input class="float-right btn btn-primary" type='submit' name='custadd' value='Complete Order'><br>
					</form>
				</div>
				<?php

				if (isset($_POST['custadd'])) {

					$res = mysqli_query($conn, "SET @p0=$sid;");
					$res = mysqli_query($conn, "CALL `TOTAL_AMT`(@p0,@p1);") or die(mysqli_error($conn));
					$res = mysqli_query($conn, "SELECT @p1 as TOTAL;");

					while ($row3 = mysqli_fetch_array($res)) {
						$tot = $row3['TOTAL'];
					}

					echo "<div style='text-align: -webkit-center;' class='tabl m-4'>
					<table id='table1'>
					<tr style='background-color: #f2f2f2;'>
					<td>Total</td>
					<td>";
					echo $tot;
					echo "</td>
					</tr>
					</table></div>";
				}

				?>


				
			</div>
			

		</div>
		<?php include('includes/footerr.php'); ?>
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