<!doctype html>
<html class="no-js" lang="en">

<?php
include_once 'elements\head.php';
include_once 'config\conn.php';
if (isset($_GET['product'])) {
	$id = $_GET['product'];
	// prepare and bind
	$stmt = $conn->prepare("SELECT * FROM product WHERE id = ?");
	$stmt->bind_param("i", $id);
	// execute query
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
}
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
								<h2>Single Product</h2>
							</div>
							<div class="breadcumbs pb-15">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>Single Product</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HEADING-BANNER END -->
		<!-- PRODUCT-AREA START -->
		<div class="product-area single-pro-area pt-80 pb-80 product-style-2">
			<div class="container">
				<div class="row shop-list single-pro-info no-sidebar">
					<!-- Single-product start -->
					<div class="col-lg-12">
						<div class="single-product clearfix">
							<!-- Single-pro-slider Big-photo start -->
							<div class="single-pro-slider single-big-photo view-lightbox slider-for">
								<div>
									<img src="admin/<?php echo $row['thumbnail'] ?>" alt="" />
									<a class="view-full-screen" href="admin/<?php echo $row['thumbnail'] ?>"
										data-lightbox="roadtrip" data-title="My caption"><i
											class="zmdi zmdi-zoom-in"></i>
									</a>
								</div>
								<?php
								// lấy ảnh từ database product_image theo id của product
								$stmt = $conn->prepare("SELECT * FROM product_image WHERE product_id = ?");
								$stmt->bind_param("i", $id);
								// execute query
								$stmt->execute();
								$result = $stmt->get_result();
								// sử lý ảnh từ chuỗi dạng image01.png,image02.png,image03.png
								$images = explode(',', $result->fetch_assoc()['image']);
								foreach ($images as $image) {
									echo '<div>
									<img src="admin/uploads/medias/' . $image . '" alt="" />
									<a class="view-full-screen" href="admin/uploads/medias/' . $image . '" data-lightbox="roadtrip" data-title="My caption">
										<i class="zmdi zmdi-zoom-in"></i>
									</a>
								</div>';
								}
								?>
							</div>
							<!-- Single-pro-slider Big-photo end -->
							<div class="product-info">
								<div class="fix">
									<h4 class="post-title floatleft">
										<?php echo $row['name'] ?>
									</h4>
									<span class="pro-rating floatright">
									</span>
								</div>
								<div class="fix mb-20">
									<span class="pro-price">$
										<?php echo $row['price_out'] ?>
									</span>
								</div>
								<div class="product-description">
									<p>
										<?php echo $row['description'] ?>
									</p>
								</div>
								<!-- color start -->
								<div class="color-filter single-pro-color mb-20 clearfix">
									<ul>
										<li><span class="color-title text-capitalize">Brand</span></li>
										<li><span class=" text-capitalize"><b>
													<?php
													// lấy ra brand name từ bảng brand theo id của brand
													$stmt = $conn->prepare("SELECT * FROM brand WHERE id = ?");
													$stmt->bind_param("i", $row['brand_id']);
													// execute query
													$stmt->execute();
													$result = $stmt->get_result();
													echo $result->fetch_assoc()['name'];
													?>
												</b></span></li>
									</ul>
								</div>
								<!-- color end -->
								<!-- Size start -->
								<div class="size-filter single-pro-size mb-35 clearfix">
									<ul>
									</ul>
								</div>
								<!-- Size end -->
								<div class="clearfix">
									<form method="post" action="">
										<div class="cart-plus-minus">
											<input type="text" value="02" name="product_quantity" class="cart-plus-minus-box">
										</div>
										<div class="product-action clearfix">
											<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top"
												title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#productModal"
												title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i
													class="zmdi zmdi-refresh"></i></a>
											<input type="hidden" name="product_id" value="' . $row['id'] . '">
											<input type="hidden" name="product_name" value="' . $row['name'] . '">
											<input type="hidden" name="product_price" value="' . $row['price_out'] . '">
											<button type="submit" class="btn" name="add-to-cart"><i
													class="zmdi zmdi-shopping-cart-plus"></i></button>
										</div>
									</form>
								</div>
								<!-- Single-pro-slider Small-photo start -->
								<div class="single-pro-slider single-sml-photo slider-nav">
									<div>
										<img src="admin/<?php echo $row['thumbnail'] ?>" alt="" />
									</div>
									<?php
									$stmt = $conn->prepare("SELECT * FROM product_image WHERE product_id = ?");
									$stmt->bind_param("i", $id);
									// execute query
									$stmt->execute();
									$result = $stmt->get_result();
									// sử lý ảnh từ chuỗi dạng image01.png,image02.png,image03.png
									$images = explode(',', $result->fetch_assoc()['image']);
									foreach ($images as $image) {
										echo '<div>
										<img src="admin/uploads/medias/' . $image . '" alt="" />
									</div>';
									}
									?>
								</div>
								<!-- Single-pro-slider Small-photo end -->
							</div>
						</div>
					</div>
					<!-- Single-product end -->
				</div>
				<!-- single-product-tab start -->
				<div class="single-pro-tab">
					<div class="row">
						<div class="col-md-3">
							<div class="single-pro-tab-menu">
								<!-- Nav tabs -->
								<ul class="nav d-block">
									<li><a href="#description" data-bs-toggle="tab">Description</a></li>
									<li><a class="active" href="#reviews" data-bs-toggle="tab">Reviews</a></li>
									<li><a href="#information" data-bs-toggle="tab">Information</a></li>
									<li><a href="#tags" data-bs-toggle="tab">Tags</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-9">
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane" id="description">
									<div class="pro-tab-info pro-description">
										<h3 class="tab-title title-border mb-30">
											<?php echo $row['name'] ?>
										</h3>
										<p>
											<?php echo $row['description'] ?>
										</p>
									</div>
								</div>
								<div class="tab-pane active" id="reviews">
									<div class="pro-tab-info pro-reviews">
										<div class="customer-review mb-60">
											<h3 class="tab-title title-border mb-30">Customer review</h3>
											<ul class="product-comments clearfix">
												<li class="mb-30">
													<div class="pro-reviewer">
														<img src="img/reviewer/1.jpg" alt="" />
													</div>
													<div class="pro-reviewer-comment">
														<div class="fix">
															<div class="floatleft mbl-center">
																<h5 class="text-uppercase mb-0"><strong>Gerald
																		Barnes</strong></h5>
																<p class="reply-date">27 Jun, 2021 at 2:30pm</p>
															</div>
															<div class="comment-reply floatright">
																<a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
																<a href="#"><i class="zmdi zmdi-close"></i></a>
															</div>
														</div>
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur
															adipiscing elit. Integer accumsan egestas elese ifend.
															Phasellus a felis at est bibendum feugiat ut eget eni
															Praesent et messages in con sectetur posuere dolor non.</p>
													</div>
												</li>
												<li class="threaded-comments">
													<div class="pro-reviewer">
														<img src="img/reviewer/1.jpg" alt="" />
													</div>
													<div class="pro-reviewer-comment">
														<div class="fix">
															<div class="floatleft mbl-center">
																<h5 class="text-uppercase mb-0"><strong>Gerald
																		Barnes</strong></h5>
																<p class="reply-date">27 Jun, 2021 at 2:30pm</p>
															</div>
															<div class="comment-reply floatright">
																<a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
																<a href="#"><i class="zmdi zmdi-close"></i></a>
															</div>
														</div>
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur
															adipiscing elit. Integer accumsan egestas elese ifend.
															Phasellus a felis at est bibendum feugiat ut eget eni
															Praesent et messages in con sectetur posuere dolor non.</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="leave-review">
											<h3 class="tab-title title-border mb-30">Leave your reviw</h3>
											<div class="your-rating mb-30">
												<p class="mb-10"><strong>Your Rating</strong></p>
												<span>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
												</span>
												<span class="separator">|</span>
												<span>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
												</span>
												<span class="separator">|</span>
												<span>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
												</span>
												<span class="separator">|</span>
												<span>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
												</span>
												<span class="separator">|</span>
												<span>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
													<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
												</span>
											</div>
											<div class="reply-box">
												<form action="#">
													<div class="row">
														<div class="col-md-6">
															<input type="text" placeholder="Your name here..."
																name="name" />
														</div>
														<div class="col-md-6">
															<input type="text" placeholder="Subject..." name="name" />
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<textarea class="custom-textarea" name="message"
																placeholder="Your review here..."></textarea>
															<button type="submit" data-text="submit review"
																class="button-one submit-button mt-20">submit
																review</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="information">
									<div class="pro-tab-info pro-information">
										<h3 class="tab-title title-border mb-30">Product information</h3>
										<p>
											<?php echo $row['description'] ?>
										</p>
									</div>
								</div>
								<div class="tab-pane" id="tags">
									<div class="pro-tab-info pro-information">
										<h3 class="tab-title title-border mb-30">tags</h3>
										<p></p>
										<p></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single-product-tab end -->
			</div>
		</div>
		<!-- PRODUCT-AREA END -->
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