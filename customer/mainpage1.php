<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css//login1.css">
	<link rel="stylesheet" type="text/css" href="../header.css">
	<title>
		Customer
	</title>
</head>

<body>
	<?php include('includes/mainheader.php'); ?>
	<br><br><br><br>
	<div class="container">
		<form method="post" action="">
			<div id="div_login">
				<h1 style="background-color: #6b10c6;">Customer Login</h1>
				<center>
					<div>
						<input type="text" class="textbox" id="uname" name="uname" placeholder="Username" />
					</div>
					<div>
						<input type="password" class="textbox" id="pwd" name="pwd" placeholder="Password" />
					</div>
					<div>
						<input type="submit" value="Submit" name="submit" id="submit" />
						<input type="submit" value="Click here for Sign UP" name="psubmit" id="submit" />
					</div>


					<?php

					include "config.php";

					if (isset($_POST['submit'])) {

						$uname = mysqli_real_escape_string($conn, $_POST['uname']);
						$password = mysqli_real_escape_string($conn, $_POST['pwd']);

						if ($uname != "" && $password != "") {

							$sql = "SELECT c_id FROM cuslogin WHERE c_username='$uname' AND c_pass='$password'";
							$result = $conn->query($sql);
							$row = $result->fetch_row();
							if (!$row) {
								echo "<p style='color:red;'>Invalid username or password!</p>";
							} else {

								$cus = $row[0];
								session_start();
								$_SESSION['user'] = $cus;
								header("location:index.php");
							}
						}
					}

					if (isset($_POST['psubmit'])) {
						header("location:./sign_up/index.php");
					}
					?>

				</center>
			</div>
		</form>
	</div>
	<?php include('includes/footer.php'); ?>

</body>

</html>