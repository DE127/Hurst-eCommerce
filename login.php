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
				<form action="#">
					<div class="row">
						<div class="col-lg-6">
							<div class="customer-login text-left">
								<h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
								<p class="text-gray">If you have an account with us, Please login!</p>
								<input type="text" placeholder="Email here..." name="email">
								<input type="password" placeholder="Password">
								<p><a href="#" class="text-gray">Forget your password?</a></p>
								<button type="submit" data-text="login"
									class="button-one submit-button mt-15">login</button>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="customer-login text-left">
								<h4 class="title-1 title-border text-uppercase mb-30">new customers</h4>
								<p class="text-gray">If you have an account with us, Please login!</p>
								<input type="text" placeholder="Your name here..." name="name">
								<input type="text" placeholder="Email address here..." name="email">
								<input type="password" placeholder="Password">
								<input type="password" placeholder="Confirm password">
								<p class="mb-0">
									<input type="checkbox" id="newsletter" name="newsletter" checked>
									<label for="newsletter"><span>Sign up for our newsletter!</span></label>
								</p>
								<button type="submit" data-text="regiter"
									class="button-one submit-button mt-15">regiter</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- SHOPPING-CART-AREA END -->
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