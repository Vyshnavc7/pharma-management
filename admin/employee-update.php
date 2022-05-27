<?php
		include "config.php";
		
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$qry1="SELECT * FROM employee WHERE e_id='$id'";
			$result = $conn->query($qry1);
			$row = $result -> fetch_row();
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
		Update Employee
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
					<h2> UPDATE EMPLOYEE DETAILS</h2>
				</div>

				<div class="form-group ">
					<form class="m-4" style="border: 3px solid #ccc;border-radius: 10px;padding: 29px;background-color: #f2f2f2;" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
						<div style="float: left;width: 50%;" class="column">
							<p>
								<label for="eid">Employee ID:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="eid" value="<?php echo $row[0]; ?>" readonly>
							</p>
							<p>
								<label for="efname">First Name:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="efname" value="<?php echo $row[1]; ?>">
							</p>
							<p>
								<label for="elname">Last Name:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="elname" value="<?php echo $row[2]; ?>">
							</p>
							<p>
								<label for="ebdate">Date of Birth:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="date" name="ebdate" value="<?php echo $row[3]; ?>">
							</p>
							<p>
								<label for="eage">Age:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="eage" value="<?php echo $row[4]; ?>">
							</p>
							<p>
								<label for="esex">Sex:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="esex" value="<?php echo $row[5]; ?>">
							</p>
						</div>
						<div style="float: left;width: 50%;" class="column">
							<p>
								<label for="etype">Employee Type:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="etype" value="<?php echo $row[6]; ?>">
							</p>
							<p>
								<label for="ejdate">Date of Joining:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="date" name="ejdate" value="<?php echo $row[7]; ?>">
							</p>
							<p>
								<label for="esal">Salary:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" step="0.01" name="esal" value="<?php echo $row[8]; ?>">
							</p>
							<p>
								<label for="ephno">Phone Number:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="number" name="ephno" value="<?php echo $row[9]; ?>">
							</p>

							<p>
								<label for="e_mail">Email ID:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="e_mail" value="<?php echo $row[10]; ?>">
							</p>
							<p>
								<label for="eadd">Address:</label><br>
								<input style="width: 80%;padding: 12px;border: 3px solid #ccc;border-radius: 4px;" type="text" name="eadd" value="<?php echo $row[11]; ?>">
							</p>

						</div>


						<input class="btn btn-primary" type="submit" name="update" value="Update">
					</form>

					<?php
					if (isset($_POST['update'])) {
						$id = mysqli_real_escape_string($conn, $_REQUEST['eid']);
						$fname = mysqli_real_escape_string($conn, $_REQUEST['efname']);
						$lname = mysqli_real_escape_string($conn, $_REQUEST['elname']);
						$bdate = mysqli_real_escape_string($conn, $_REQUEST['ebdate']);
						$age = mysqli_real_escape_string($conn, $_REQUEST['eage']);
						$sex = mysqli_real_escape_string($conn, $_REQUEST['esex']);
						$etype = mysqli_real_escape_string($conn, $_REQUEST['etype']);
						$jdate = mysqli_real_escape_string($conn, $_REQUEST['ejdate']);
						$sal = mysqli_real_escape_string($conn, $_REQUEST['esal']);
						$phno = mysqli_real_escape_string($conn, $_REQUEST['ephno']);
						$mail = mysqli_real_escape_string($conn, $_REQUEST['e_mail']);
						$add = mysqli_real_escape_string($conn, $_REQUEST['eadd']);

						$sql = "UPDATE employee SET e_fname='$fname',e_lname='$lname',bdate='$bdate',e_age='$age',e_sex='$sex',e_type='$etype',e_jdate='$jdate',e_sal='$sal',e_phno='$phno',e_mail='$mail',e_add='$add' where e_id='$id'";

						if ($conn->query($sql))
							header("location:employee-view.php");
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