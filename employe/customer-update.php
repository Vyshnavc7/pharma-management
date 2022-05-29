<?php
include "config.php";

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$qry1 = "SELECT * FROM employee WHERE e_id='$id'";
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="css/style.css">

	<!-- endinject -->
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>
		UPDATE CUSTOMER
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
		<div class="container-fluid page-body-wrapper" style="padding-left: 0px;    background-color: #f4f7fa;">
			<!-- partial:partials/_sidebar.html -->
			<?php include('includes/leftbar.php'); ?>
			<!-- partial -->

			<div class="container">
				<div style="width: 100%;height: 60px;padding-top: 5px;" class="mt-3 text-center">
					<h2> UPDATE CUSTOMER DETAILS</h2>
				</div>

				<div class="form-group ">
					<?php

					include "config.php";

					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$qry1 = "SELECT * FROM customer WHERE c_id='$id'";
						$result = $conn->query($qry1);
						$row = $result->fetch_row();
					}

					if (isset($_POST['update'])) {
						$id = $_POST['cid'];
						$fname = $_POST['cfname'];
						$lname = $_POST['clname'];
						$age = $_POST['age'];
						$sex = $_POST['sex'];
						$phno = $_POST['phno'];
						$mail = $_POST['emid'];

						$sql = "UPDATE customer SET c_fname='$fname',c_lname='$lname',c_age='$age',c_sex='$sex',c_phno='$phno',c_mail='$mail' where c_id='$id'";
						if ($conn->query($sql))
							header("location:customer-view.php");
						else
							echo "<p style='font-size:8; color:red;'>Error! Unable to update.</p>";
					}

					?>
					<form style="border: 3px solid #ccc;border-radius: 10px;padding: 29px;background-color: #f2f2f2;" class="m-4" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
						<div style="float: left;width: 50%;" class="column">
							<p>
								<label for="cid">Customer ID:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="cid" value="<?php echo $row[0]; ?>" readonly>
							</p>
							<p>
								<label for="cfname">First Name:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="cfname" value="<?php echo $row[1]; ?>">
							</p>
							<p>
								<label for="clname">Last Name:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="clname" value="<?php echo $row[2]; ?>">
							</p>
							<p>
								<label for="age">Age:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="age" value="<?php echo $row[3]; ?>">
							</p>

						</div>
						<div style="float: left;width: 50%;" class="column">


							<p>
								<label for="sex">Sex: </label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="sex" value="<?php echo $row[4]; ?>">
							</p>
							<p>
								<label for="phno">Phone Number: </label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="phno" value="<?php echo $row[5]; ?>">
							</p>
							<p>
								<label for="emid">Email ID:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="emid" value="<?php echo $row[6]; ?>">
							</p>
						</div>

						<input style="height: 48px;width: 40%;margin-top: 33px;" class="btn btn-primary" type="submit" name="update" value="Update">

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