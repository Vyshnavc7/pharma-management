<?php

if (isset($_POST['search'])) {

	$search = $_POST['valuetosearch'];
	$query = "SELECT c_id, c_fname,c_lname,c_phno FROM `customer` 
			WHERE CONCAT(c_id, c_fname,c_lname,c_phno) LIKE '%" . $search . "%';";
	$search_result = filtertable($query);
} else {
	$query = "SELECT c_id, c_fname,c_lname,c_phno FROM `customer`";
	$search_result = filtertable($query);
}

function filtertable($query)
{
	$conn = mysqli_connect("localhost", "root", "", "pharmacy");
	$filter_result = mysqli_query($conn, $query);
	return $filter_result;
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
		CUSTOMER DETAILS
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
				<div class="col-sm-12 mb-4 mb-xl-0 mt-4">

					<h4 class=" text-dark">Hi, <?php echo $ename; ?></h4>
					<a href="logout1.php">Logout(signed in as <?php echo $ename; ?>)</a>
				</div>
				<div style="width: 100%;height: 60px;padding-top: 5px; " class="mt-3 text-center">
					<h2>CUSTOMERS LIST</h2>
				</div>
				<form class="form-group m-4 " method="post">
				<div class="input-group rounded m-4" style="width: 50%;">
					<input  type="text" name="valuetosearch" class="form-control rounded" placeholder="Enter any value to Search"  />
					<input class="btn btn-primary m-2" type="submit" name="search" value="Search">
				</div>
				</form>
				<!-- <form class="form-group" method="post">
					<input type="text" name="valuetosearch" placeholder="Enter any value to Search" style="width:400px; margin-left:250px;">&nbsp;&nbsp;&nbsp;
					<input class="btn btn-primary" type="submit" name="search" value="Search">
					<br><br>
				</form> -->

				<table class="table table-bordered  table-hover">
					<thead class="table-dark">
						<tr>
							<th>Customer ID</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Phone Number</th>
							<th></th>
						</tr>
					</thead>
					<?php

					if ($search_result->num_rows > 0) {
						while ($row = $search_result->fetch_assoc()) {

							echo "<tr>";
							echo "<td>" . $row["c_id"] . "</td>";
							echo "<td>" . $row["c_fname"] . "</td>";
							echo "<td>" . $row["c_lname"] . "</td>";
							echo "<td>" . $row["c_phno"] . "</td>";
							echo "<td";
							echo "<a class='btn btn-primary m-3' href=customer-update.php?id=" . $row['c_id'] . ">Edit</a>";
							
							echo "</td>";
							echo "</tr>";
						}
						echo "</table>";
					}else{
						
						echo "<td>0";
						echo "<td>No such record/Customer";
						echo "<td>0";
						echo "<td>0";
					}

					$conn->close();
					?>
					
			</div>


		</div>

	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


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

</html>