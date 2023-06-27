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
		?>
		<!-- HEADING-BANNER START -->
		<div class="heading-banner-area overlay-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-banner">
							<div class="heading-banner-title">
								<h2>order complete</h2>
							</div>
							<div class="breadcumbs pb-15">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>order complete</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HEADING-BANNER END -->
		<!-- ORDER-AREA START -->
		<div class="shopping-cart-area  pt-80 pb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="shopping-cart">
							<!-- Nav tabs -->
							<ul class="cart-page-menu nav row clearfix mb-30">
								<li><a href="cart.php">shopping cart</a></li>
								<li><a href="wishlist.php">wishlist</a></li>
								<li><a href="checkout.php">check out</a></li>
								<li><a class="active" href="order.php">order complete</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<!-- order-complete start -->
								<div class="tab-pane active" id="order-complete">
									<form action="#">
										<div class="thank-recieve bg-white mb-30">
											<p>Thank you. Your order has been received.</p>
										</div>
										<div class="order-info bg-white text-center clearfix mb-30">
											<div class="single-order-info">
												<h4 class="title-1 text-uppercase text-light-black mb-0">order no</h4>
												<p class="text-uppercase text-light-black mb-0"><strong>m
														2653257</strong></p>
											</div>
											<div class="single-order-info">
												<h4 class="title-1 text-uppercase text-light-black mb-0">Date</h4>
												<p class="text-uppercase text-light-black mb-0"><strong>june 15,
														2021</strong></p>
											</div>
											<div class="single-order-info">
												<h4 class="title-1 text-uppercase text-light-black mb-0">Total</h4>
												<p class="text-uppercase text-light-black mb-0"><strong>$
														170.00</strong></p>
											</div>
											<div class="single-order-info">
												<h4 class="title-1 text-uppercase text-light-black mb-0">payment method
												</h4>
												<p class="text-uppercase text-light-black mb-0"><a
														href="#"><strong>check payment</strong></a></p>
											</div>
										</div>
										<div class="shop-cart-table check-out-wrap">
											<div class="row">
												<div class="col-md-6">
													<div class="our-order payment-details pr-20">
														<h4 class="title-1 title-border text-uppercase mb-30">our order
														</h4>
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
												<!-- payment-method -->
												<div class="col-md-6 mt-xs-30">
													<div class="payment-method  pl-20">
														<h4 class="title-1 title-border text-uppercase mb-30">payment
															method</h4>
														<div class="payment-accordion">
															<!-- Accordion start  -->
															<h3 class="payment-accordion-toggle active">Direct Bank
																Transfer</h3>
															<div class="payment-content default">
																<p>Make your payment directly into our bank account.
																	Please use your Order ID as the payment reference.
																	Your order won't be shipped until the funds have
																	cleared in our account.</p>
															</div>
															<!-- Accordion end -->
															<!-- Accordion start -->
															<h3 class="payment-accordion-toggle">Cheque Payment</h3>
															<div class="payment-content">
																<p>Please send your cheque to Store Name, Store Street,
																	Store Town, Store State / County, Store Postcode.
																</p>
															</div>
															<!-- Accordion end -->
															<!-- Accordion start -->
															<h3 class="payment-accordion-toggle">PayPal</h3>
															<div class="payment-content">
																<p>Pay via PayPal; you can pay with your credit card if
																	you don�t have a PayPal account.</p>
																<a href="#"><img src="img/payment/1.png" alt="" /></a>
																<a href="#"><img src="img/payment/2.png" alt="" /></a>
																<a href="#"><img src="img/payment/3.png" alt="" /></a>
																<a href="#"><img src="img/payment/4.png" alt="" /></a>
															</div>
															<!-- Accordion end -->
															<button class="button-one submit-button mt-15"
																data-text="place order" type="submit">place
																order</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								<!-- order-complete end -->
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ORDER-AREA END -->
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