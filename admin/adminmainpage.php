<!DOCTYPE html>
<html>

<head>
	<!-- <link rel="stylesheet" type="text/css" href="nav2.css"> -->
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>
		Phrama | Admin Dashboard
	</title>
</head>

<body>
	<?php include('includes/mainheader.php'); ?>
	<?php include('includes/navbar.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				
				<center>
					<div class="head">
						<h2> ADMIN DASHBOARD </h2>
					</div>
				</center>

				<a href="pos1.php" title="Add New Sale">
					<img src="carticon1.png" style="padding:8px;margin-left:450px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Add New Sale">
				</a>

				<a href="inventory-view.php" title="View Inventory">
					<img src="inventory.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Inventory">
				</a>

				<a href="employee-view.php" title="View Employees">
					<img src="emp.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Employees List">
				</a>
				<br>
				<a href="salesreport.php" title="View Transactions">
					<img src="moneyicon.png" style="padding:8px;margin-left:550px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Transactions List">
				</a>

				<a href="stockreport.php" title="Low Stock Alert">
					<img src="alert.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Low Stock Report">
				</a>
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



</html>