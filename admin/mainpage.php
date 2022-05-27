<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="css/login1.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<head>


	<title>
		Pharma | Admin Login
	</title>
</head>

<body>
	<?php include('includes/header.php'); ?>

	<div class="container mt-3">
		<form class="text-center " method="post" action="">
			<div class="mt-5" style="width: 40%;" id="div_login">
				<h1 class="text-center">Admin Login</h1>
				<center>
					<div>
						<input type="text" class="textbox" id="uname" name="uname" placeholder="Username" />
					</div>
					<div>
						<input type="password" class="textbox" id="pwd" name="pwd" placeholder="Password" />
					</div>
					<div>

						<input type="submit" value="SUBMIT" name="submit" id="submit" />
						<input type="submit" value="Click here for Pharmacist Login" name="psubmit" id="submit" />
				</center>
				<?php

				include "config.php";

				if (isset($_POST['submit'])) {

					$uname = mysqli_real_escape_string($conn, $_POST['uname']);
					$password = mysqli_real_escape_string($conn, $_POST['pwd']);

					if ($uname != "" && $password != "") {

						$sql = "SELECT * FROM admin WHERE a_username='$uname' AND a_password='$password'";
						$result = $conn->query($sql);
						$row = $result->fetch_row();
						if (!$row) {
							echo "<p style='color:red;padding-top: 50px;'>Invalid username or password!</p>";
						} else {
							session_start();
							$_SESSION['user'] = $uname;
							header('location:index.php');
						}
					}
				}

				if (isset($_POST['psubmit'])) {
					header("location:../employe/mainpage1.php");
				}
				?>

			</div>
			</center>
	</div>
			</form>
	</div>
	<?php include('includes/footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>