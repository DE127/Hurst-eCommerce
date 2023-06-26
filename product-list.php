<!doctype html>
<html class="no-js" lang="en">

<?php
include_once 'elements\head.php';
include_once 'config\conn.php';
?>

<body>
	<div class="wrapper bg-dark-white">

		<?php include_once 'elements\header.php' ?>
		<div class="heading-banner-area overlay-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-banner">
							<div class="heading-banner-title">
								<h2>Product View</h2>
							</div>
							<div class="breadcumbs pb-15">
								<ul>
									<li><a href="#">Home</a></li>
									<li>Product view</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-area pt-80 pb-80 product-style-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 order-2 order-lg-1">
						<aside class="widget widget-search mb-30">
							<form action="" method="GET">
								<input type="text" name="search" placeholder="Search here...">
								<button type="submit">Search</button>
							</form>
						</aside>
						<aside class="widget widget-categories  mb-30">
							<div class="widget-title">
								<h4>Categories</h4>
							</div>
							<div id="cat-treeview" class="widget-info product-cat boxscrol2">
								<ul>
									<?php

									$sql = "SELECT * FROM product_type";
									$result = mysqli_query($conn, $sql);
									if (mysqli_num_rows($result) > 0) {
										while ($row = mysqli_fetch_assoc($result)) {
											echo '<li><span><a href="?category=' . $row['name'] . '">' . $row['name'] . '<a></span>';
											echo '</li>';
										}
									} else {
										echo "0 results";
									}
									?>
								</ul>
							</div>
						</aside>
						<aside class="widget shop-filter mb-30">
							<div class="widget-title">
								<h4>Price</h4>
							</div>
							<div class="widget-info">
								<div class="price_filter">
									<div class="price_slider_amount">
										<input type="submit" value="You range :" />
										<input type="text" id="amount" name="price" placeholder="Add Your Price" />
									</div>
									<div id="slider-range"></div>
								</div>
							</div>
						</aside>
						<aside class="widget widget-color mb-30">
							<div class="widget-title">
								<h4>Brands</h4>
							</div>
							<div class="widget-info color-filter clearfix">
								<ul>
									<?php

									$sql = "SELECT * FROM brand";
									$result = mysqli_query($conn, $sql);
									if (mysqli_num_rows($result) > 0) {
										while ($row = mysqli_fetch_assoc($result)) {
											$sql2 = "SELECT COUNT(*) AS total FROM product WHERE brand_id = " . $row['id'];
											$result2 = mysqli_query($conn, $sql2);
											$row2 = mysqli_fetch_assoc($result2);
											echo '<li><a href="?brandID='. $row['id'] .'"><span></span>' . $row['name'] . '<span
												class="count">' . $row2['total'] . '</span></a></li>';
										}
									} else {
										echo "0 results";
									}
									?>
								</ul>
							</div>
						</aside>
						<aside class="widget widget-banner hidden-sm">
							<div class="widget-info widget-banner-img">
								<a href="#"><img src="img/banner/5.jpg" alt="" /></a>
							</div>
						</aside>
					</div>
					<div class="col-lg-9 order-1 order-lg-2">
						<div class="shop-content mt-tab-30 mb-30 mb-lg-0">
							<div class="product-option mb-30 clearfix">
								<ul class="nav d-block shop-tab">
									<li><a class="active" href="#grid-view" data-bs-toggle="tab"><i
												class="zmdi zmdi-view-module"></i></a></li>
								</ul>
								<div class="showing text-end d-none d-md-block">
									<?php
									// Lấy tổng số sản phẩm
									$sql = "SELECT COUNT(*) AS total FROM product";
									$result = mysqli_query($conn, $sql);
									$row = mysqli_fetch_assoc($result);
									$total_products = $row['total'];

									// Tính toán số trang
									$products_per_page = 9;
									$total_pages = ceil($total_products / $products_per_page);

									$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
									$offset = ($current_page - 1) * $products_per_page;

									// in số lượng sản phẩm đã in ra màn hình và tổng số lượng sản phẩm
									$from = $offset + 1;
									$to = $offset + $products_per_page;
									if ($to > $total_products) {
										$to = $total_products;
									}
									echo "<p class='mb-0'>Showing $from-$to of $total_products Results</p>";
									?>
								</div>
							</div>
							<div class="tab-content">
								<div class="tab-pane active" id="grid-view">
									<div class="row">
										<?php
										// Lấy tổng số sản phẩm
										$sql = "SELECT COUNT(*) AS total FROM product";
										$result = mysqli_query($conn, $sql);
										$row = mysqli_fetch_assoc($result);
										$total_products = $row['total'];

										// Tính toán số trang
										$products_per_page = 9;
										$total_pages = ceil($total_products / $products_per_page);

										// Lấy sản phẩm trên trang hiện tại
										$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
										$offset = ($current_page - 1) * $products_per_page;
										$sql = "SELECT * FROM product LIMIT $offset, $products_per_page";
										$result = mysqli_query($conn, $sql);

										if (isset($_GET['search'])) {
											$search = $_GET['search'];
											$sql = "SELECT * FROM product WHERE name LIKE '%$search%'";
											$result = mysqli_query($conn, $sql);
											if (mysqli_num_rows($result) > 0) {
												while ($row = mysqli_fetch_assoc($result)) {
													echo '<div class="col-lg-4 col-md-6">
															<div class="single-product">
																<div class="product-img">
																	<span class="pro-price-2">$ ' . $row['price_out'] . '</span>
																	<a href="single-product.html"><img src="admin/' . $row['thumbnail'] . '" alt="" style="height:270px" /></a>
																</div>
																<div class="product-info clearfix text-center">
																	<div class="fix">
																		<h4 class="post-title"><a href="product.php?product=' . $row['id'] . '">' . $row['name'] . '</a></h4>
																	</div>
																	<div class="fix">
																	</div>
																	<div class="product-action clearfix">
																		<a href="wishlist.html" data-bs-toggle="tooltip"
																			data-placement="top" title="Wishlist"><i
																				class="zmdi zmdi-favorite-outline"></i></a>
																		<a href="#" data-bs-toggle="modal" data-bs-target="#productModal"
																			title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
																		<a href="#" data-bs-toggle="tooltip" data-placement="top"
																			title="Compare"><i class="zmdi zmdi-refresh"></i></a>
																		<form method="post" action="">
																			<input type="hidden" name="product_id" value="' . $row['id'] . '">
																			<input type="hidden" name="product_quantity" value="1">
																			<input type="hidden" name="product_name" value="' . $row['name'] . '">
																			<input type="hidden" name="product_price" value="' . $row['price_out'] . '">
																			<button type="submit" class="btn" name="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></button>
																		</form>
																	</div>
																</div>
															</div>
														</div>';
												}
											} else {
												echo '<div style="padding: 30px"><h2 style="text-align: center;">0 results</h2></div>';
											}
										}

										// lấy sản phẩm theo danh mục
										if (isset($_GET['category'])) {
											$category = $_GET['category'];
											$sql = "SELECT * FROM product_type WHERE name = '$category'";
											$result = mysqli_query($conn, $sql);
											$row = mysqli_fetch_assoc($result);
											$category_id = $row['id'];
											$sql = "SELECT * FROM product WHERE product_type_id = $category_id";
											$result = mysqli_query($conn, $sql);
											if (mysqli_num_rows($result) > 0) {
												while ($row = mysqli_fetch_assoc($result)) {
													echo '<div class="col-lg-4 col-md-6">
															<div class="single-product">
																<div class="product-img">
																	<span class="pro-price-2">$ ' . $row['price_out'] . '</span>
																	<a href="single-product.html"><img src="admin/' . $row['thumbnail'] . '" alt="" style="height:270px" /></a>
																</div>
																<div class="product-info clearfix text-center">
																	<div class="fix">
																		<h4 class="post-title"><a href="product.php?product=' . $row['id'] . '">' . $row['name'] . '</a></h4>
																	</div>
																	<div class="fix">
																	</div>
																	<div class="product-action clearfix">
																		<a href="wishlist.html" data-bs-toggle="tooltip"
																			data-placement="top" title="Wishlist"><i
																				class="zmdi zmdi-favorite-outline"></i></a>
																		<a href="#" data-bs-toggle="modal" data-bs-target="#productModal"
																			title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
																		<a href="#" data-bs-toggle="tooltip" data-placement="top"
																			title="Compare"><i class="zmdi zmdi-refresh"></i></a>
																		<form method="post" action="">
																			<input type="hidden" name="product_id" value="' . $row['id'] . '">
																			<input type="hidden" name="product_quantity" value="1">
																			<input type="hidden" name="product_name" value="' . $row['name'] . '">
																			<input type="hidden" name="product_price" value="' . $row['price_out'] . '">
																			<button type="submit" class="btn" name="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></button>
																		</form>
																	</div>
																</div>
															</div>
														</div>';
												}
											} else {
												echo '<div style="padding: 30px"><h2 style="text-align: center;">0 results</h2></div>';
											}
										}

										// lấy sản phẩm theo giá

										// lấy sản phẩm theo thương hiệu
										if (isset($_GET['brandID'])) {
											$brandID = $_GET['brandID'];
											$sql = "SELECT * FROM product WHERE brand_id = $brandID";
											$result = mysqli_query($conn, $sql);
											if (mysqli_num_rows($result) > 0) {
												while ($row = mysqli_fetch_assoc($result)) {
													echo '<div class="col-lg-4 col-md-6">
															<div class="single-product">
																<div class="product-img">
																	<span class="pro-price-2">$ ' . $row['price_out'] . '</span>
																	<a href="single-product.html"><img src="admin/' . $row['thumbnail'] . '" alt="" style="height:270px" /></a>
																</div>
																<div class="product-info clearfix text-center">
																	<div class="fix">
																		<h4 class="post-title"><a href="product.php?product=' . $row['id'] . '">' . $row['name'] . '</a></h4>
																	</div>
																	<div class="fix">
																	</div>
																	<div class="product-action clearfix">
																		<a href="wishlist.html" data-bs-toggle="tooltip"
																			data-placement="top" title="Wishlist"><i
																				class="zmdi zmdi-favorite-outline"></i></a>
																		<a href="#" data-bs-toggle="modal" data-bs-target="#productModal"
																			title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
																		<a href="#" data-bs-toggle="tooltip" data-placement="top"
																			title="Compare"><i class="zmdi zmdi-refresh"></i></a>
																		<form method="post" action="">
																			<input type="hidden" name="product_id" value="' . $row['id'] . '">
																			<input type="hidden" name="product_quantity" value="1">
																			<input type="hidden" name="product_name" value="' . $row['name'] . '">
																			<input type="hidden" name="product_price" value="' . $row['price_out'] . '">
																			<button type="submit" class="btn" name="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></button>
																		</form>
																	</div>
																</div>
															</div>
														</div>';
												}
											} else {
												echo '<div style="padding: 30px"><h2 style="text-align: center;">0 results</h2></div>';
											}
										}

										// Hiển thị sản phẩm trên trang hiện tại
										while ($row = mysqli_fetch_assoc($result)) {
											echo '<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-price-2">$ ' . $row['price_out'] . '</span>
												<a href="single-product.html"><img src="admin/' . $row['thumbnail'] . '" alt="" style="height:270px" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title"><a href="product.php?product=' . $row['id'] . '">' . $row['name'] . '</a></h4>
												</div>
												<div class="fix">
												</div>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip"
														data-placement="top" title="Wishlist"><i
															class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal"
														title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top"
														title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<form method="post" action="">
														<input type="hidden" name="product_id" value="' . $row['id'] . '">
														<input type="hidden" name="product_quantity" value="1">
														<input type="hidden" name="product_name" value="' . $row['name'] . '">
														<input type="hidden" name="product_price" value="' . $row['price_out'] . '">
														<button type="submit" class="btn" name="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></button>
													</form>
												</div>
											</div>
										</div>
									</div>';
										}
										?>
									</div>
								</div>
							</div>
							<div class="shop-pagination text-center">
								<div class="pagination">
									<ul>
										<?php
										// Lấy tổng số sản phẩm
										$sql = "SELECT COUNT(*) AS total FROM product";
										$result = mysqli_query($conn, $sql);
										$row = mysqli_fetch_assoc($result);
										$total_products = $row['total'];

										// Tính toán số trang
										$products_per_page = 9;
										$total_pages = ceil($total_products / $products_per_page);

										// Hiển thị phân trang
										// hiển thị trang trước
										if ($current_page > 1 && $total_pages > 1) {
											echo '<li><a href="?page=' . ($current_page - 1) . '"><i class="zmdi zmdi-long-arrow-left"></i></a></li>';
										}
										for ($i = 1; $i <= $total_pages; $i++) {
											echo "<li><a href='?page=$i'>$i</a></li> ";
										}
										// hiển thị trang sau
										if ($current_page < $total_pages && $total_pages > 1) {
											echo '<li><a href="?page=' . ($current_page + 1) . '"><i class="zmdi zmdi-long-arrow-right"></i></a></li>';
										}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once 'elements\footer.php' ?>
	</div>
	<?php include_once 'elements\js.php' ?>
</body>

</html>