<?php
session_start();
include_once 'elements\head.php';
include_once 'config\conn.php';
// Turn off all error reporting
error_reporting(0);

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Query the database to get the user with the provided email
	$query = "SELECT * FROM customer WHERE email = '$email'";
	$result = mysqli_query($conn, $query);

	echo $query;

	if (mysqli_num_rows($result) == 1) {
		echo '2';
		// User found, check if password matches
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row['password']) && $row['status'] >= 1) {
			// Password matches, start session and redirect to customer panel
			echo '3';
			$_SESSION['customer'] = true;
			$_SESSION['customer_id'] = $row['id'];
			header('Location: index.php');
			exit();
		} else {
			echo '4';
			// Password does not match, show error message
			$error = "Invalid email or password";
		}
	} else {
		// User not found, show error message
		$error = "Invalid email or password";
	}
}

if (isset($_POST['regiter'])) {
	// Lấy thông tin đăng ký từ biểu mẫu
	$fullname = $_POST['fullname'];
	$username = strtolower(str_replace(' ', '', $fullname));
	// username + random number + unique id
	$username = $username . rand(100, 999) . uniqid();
	$email = $_POST['email'];
	$password = $_POST['password'];
	$status = 1;

	// kiểm tra password and confirm password
	if ($password != $_POST['confirm_password']) {
		$error = "Password and Confirm Password do not match";
		echo "<script type='text/javascript'>alert('$error');</script>";
	}

	// Mã hóa mật khẩu
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	// Lưu thông tin đăng ký vào cơ sở dữ liệu
	$sql = "INSERT INTO customer (username, email, password, fullname, status) VALUES ('$username', '$email', '$hashed_password', '$fullname', '$status');";
	if (mysqli_query($conn, $sql)) {
		echo '<script> alert("Register successfully") </script>';
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

if (isset($_SESSION['customer']) && $_SESSION['customer'] === true) {
	header("Location:index.php");
	exit;
}
?>
<!doctype html>
<html class="no-js" lang="en">


<body>
	<!-- WRAPPER START -->
	<div class="wrapper bg-dark-white">

		<?php include_once 'elements\header.php' ?>
		<!-- HEADING-BANNER START -->
		<div class="heading-banner-area overlay-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-banner">
							<div class="heading-banner-title">
								<h2>Registration</h2>
							</div>
							<div class="breadcumbs pb-15">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>Registration</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HEADING-BANNER END -->
		<!-- SHOPPING-CART-AREA START -->
		<div class="login-area  pt-80 pb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<form action="" method="post">
								<div class="customer-login text-left">
									<h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
									<p class="text-gray">If you have an account with us, Please login!</p>
									<input type="text" placeholder="Email here..." name="email" required>
									<input type="password" placeholder="Password" name="password" required>
									<p><a href="#" class="text-gray">Forget your password?</a></p>
									<button type="submit" class="button-one submit-button mt-15"
										name="login">login</button>
								</div>
							</form>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="row">
							<form action="" method="post">
								<div class="customer-login text-left">
									<h4 class="title-1 title-border text-uppercase mb-30">new customers</h4>
									<p class="text-gray">If you have an account with us, Please login!</p>
									<input type="text" placeholder="Your name here..." name="fullname" required>
									<input type="text" placeholder="Email address here..." name="email" required>
									<input type="password" placeholder="Password" name="password" required>
									<input type="password" placeholder="Confirm password" name="confirm_password" required>
									<p class="mb-0">
										<input type="checkbox" id="newsletter" name="newsletter" checked>
										<label for="newsletter"><span>Sign up for our newsletter!</span></label>
									</p>
									<button type="submit" class="button-one submit-button mt-15"
										name="regiter">regiter</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- SHOPPING-CART-AREA END -->
		<!-- FOOTER START -->
		<?php include_once 'elements\footer.php' ?>
		<!-- FOOTER END -->

	</div>
	<!-- WRAPPER END -->

	<!-- all js here -->
	<?php include_once 'elements\js.php' ?>
</body>

</html>