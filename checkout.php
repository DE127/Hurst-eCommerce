<!doctype html>
<html class="no-js" lang="en">

<?php
include_once 'elements\head.php';
include_once 'config\conn.php';
?>

<body>
	<!-- WRAPPER START -->
	<div class="wrapper bg-dark-white">

		<?php
		include_once 'elements\header.php';
		require_once 'session.php';

		$id = $_SESSION['customer_id'];
		$sql = "SELECT * FROM customer WHERE id = '$id' LIMIT 1";
		$order = mysqli_query($conn, 'SELECT * FROM `order` WHERE customer_id = ' . $id);
		$result = mysqli_query($conn, $sql);
		$customer = mysqli_fetch_assoc($result);

		// send order to database
		if (isset($_POST['submit'])) {
			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$payment_method_id = $_POST['payment_method_id'];
			$shipping_method_id = $_POST['shipping_method_id'];
			$customer_id = $_SESSION['customer_id'];
			// subTotal, vat, total, orderTotal
			$subTotal = $_POST['subTotal'];
			$vat = $_POST['vat'];
			$total = $_POST['total'];
			$orderTotal = $_POST['orderTotal'];
			$sql = "INSERT INTO `order`(`email`, `phone`, `address`, `payment_method_id`, `customer_id`, `total`, `subTotal`, `vat`, `orderTotal`, `shipping_method_id`) VALUES ('$email','$phone','$address','$payment_method_id','$customer_id', '$total', '$subTotal', '$vat', '$orderTotal', '$shipping_method_id')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				// làm sạch giỏ hàng
				unset($_SESSION['cart']);
				echo '<script>alert("Order successfully!")</script>';
			} else {
				echo '4';
				echo '<script>alert("Order failed!")</script>';
			}
		}
		?>
		<!-- HEADING-BANNER START -->
		<div class="heading-banner-area overlay-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-banner">
							<div class="heading-banner-title">
								<h2>check out</h2>
							</div>
							<div class="breadcumbs pb-15">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>check out</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HEADING-BANNER END -->
		<!-- CHECKOUT-AREA START -->
		<div class="shopping-cart-area  pt-80 pb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="shopping-cart">
							<!-- Nav tabs -->
							<ul class="cart-page-menu nav row clearfix mb-30">
								<li><a href="cart.php">shopping cart</a></li>
								<li><a href="wishlist.php">wishlist</a></li>
								<li><a class="active" href="checkout.php">check out</a></li>
								<li><a href="order.php">order complete</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<!-- check-out start -->
								<div class="tab-pane active" id="check-out">
										<div class="shop-cart-table check-out-wrap">
											<div class="row">
												<div class="col-md-6">
													<div class="billing-details pr-20">
														<h4 class="title-1 title-border text-uppercase mb-30">billing
															details</h4>
														<input type="text" placeholder="Your name here..."
															name="fullname"
															value="<?php echo $customer['fullname'] ?>"=>
														<input type="text" placeholder="Email address here..."
															name="email" value="<?php echo $customer['email'] ?>">
														<input type="text" placeholder="Phone here..." name="phone"
															value="<?php echo $customer['phone'] ?>">
														<input type="date" name="birthday"
															placeholder="Birthday here..."
															value="<?php echo $customer['birthday'] ?>">
														<textarea placeholder="Your address here..."
															class="custom-textarea"
															name="address"><?php echo $customer['address'] ?></textarea>
													</div>
												</div>
												<div class="col-md-6 mt-xs-30">
													<div class="billing-details pl-20">
														<h4 class="title-1 title-border text-uppercase mb-30">Shipping
															address</h4>
														<ul>
															<li>
																<h6>
																	<?php echo $customer['fullname'] ?>
																</h6>
															</li>
															<li>
																<h6>
																	<?php echo $customer['email'] ?>
																</h6>
															</li>
															<li>
																<h6>
																	<?php echo $customer['phone'] ?>
																</h6>
															</li>
															<li>
																<h6>
																	<?php echo $customer['birthday'] ?>
																</h6>
															</li>
															<li>
																<h6>
																	<?php echo $customer['address'] ?>
																</h6>
															</li>
														</ul>
													</div>
												</div>
												<div class="col-md-6">
													<div class="our-order payment-details mt-60 pr-20">
														<h4 class="title-1 title-border text-uppercase mb-30">our order
														</h4>
														<table>
															<tbody>
																<?php
																// echo order details
																$subTotal = $total * 0.01;
																$vat = $total * 0.05;
																if (isset($_SESSION['cart'])) {
																	foreach ($_SESSION['cart'] as $product) {
																		echo '<tr>
																	<td class="text-left">' . $product['name'] . '</td>
																	<td class="text-end">$' . $product['price'] * $product['quantity'] . '</td>';
																	}
																	echo '<tr>
																		<td class="text-left">Cart Subtotal</td>
																		<td class="text-end">$ ' . $subTotal . '</td>
																	</tr>
																	<tr>
																		<td class="text-left">Vat</td>
																		<td class="text-end">$ ' . $vat . '</td>
																	</tr>
																	<tr>
																		<td class="text-left">Cart Total</td>
																		<td class="text-end">$ ' . $total . '.00</td>
																	</tr>
																	<tr>
																		<td class="text-left">Order Total</td>
																		<td class="text-end">$' . $subTotal + $total + $vat . '</td>
																	</tr>';
																}
																?>
															</tbody>
														</table>
													</div>
												</div>
												<!-- payment-method -->
												<div class="col-md-6">
													<div class="payment-method mt-60  pl-20">
														<h4 class="title-1 title-border text-uppercase mb-30">payment and shipping
															method</h4>
														<div class="payment-accordion">
															<form action="" method="post" enctype="multipart/form-data">
																<input hidden type="text"
																	placeholder="Your name here..." name="fullname"
																	value="<?php echo $customer['fullname'] ?>">
																<input hidden type="text"
																	placeholder="Email address here..." name="email"
																	value="<?php echo $customer['email'] ?>">
																<input hidden type="text" placeholder="Phone here..."
																	name="phone"
																	value="<?php echo $customer['phone'] ?>">
																<input hidden type="date" name="birthday"
																	placeholder="Birthday here..."
																	value="<?php echo $customer['birthday'] ?>">
																<textarea hidden placeholder="Your address here..."
																	class="custom-textarea"
																	name="address"><?php echo $customer['address'] ?></textarea>
																<select class="custom-select mb-15"
																	name="payment_method_id">
																<?php
																	// get all payment methods
																	$sql = "SELECT * FROM payment_method";
																	$result = mysqli_query($conn, $sql);
																	while ($row = mysqli_fetch_assoc($result)) {
																		echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
																	}
																?>
																</select>
																<select class="custom-select mb-15"
																	name="shipping_method_id">
																<?php
																	// get all payment methods
																	$sql = "SELECT * FROM shipping_method where status > 0";
																	$result = mysqli_query($conn, $sql);
																	while ($row = mysqli_fetch_assoc($result)) {
																		echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
																	}
																?>
																</select>
																<?php
																$orderTotal = $total + $subTotal + $vat;
																if (isset($_SESSION['cart'])) {
																	foreach ($_SESSION['cart'] as $product) {
																		echo '<input hidden type="text" name="product_id[]" value="' . $product['id'] . '">
																	<input hidden type="text" name="quantity[]" value="' . $product['quantity'] . '">';
																	}
																}
																echo '<input hidden type="text" name="subTotal" value="' . $subTotal . '">
																<input hidden type="text" name="vat" value="' . $vat . '">
																<input hidden type="text" name="total" value="' . $total . '">
																<input hidden type="text" name="orderTotal" value="' . $orderTotal . '">';
																?>

																<button type="submit" class="button-one submit-button mt-15"
																	data-text="place order"
																	name="submit">place order</button>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
								<!-- check-out end -->
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CHECKOUT-AREA END -->
		<!-- FOOTER START -->
		<?php include_once 'elements\footer.php' ?>
		<!-- FOOTER END -->

	</div>
	<!-- WRAPPER END -->

	<!-- all js here -->
	<?php include_once 'elements\js.php' ?>
</body>

</html>