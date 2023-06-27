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
								<h2>Wishlist</h2>
							</div>
							<div class="breadcumbs pb-15">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>Wishlist</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HEADING-BANNER END -->
		<!-- WISHLIST-AREA START -->
		<div class="shopping-cart-area pt-80 pb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="shopping-cart">
							<!-- Nav tabs -->
							<ul class="cart-page-menu nav row clearfix mb-30">
								<li><a href="cart.php">shopping cart</a></li>
								<li><a class="active" href="wishlist.php">wishlist</a></li>
								<li><a href="checkout.php">check out</a></li>
								<li><a href="order.php">order complete</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<!-- wishlist start -->
								<div class="tab-pane active" id="wishlist">
									<form action="#">
										<div class="shop-cart-table">
											<div class="table-content table-responsive">
												<table>
													<thead>
														<tr>
															<th class="product-thumbnail">Product</th>
															<th class="product-price">Price</th>
															<th class="product-stock">stock status</th>
															<th class="product-add-cart">Add to cart</th>
															<th class="product-remove">Remove</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="product-thumbnail  text-left">
																<!-- Single-product start -->
																<div class="single-product">
																	<div class="product-img">
																		<a href="single-product.html"><img
																				src="img/product/2.jpg" alt="" /></a>
																	</div>
																	<div class="product-info">
																		<h4 class="post-title"><a
																				class="text-light-black" href="#">dummy
																				product name</a></h4>
																		<p class="mb-0">Color : Black</p>
																		<p class="mb-0">Size : SL</p>
																	</div>
																</div>
																<!-- Single-product end -->
															</td>
															<td class="product-price">$56.00</td>
															<td class="product-stock">in stock</td>
															<td class="product-add-cart">
																<a class="text-light-black" href="#"><i
																		class="zmdi zmdi-shopping-cart-plus"></i></a>
															</td>
															<td class="product-remove">
																<a href="#"><i class="zmdi zmdi-close"></i></a>
															</td>
														</tr>
														<tr>
															<td class="product-thumbnail  text-left">
																<!-- Single-product start -->
																<div class="single-product">
																	<div class="product-img">
																		<a href="single-product.html"><img
																				src="img/product/12.jpg" alt="" /></a>
																	</div>
																	<div class="product-info">
																		<h4 class="post-title"><a
																				class="text-light-black" href="#">dummy
																				product name</a></h4>
																		<p class="mb-0">Color : Black</p>
																		<p class="mb-0">Size : SL</p>
																	</div>
																</div>
																<!-- Single-product end -->
															</td>
															<td class="product-price">$56.00</td>
															<td class="product-stock">in stock</td>
															<td class="product-add-cart">
																<a class="text-light-black" href="#"><i
																		class="zmdi zmdi-shopping-cart-plus"></i></a>
															</td>
															<td class="product-remove">
																<a href="#"><i class="zmdi zmdi-close"></i></a>
															</td>
														</tr>
														<tr>
															<td class="product-thumbnail  text-left">
																<!-- Single-product start -->
																<div class="single-product">
																	<div class="product-img">
																		<a href="single-product.html"><img
																				src="img/product/6.jpg" alt="" /></a>
																	</div>
																	<div class="product-info">
																		<h4 class="post-title"><a
																				class="text-light-black" href="#">dummy
																				product name</a></h4>
																		<p class="mb-0">Color : Black</p>
																		<p class="mb-0">Size : SL</p>
																	</div>
																</div>
																<!-- Single-product end -->
															</td>
															<td class="product-price">$56.00</td>
															<td class="product-stock">in stock</td>
															<td class="product-add-cart">
																<a class="text-light-black" href="#"><i
																		class="zmdi zmdi-shopping-cart-plus"></i></a>
															</td>
															<td class="product-remove">
																<a href="#"><i class="zmdi zmdi-close"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</form>
								</div>
								<!-- wishlist end -->
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- WISHLIST-AREA END -->
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