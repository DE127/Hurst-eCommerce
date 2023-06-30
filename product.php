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

$row3 = $row;
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
									<img src="admin/<?php echo $row3['thumbnail'] ?>" alt="" />
									<a class="view-full-screen" href="admin/<?php echo $row3['thumbnail'] ?>"
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
										<?php echo $row3["name"] ?>
									</h4>
									<span class="pro-rating floatright">
									</span>
								</div>
								<div class="fix mb-20">
									<span class="pro-price">$
										<?php echo $row3['price_out'] ?>
									</span>
								</div>
								<div class="product-description">
									<p>
										<?php echo $row3['description'] ?>
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
													$stmt->bind_param("i", $row3['brand_id']);
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
											<input type="text" value="02" name="product_quantity"
												class="cart-plus-minus-box">
										</div>
										<div class="product-action clearfix">
											<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top"
												title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#productModal"
												title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i
													class="zmdi zmdi-refresh"></i></a>
											<input type="hidden" name="product_id" value="<?php echo $row3['id'] ?>">
											<input type="hidden" name="product_name"
												value="<?php echo $row3['name'] ?>">
											<input type="hidden" name="product_price"
												value="<?php echo $row3['price_out'] ?>">
											<button type="submit" class="btn" name="add-to-cart"><i
													class="zmdi zmdi-shopping-cart-plus"></i></button>
										</div>
									</form>
								</div>
								<!-- Single-pro-slider Small-photo start -->
								<div class="single-pro-slider single-sml-photo slider-nav">
									<div>
										<img src="admin/<?php echo $row3['thumbnail'] ?>" alt="" />
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
											<?php echo $row3['name'] ?>
										</h3>
										<p>
											<?php echo $row3['description'] ?>
										</p>
									</div>
								</div>
								<div class="tab-pane active" id="reviews">
									<iframe class="pro-tab-info pro-description" height="800px" width="100%" src="comment.php?product_id=<?= $_GET['product']; ?>"></iframe>
								</div>
								<div class="tab-pane" id="information">
									<div class="pro-tab-info pro-information">
										<h3 class="tab-title title-border mb-30">Product information</h3>
										<p>
											<?php echo $row3['description'] ?>
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

	</div>
	<!-- WRAPPER END -->

	<!-- all js here -->
	<?php include_once 'elements\js.php' ?>
</body>

</html>