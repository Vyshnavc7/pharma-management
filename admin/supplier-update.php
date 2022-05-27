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
		UPDATE SUPPLIER
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
					<form style="border: 3px solid #ccc;border-radius: 10px;padding: 29px;background-color: #f2f2f2;" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
						<div class="column">
							<p>
								<label for="sid">Supplier ID:</label><br>
								<input style="width: 80%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" class="form-control" type="number" name="sid" value="<?php echo $row[0]; ?>" readonly>
							</p>
							<p>
								<label for="sname">Supplier Company Name:</label><br>
								<input style="width: 80%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" class="form-control" type="text" name="sname" value="<?php echo $row[1]; ?>">
							</p>
							<p>
								<label for="sadd">Address:</label><br>
								<input style="width: 80%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" class="form-control" type="text" name="sadd" value="<?php echo $row[2]; ?>">
							</p>


						</div>
						<div class="column">
							<p>
								<label for="sphno">Phone Number:</label><br>
								<input style="width: 80%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" class="form-control" type="number" name="sphno" value="<?php echo $row[3]; ?>">
							</p>

							<p>
								<label for="smail">Email Address </label><br>
								<input style="width: 80%;padding: 7px;border: 3px solid #ccc;border-radius: 4px;" class="form-control" type="text" name="smail" value="<?php echo $row[4]; ?>">
							</p>

						</div>


						<input class="btn btn-primary" type="submit" name="update" value="Update">
					</form>
				</div>
				<?php
				if (isset($_POST['update'])) {
					$id = $_POST['sid'];
					$name = $_POST['sname'];
					$add = $_POST['sadd'];
					$phno = $_POST['sphno'];
					$mail = $_POST['smail'];

					$sql = "UPDATE suppliers SET sup_name='$name',sup_add='$add',sup_phno='$phno',sup_mail='$mail' where sup_id='$id'";
					if ($conn->query($sql))
						header("location:supplier-view.php");
					else
						echo "<p style='font-size:8; color:red;'>Error! Unable to update.</p>";
				}

				?>


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