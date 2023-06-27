<!doctype html>
<html class="no-js" lang="en">

<?php
include_once 'elements\head.php';
include_once 'config\conn.php';
?>

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
								<h2>Shopping Cart</h2>
							</div>
							<div class="breadcumbs pb-15">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>Shopping Cart</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HEADING-BANNER END -->
		<!-- SHOPPING-CART-AREA START -->
		<div class="shopping-cart-area  pt-80 pb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="shopping-cart">
							<!-- Nav tabs -->
							<ul class="cart-page-menu nav row clearfix mb-30">
								<li><a class="active" href="cart.php">shopping cart</a></li>
								<li><a href="wishlist.php">wishlist</a></li>
								<li><a href="checkout.php">check out</a></li>
								<li><a href="order.php">order complete</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<!-- shopping-cart start -->
								<div class="tab-pane active" id="shopping-cart">
									<form action="#">
										<div class="shop-cart-table">
											<div class="table-content table-responsive">
												<table>
													<thead>
														<tr>
															<th class="product-thumbnail">Product</th>
															<th class="product-price">Price</th>
															<th class="product-quantity">Quantity</th>
															<th class="product-subtotal">Total</th>
															<th class="product-remove">Remove</th>
														</tr>
													</thead>
													<tbody>
														<?php
														if (isset($_SESSION['cart'])) {
															foreach ($_SESSION['cart'] as $product) {
																echo '<tr>
																<td class="product-thumbnail  text-left">
																	<!-- Single-product start -->
																	<div class="single-product">
																		<div class="product-img">
																			<a href="product.php?product=' . $product['id'] . '"><img
																					src="admin/' . $product['thumbnail'] . '" alt="" /></a>
																		</div>
																		<div class="product-info">
																			<h4 class="post-title"><a
																					class="text-light-black" href="product.php?product=' . $product['id'] . '">' . $product['name'] . '</a></h4>
																			<p class="mb-0">Price : ' . $product['price'] . '$</p>
																			<p class="mb-0">Quantity : ' . $product['quantity'] . '</p>
																		</div>
																	</div>
																	<!-- Single-product end -->
																</td>
																<td class="product-price">$' . $product['price'] . '</td>
																<td class="product-quantity">' . $product['quantity'] . '</td>
																<td class="product-subtotal">$' . $product['price'] * $product['quantity'] . '</td>
																<td class="product-remove">
																<form method="post" action="">
																<input type="hidden" name="id" value="' . $product['id'] . '">
																<button type="submit" name="update" class="btn"><i
																		class="zmdi zmdi-close"></i></button>
															</form>
																</td>
															</tr>';
															}
														}
														?>
													</tbody>
												</table>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="customer-login payment-details mt-30">
													<h4 class="title-1 title-border text-uppercase">Order details</h4>
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
																		<td class="text-end">$'. $subTotal + $total + $vat .'</td>
																	</tr>';

															}
															?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</form>
								</div>
								<!-- shopping-cart end -->
							</div>

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