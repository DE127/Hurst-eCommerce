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
								<h2>My Account</h2>
							</div>
							<div class="breadcumbs pb-15">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>My Account</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HEADING-BANNER END -->
		<!-- MY-ACCOUNT-AREA START -->
		<div class="my-account-area  pt-80 pb-80">
			<div class="container">
				<div class="my-account">
					<div class="row">
						<div class="col-md-6">
							<div class="panel-group" id="accordion">
								<div class="panel mb-2">
									<div class="my-account-menu">
										<a data-bs-toggle="collapse" href="#my-info">
											My Personal Information
										</a>
									</div>
									<div id="my-info" class="panel-collapse collapse show" data-bs-parent="#accordion">
										<div class="panel-body">
											<div class="billing-details shop-cart-table">
												<input type="text" placeholder="Your name here...">
												<input type="text" placeholder="Email address here...">
												<input type="text" placeholder="Phone here...">
												<input type="text" placeholder="Company neme here...">
												<select class="custom-select mb-15">
													<option>Contry</option>
													<option>Bangladesh</option>
													<option>United States</option>
													<option>united Kingdom</option>
													<option>Australia</option>
													<option>Canada</option>
												</select>
												<select class="custom-select mb-15">
													<option>State</option>
													<option>Dhaka</option>
													<option>New York</option>
													<option>London</option>
													<option>Melbourne</option>
													<option>Ottawa</option>
												</select>
												<select class="custom-select mb-15">
													<option>Town / City</option>
													<option>Dhaka</option>
													<option>New York</option>
													<option>London</option>
													<option>Melbourne</option>
													<option>Ottawa</option>
												</select>
												<textarea placeholder="Your address here..."
													class="custom-textarea"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="panel mb-2">
									<div class="my-account-menu">
										<a class="collapsed" data-bs-toggle="collapse" href="#my-billing">
											My Billing address
										</a>
									</div>
									<div id="my-billing" class="panel-collapse collapse" data-bs-parent="#accordion">
										<div class="panel-body">
											<div class="billing-details shop-cart-table">
												<input type="text" placeholder="Your name here...">
												<input type="text" placeholder="Email address here...">
												<input type="text" placeholder="Phone here...">
												<input type="text" placeholder="Company neme here...">
												<select class="custom-select mb-15">
													<option>Contry</option>
													<option>Bangladesh</option>
													<option>United States</option>
													<option>united Kingdom</option>
													<option>Australia</option>
													<option>Canada</option>
												</select>
												<select class="custom-select mb-15">
													<option>State</option>
													<option>Dhaka</option>
													<option>New York</option>
													<option>London</option>
													<option>Melbourne</option>
													<option>Ottawa</option>
												</select>
												<select class="custom-select mb-15">
													<option>Town / City</option>
													<option>Dhaka</option>
													<option>New York</option>
													<option>London</option>
													<option>Melbourne</option>
													<option>Ottawa</option>
												</select>
												<textarea placeholder="Your address here..."
													class="custom-textarea"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="panel mb-2 mb-md-0">
									<div class="my-account-menu">
										<a class="collapsed" data-bs-toggle="collapse" href="#my-order">
											Order history and details
										</a>
									</div>
									<div id="my-order" class="panel-collapse collapse" data-bs-parent="#accordion">
										<div class="panel-body">
											<div class="our-order payment-details shop-cart-table">
												<table>
													<thead>
														<tr>
															<th><strong>Product</strong></th>
															<th class="text-end"><strong>Total</strong></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Dummy Product Name x 2</td>
															<td class="text-end">$86.00</td>
														</tr>
														<tr>
															<td>Dummy Product Name x 1</td>
															<td class="text-end">$69.00</td>
														</tr>
														<tr>
															<td>Cart Subtotal</td>
															<td class="text-end">$155.00</td>
														</tr>
														<tr>
															<td>Shipping and Handing</td>
															<td class="text-end">$15.00</td>
														</tr>
														<tr>
															<td>Vat</td>
															<td class="text-end">$00.00</td>
														</tr>
														<tr>
															<td>Order Total</td>
															<td class="text-end">$170.00</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel-group" id="accordion-2">
								<div class="panel mb-2">
									<div class="my-account-menu">
										<a data-bs-toggle="collapse" href="#my-payment-method">
											My Payment Method
										</a>
									</div>
									<div id="my-payment-method" class="panel-collapse collapse show"
										data-bs-parent="#accordion-2">
										<div class="panel-body">
											<div class="payment-method  shop-cart-table">
												<div class="payment-accordion">
													<!-- Accordion start  -->
													<h3 class="payment-accordion-toggle active">Direct Bank Transfer
													</h3>
													<div class="payment-content default">
														<p>Make your payment directly into our bank account. Please use
															your Order ID as the payment reference. Your order won't be
															shipped until the funds have cleared in our account.</p>
													</div>
													<!-- Accordion end -->
													<!-- Accordion start -->
													<h3 class="payment-accordion-toggle">Cheque Payment</h3>
													<div class="payment-content">
														<p>Please send your cheque to Store Name, Store Street, Store
															Town, Store State / County, Store Postcode.</p>
													</div>
													<!-- Accordion end -->
													<!-- Accordion start -->
													<h3 class="payment-accordion-toggle">PayPal</h3>
													<div class="payment-content">
														<p>Pay via PayPal; you can pay with your credit card if you
															don�t have a PayPal account.</p>
														<a href="#"><img alt="" src="img/payment/1.png"></a>
														<a href="#"><img alt="" src="img/payment/2.png"></a>
														<a href="#"><img alt="" src="img/payment/3.png"></a>
														<a href="#"><img alt="" src="img/payment/4.png"></a>
													</div>
													<!-- Accordion end -->
													<button type="submit" data-text="place order"
														class="button-one submit-button mt-15">place order</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="my-account-menu my-account-menu-2">
										<a href="wishlist.html">
											My Wishlist
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- MY-ACCOUNT-CART-AREA END -->
		<!-- FOOTER START -->
		<?php include_once 'elements\footer.php' ?>
		<!-- FOOTER END -->
		<!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
									aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="modal-product">
								<div class="product-images">
									<div class="main-image images">
										<img alt="#" src="img/product/quickview-photo.jpg" />
									</div>
								</div><!-- .product-images -->

								<div class="product-info">
									<h1>Aenean eu tristique</h1>
									<div class="price-box-3">
										<hr />
										<div class="s-price-box">
											<span class="new-price">$160.00</span>
											<span class="old-price">$190.00</span>
										</div>
										<hr />
									</div>
									<a href="shop.html" class="see-all">See all features</a>
									<div class="quick-add-to-cart">
										<form method="post" class="cart">
											<div class="numbers-row">
												<input type="number" id="french-hens" value="3" min="1">
											</div>
											<button class="single_add_to_cart_button" type="submit">Add to cart</button>
										</form>
									</div>
									<div class="quick-desc">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
										est tristique auctor. Donec non est at libero.
									</div>
									<div class="social-sharing">
										<div class="widget widget_socialsharing_widget">
											<h3 class="widget-title-modal">Share this product</h3>
											<ul class="social-icons">
												<li><a target="_blank" title="Google +" href="#"
														class="gplus social-icon"><i
															class="zmdi zmdi-google-plus"></i></a></li>
												<li><a target="_blank" title="Twitter" href="#"
														class="twitter social-icon"><i
															class="zmdi zmdi-twitter"></i></a></li>
												<li><a target="_blank" title="Facebook" href="#"
														class="facebook social-icon"><i
															class="zmdi zmdi-facebook"></i></a></li>
												<li><a target="_blank" title="LinkedIn" href="#"
														class="linkedin social-icon"><i
															class="zmdi zmdi-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- .product-info -->
							</div><!-- .modal-product -->
						</div><!-- .modal-body -->
					</div><!-- .modal-content -->
				</div><!-- .modal-dialog -->
			</div>
			<!-- END Modal -->
		</div>
		<!-- END QUICKVIEW PRODUCT -->

	</div>
	<!-- WRAPPER END -->

	<!-- all js here -->
	<?php include_once 'elements\js.php' ?>
</body>

</html>