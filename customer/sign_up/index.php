<!doctype html>
<html lang="en">

<head>
	<title>Sign UP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>

	<?php

	include "../config.php";
	function filtertable($query)
	{
		$conn = mysqli_connect("localhost", "root", "", "pharmacy");
		$filter_result = mysqli_query($conn, $query);
		return $filter_result;
	}

	?>
	<section class="ftco-section img bg-hero" style="background-image: url(images/bg_1.jpg);">
		<div class="container">
			<div class="row justify-content-center ">
				<div class="col-md-6 text-center mb-8">
					<h2 class="heading-section ">Register</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<div class="wrapper">
						<div class="row no-gutters justify-content-between">

							<div class="col-lg-12">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4 text-center">SIGN UP</h3>
									<div id="form-message-warning" class="mb-4"></div>
									<div id="form-message-success" class="mb-4">
										Your message was sent, thank you!
									</div>
									<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="email" class="form-control" name="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="password" class="form-control" name="pass" placeholder="Password">
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name="add" value="Create account" class="btn btn-primary">
													<div class="submitting"></div>
													<div class="form-group float-right">
													<a href="../mainpage1.php">Login</a>
													<div class="submitting"></div>
												</div>
												</div>
												
											</div>
										</div>
									</form>
									<?php

									include "../config.php";
									if (isset($_POST['add'])) {
										$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
										$pass = mysqli_real_escape_string($conn, $_REQUEST['pass']);
										$email = mysqli_real_escape_string($conn, $_REQUEST['email']);


										$sql = "INSERT INTO cuslogin(C_USERNAME,C_mail,C_PASS) VALUES ('$name','$email','$pass')";

										if (mysqli_query($conn, $sql)) {
											echo "<p style='font-size:8;'>Customer successfully added!</p>";
										} else {
											echo "<p style='font-size:8; color:red;'>Error! Check details.</p>";
										}
									}

									if (isset($_POST['add'])) {
										$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
										$qry = "SELECT c_id FROM cuslogin where c_username= '$name'";
										$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
										$result = $conn->query($qry);
										echo mysqli_error($conn);
										if ($result->num_rows > 0 ) {
											while ($row = $result->fetch_assoc()) {
												$help = $row['c_id'];
												
											}
										}


										$sql1 = "INSERT into customer(C_ID,C_FNAME,C_MAIL) VALUES( '$help','$name','$email' )";

										if (mysqli_query($conn, $sql1)) {
											echo "<p style='font-size:8;'>Customer3 successfully added!</p>";
										} else {
											echo "<p style='font-size:8; color:red;'>Error! Check details.</p>";
										}
									}

									

									$conn->close();
									?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>