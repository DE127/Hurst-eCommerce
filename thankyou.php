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
								<h2>Contact Us</h2>
							</div>
							<div class="breadcumbs pb-15">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>Contact Us</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HEADING-BANNER END -->
		<!-- contact-us-AREA START -->
		<div class="contact-us-area  pt-80 pb-80">
			<div class="container">
				<div class="thankyour-area bg-white mb-30">
					<div class="row">
						<div class="col-md-12">
							<div class="thankyou">
								<h2 class="text-center mb-0">Thank you for your message</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-us customer-login bg-white">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
							<div class="contact-details">
								<h4 class="title-1 title-border text-uppercase mb-30">contact details</h4>
								<ul>
									<li>
										<i class="zmdi zmdi-pin"></i>
										<span>28 Green Tower, Street Name,</span>
										<span>New York City, USA</span>
									</li>
									<li>
										<i class="zmdi zmdi-phone"></i>
										<span>+880 1234 123456</span>
										<span>+880 1234 123456</span>
									</li>
									<li>
										<i class="zmdi zmdi-email"></i>
										<span>company-email@gmail.com</span>
										<span>your-email@gmail.com</span>
									</li>
								</ul>
							</div>
							<div class="send-message mt-60">
								<form action="mail.php">
									<h4 class="title-1 title-border text-uppercase mb-30">send message</h4>
									<input type="text" name="name" placeholder="Your name here..." />
									<input type="text" name="email" placeholder="Your email here..." />
									<textarea class="custom-textarea" name="message"
										placeholder="Your comment here..."></textarea>
									<button class="button-one submit-button mt-20" data-text="submit message"
										type="submit">submit message</button>
								</form>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 mt-xs-30">
							<div class="map-area">
								<div id="googleMap" style="width:100%;height:600px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ABOUT-US-AREA END -->
		<!-- FOOTER START -->
		<footer>
			<!-- Footer-area start -->
			<div class="footer-area footer-3">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
							<div class="single-footer">
								<h3 class="footer-title  title-border">Contact Us</h3>
								<ul class="footer-contact">
									<li><span>Address :</span>28 Green Tower, Street Name,<br>New York City, USA</li>
									<li><span>Cell-Phone :</span>012345 - 123456789</li>
									<li><span>Email :</span>your-email@gmail.com</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-3">
							<div class="single-footer">
								<h3 class="footer-title  title-border">accounts</h3>
								<ul class="footer-menu">
									<li><a href="my-account.html"><i class="zmdi zmdi-dot-circle"></i>My Account</a>
									</li>
									<li><a href="wishlist.html"><i class="zmdi zmdi-dot-circle"></i>My Wishlist</a></li>
									<li><a href="cart.html"><i class="zmdi zmdi-dot-circle"></i>My Cart</a></li>
									<li><a href="login.html"><i class="zmdi zmdi-dot-circle"></i>Sign In</a></li>
									<li><a href="checkout.html"><i class="zmdi zmdi-dot-circle"></i>Check out</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 hidden-sm col-xs-12">
							<div class="single-footer">
								<h3 class="footer-title  title-border">shipping</h3>
								<ul class="footer-menu">
									<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>New Products</a></li>
									<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Top Sellers</a></li>
									<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Manufactirers</a></li>
									<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Suppliers</a></li>
									<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Specials</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="single-footer">
								<h3 class="footer-title  title-border">Email Newsletters</h3>
								<div class="footer-subscribe">
									<form action="#">
										<input type="text" name="email" placeholder="Email Address..." />
										<button class="button-one submit-btn-4" type="submit"
											data-text="Subscribe">Subscribe</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer-area end -->
			<!-- Copyright-area start -->
			<div class="copyright-area copyright-2">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="copyright">
								<p class="mb-0">&copy; <a href="https://themeforest.net/user/codecarnival/portfolio"
										target="_blank">CodeCarnival </a> 2022. All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="payment  text-md-end">
								<a href="#"><img src="img/payment/1.png" alt="" /></a>
								<a href="#"><img src="img/payment/2.png" alt="" /></a>
								<a href="#"><img src="img/payment/3.png" alt="" /></a>
								<a href="#"><img src="img/payment/4.png" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright-area start -->
		</footer>
		<!-- FOOTER END -->

	</div>
	<!-- WRAPPER END -->

	<!-- all js here -->
	<?php include_once 'elements\js.php' ?>
	<!-- Google Map js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>

	<script>
		function initialize() {
			var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(40.7140709, -74.060261),
			};

			var map = new google.maps.Map(document.getElementById('googleMap'),
				mapOptions
			);

			var marker = new google.maps.Marker({
				position: map.getCenter(),
				icon: ' ',
				map: map
			});
			var contentString = '<div id="content">' +
				'<div id="siteNotice">' +
				'</div>' +
				'<div id="bodyContent">' +
				'<p>New York City Center, </br>Street Name, </br>New York City, USA</p>' +

				'</div>' +
				'</div>';

			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});
			infowindow.open(map, marker);

		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

</body>

</html>