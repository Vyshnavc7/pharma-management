<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>getMED Pharmacy</title>
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
		New Sales
	</title>
</head>

<body>
<?php
error_reporting(0);
include "config.php";
session_start();
// to retrieve data frm base using session details
$sql1 = "SELECT c_username from cuslogin WHERE c_ID='$_SESSION[user]'";
$sql2 = "SELECT c_id from cuslogin WHERE c_id='$_SESSION[user]'";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$row1 = $result1->fetch_row();
$row2 = $result2->fetch_row();
$cname = $row1[0];
$cid1 = $row2[0];

?>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<?php include('includes/header.php'); ?>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper" style="padding-left: 0px;    background-color: #f4f7fa;">
			<!-- partial:partials/_sidebar.html -->
			<?php include('includes/leftbar.php'); ?>
			<!-- partial -->

			<div class="container">
				<div style="width: 100%;height: 100px;padding-top: 34px;" class="mt-3 text-center">
					<h2> POINT OF SALE</h2>
				</div>
				<div class="form1">
					<form class="form-group" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
						<center>

							<select style="width: 35%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" class="form-select" id="cid" name="cid">
								<option value="0" selected="selected">*Select Customer ID (only once for a customer's sales)</option>
								<?php

								include "config.php";
								$qry = "SELECT c_id,c_fname FROM customer";
							
								$result = $conn->query($qry);
							
								
								echo mysqli_error($conn);
								if ($result->num_rows > 0 ) {
									while ($row = $result->fetch_assoc()) {
										echo "<option>" . $row["c_id"]  . " : " . $row["c_fname"]. "</option>";
									}
								}
								?>

							</select>
							&nbsp;&nbsp;
							<input class="btn btn-primary" type="submit" name="custadd" value="Add to Proceed.">

						</center>
					</form>




					<?php

					if (isset($_GET['sid'])) {
						$sid = $_GET['sid'];
					}

					if (isset($_POST['cid']))
						$cid = $_POST['cid'];

					if (isset($_POST['custadd'])) {

						$qry2 = "INSERT INTO sales(c_id,e_id) VALUES ('$cid','$_SESSION[user]')";
						if (!($result2 = $conn->query($qry2))) {
							echo "<p style='font-size:8; color:red;'>Invalid! Enter valid Customer ID to record Sales.</p>";
						}
					}


					?>
				</div>

				<div class="form-group">
					<center>
						<form method="post">
							<select style="width: 35%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" class="form-select" id="med" name="med">
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
							<input style="margin-top: -5px;width: 143px;height: 42px;" class="btn btn-primary" type="submit" name="search" value="Search">
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
						<form style="border-radius: 18px;padding: 29px;background-color: #f2f2f2;" class="form-group" method="post">
							<div style="float: left;width: 50%;" class="column">

								<label for="medid">Medicine ID:</label>
								<input style="width: 50%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" class="form-control" type="number" name="medid" value="<?php echo $row4[0]; ?>" readonly><br><br>

								<label for="mdname">Medicine Name:</label>
								<input class="form-control" style="width: 50%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="mdname" value="<?php echo $row4[1]; ?>" readonly><br><br>

								<label for="mprice">Price of One Unit:</label>
								<input style="width: 50%;" class="form-control" type="number" name="mprice" value="<?php echo $row4[4]; ?>" readonly><br><br>
								<label style="    padding-left: 479px;" for="mcqty">Quantity Required:</label>
							</div>
							<div style="float: left;width: 50%;" class="column">

								<label for="mcat">Category:</label>
								<input style="width: 50%;" class="form-control" type="text" name="mcat" value="<?php echo $row4[3]; ?>" readonly><br><br>

								<label for="mqty">Quantity Available:</label>
								<input style="width: 50%;" class="form-control" type="number" name="mqty" value="<?php echo $row4[2]; ?>" readonly><br><br>



							</div>
							<div style="float: left;width: 50%;" class="column">
								<label for="mloc">Location:</label>
								<input class="form-control" style="width: 50%;" type="text" name="mloc" value="<?php echo $row4[5]; ?>" readonly><br><br>




							</div>


							<input style="width: 51%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" class="form-control" type="number" name="mcqty">
							&nbsp;&nbsp;&nbsp;
							<input class="btn btn-primary mt-3" type="submit" name="add" value="Add Medicine">&nbsp;&nbsp;&nbsp;

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
									echo "<a class='btn btn-link' href=pos2.php?sid=" . $sid . ">View Order</a>";
									echo "</center>";
								}
							}
							?>
						</form>
					</center>
				</div>
				<?php include('includes/footerr.php'); ?>
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