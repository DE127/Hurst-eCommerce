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
				<div class="contact-us customer-login bg-white">
					<div class="row">
						<div class="col-lg-4 col-md-5">
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
								<form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php">
									<h4 class="title-1 title-border text-uppercase mb-30">send message</h4>
									<input type="text" name="con_name" placeholder="Your name here..." />
									<input type="text" name="con_email" placeholder="Your email here..." />
									<textarea class="custom-textarea" name="con_message"
										placeholder="Your comment here..."></textarea>
									<button class="button-one submit-button mt-20" data-text="submit message"
										type="submit">submit message</button>
									<p class="form-message"></p>
								</form>
							</div>
						</div>
						<div class="col-lg-8 col-md-7 mt-xs-30">
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
		<?php include_once 'elements\footer.php' ?>
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
				zoom: 10,
				scrollwheel: false,
				center: new google.maps.LatLng(47.606205, -122.332046),
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

			var styles =
				[
					{
						"featureType": "all",
						"elementType": "labels.text.fill",
						"stylers": [
							{
								"color": "#636363"
							}
						]
					},
					{
						"featureType": "all",
						"elementType": "labels.text.stroke",
						"stylers": [
							{
								"visibility": "on"
							},
							{
								"color": "#1f1f1f"
							}
						]
					},
					{
						"featureType": "all",
						"elementType": "labels.icon",
						"stylers": [
							{
								"visibility": "off"
							}
						]
					},
					{
						"featureType": "administrative",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#1F1F1F"
							}
						]
					},
					{
						"featureType": "administrative",
						"elementType": "geometry.stroke",
						"stylers": [
							{
								"color": "#1F1F1F"
							}
						]
					},
					{
						"featureType": "landscape",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#2A2A2A"
							},
						]
					},
					{
						"featureType": "poi",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#2A2A2A"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#2A2A2A"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.stroke",
						"stylers": [
							{
								"color": "#2A2A2A"
							}
						]
					},
					{
						"featureType": "road.arterial",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#1a1a1a"
							}
						]
					},
					{
						"featureType": "road.local",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#1a1a1a"
							}
						]
					},
					{
						"featureType": "transit",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#1a1a1a"
							}
						]
					},
					{
						"featureType": "water",
						"elementType": "geometry",
						"stylers": [
							{
								"color": "#1F1F1F"
							},
						]
					}
				];

			map.setOptions({ styles: styles });
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

</body>

</html>