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
        <!-- SLIDER-AREA START  -->
        <section class="slider-area slider-style-2">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="img\banner\main_morrow_4afb6d7f-84f5.png" alt="" title="#slider-direction-1" />
                    <!-- <img src="img/slider/slider-2/2.jpg" alt="" title="#slider-direction-2" />
					<img src="img/slider/slider-2/3.jpg" alt="" title="#slider-direction-3" /> -->
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <div class="layer-1">
                                <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                                    <h3 class="slider-title3 text-uppercase mb-0" style="color: #fff;">welcome to our</h3>
                                </div>
                                <div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
                                    <h2 class="slider-title1 text-uppercase mb-0" style="color: #fff;"><span
                                            class="d-none d-md-block" style="color: #fff;">elegent </span> furniture</h2>
                                </div>
                                <div class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="0.5s">
                                    <h2 class="slider-title2 text-uppercase" style="color: #fff;">gallery 2023</h2>
                                </div>
                                <div class="wow fadeInUpBig" data-wow-duration="3.5s" data-wow-delay="0.5s">
                                    <a href="#" class="button-one style-2 text-uppercase mt-20"
                                        data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <!-- <div id="slider-direction-2" class="slider-direction">
					<div class="slider-progress"></div>
					<div class="slider-content t-lfl s-tb slider-1">
						<div class="title-container s-tb-c title-compress">
							<div class="layer-1">
								<div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
									<h3 class="slider-title3 text-uppercase mb-0">welcome to our</h3>
								</div>
								<div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
									<h2 class="slider-title1 text-uppercase"><span class="d-none d-md-block">elegent
										</span> furniture</h2>
								</div>
								<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
									<p class="slider-pro-brief">There are many variations of passages of Lorem Ipsum
										available, but the majority have suffered alteration in some form, by injected
										humour, or randomised words which don't look even slightly believable. If you
										are going to use a passage of Lorem Ipsum, you need to be sure there hidden in
										the middle of text.</p>
								</div>
								<div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
									<a href="#" class="button-one style-2 text-uppercase mt-20"
										data-text="Shop now">Shop now</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
                <!-- direction 3 -->
                <!-- <div id="slider-direction-3" class="slider-direction">
					<div class="slider-progress"></div>
					<div class="slider-content t-lfl s-tb slider-1">
						<div class="title-container s-tb-c title-compress">
							<div class="layer-1">
								<div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
									<h3 class="slider-title3 text-uppercase mb-0">welcome to our</h3>
								</div>
								<div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
									<h2 class="slider-title1 text-uppercase mb-0"><span
											class="d-none d-md-block">elegent </span> furniture</h2>
								</div>
								<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
									<h2 class="slider-title2 text-uppercase">gallery 2021</h2>
								</div>
								<div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
									<p class="slider-pro-brief">There are many variations of passages of Lorem Ipsum
										available, but the majority have suffered alteration in some form, by injected
										humour, or randomised words which don't look even slightly believable. If you
										are going to use a passage of Lorem Ipsum, you need to be sure there hidden in
										the middle of text.</p>
								</div>
								<div class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="0.5s">
									<a href="#" class="button-one style-2 text-uppercase mt-20"
										data-text="Shop now">Shop now</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
            </div>
        </section>
        <!-- SLIDER-AREA END -->
        <!-- BANNER-AREA START -->
        <div class="banner-area pt-80">
            <div class="container">
                <div class="row">
                    <?php
					// lấy ra sản phẩm mới nhất trong database bảng product
					$sql = "SELECT * FROM product ORDER BY id DESC LIMIT 1";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					echo '<div class="col-md-5">
					<div class="single-banner banner-1 banner-4">
						<a class="banner-thumb" href="product.php?product=' . $row['id'] . '">
						<img src="admin/' . $row['thumbnail'] . '" alt="" style="height: 400px;" /></a>
						<span class="pro-label new-label">new</span>
						<span class="price">' . $row['price_out'] . ' $</span>
						<div class="banner-brief">
							<h2 class="banner-title"><a href="product.php?product=' . $row['id'] . '">' . $row['name'] . '</a></h2>
							<p class="mb-0">Furniture</p>
						</div>
						<a href="product.php?product=' . $row['id'] . '" class="button-one font-16px" data-text="Buy now">Buy now</a>
					</div>
				</div>';
					?>
                    <div class="col-md-7">
                        <!-- Single-banner start -->
                        <div class="single-banner banner-3">
                            <a class="banner-thumb" href="#"><img
                                    src="img\banner\unnamed_b7d9043b-eaed-4a91-b6c0-21c6f8a47508.jpg" alt=""
                                    style="height: 400px;" /></a>
                            <div class="banner-brief">
                                <h2 class="banner-title">
                                    <a class="text-uppercase" href="#">design by <br />hurst <br />modern
                                        <br /><span>-2021</span></a>
                                </h2>
                            </div>
                        </div>
                        <!-- Single-banner end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER-AREA END -->
        <!-- PRODUCT-AREA START -->
        <div class="product-area pt-80 pb-30 product-style-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="title-border">Featured Products</h2>
                        </div>
                        <div class="product-slider style-2 arrow-left-right">
                            <?php
							// lấy ra 5 sản phẩm mới nhất trong database bảng product trừ đi sản phẩm mới nhất chỉ lấy sản phẩm mới thứ 2 đến thứ 6 sử dụng vòng lặp while để echo các sản phảm ra
							$sql = "SELECT * FROM product ORDER BY id DESC LIMIT 5 OFFSET 1";
							$result = mysqli_query($conn, $sql);
							// echo sản phẩm ra
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
									echo '
									<div class="col-12">
									<div class="single-product">
									<div class="product-img">
										<span class="pro-label new-label">new</span>
										<span class="pro-price-2">' . $row['price_out'] . ' $</span>
										<a href="product.php?product=' . $row['id'] . '"><img src="admin/' . $row['thumbnail'] . '" alt="" style="height: 270px;" /></a>
									</div>
									<div class="product-info clearfix text-center">
										<div class="fix">
											<h4 class="post-title"><a href="product.php?product=' . $row['id'] . '">' . $row['name'] . '</a></h4>
										</div>
										<div class="fix">
										</div>
										<div class="product-action clearfix">
											<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top"
												title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#productModal"
												title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i
													class="zmdi zmdi-refresh"></i></a>
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
								echo "";
							}

							?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT-AREA END -->
        <!-- DISCOUNT-PRODUCT START -->
        <div class="discount-product-area discount-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="row">
                            <div class="discount-product-slider dots-bottom-right">
                                <?php
								// lấy ra 4 sản phảm có giá giảm giá lớn nhất trong database bảng product
								$sql = "SELECT * FROM product ORDER BY discount DESC LIMIT 4;";
								$result = mysqli_query($conn, $sql);

								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo '<div class="col-lg-12">
										<div class="discount-product">
											<div class="row">
												<div class="col-lg-5 col-md-5 col-sm-6">
													<a href="product.php?product=' . $row['id'] . '">
														<img src="admin/' . $row['thumbnail'] . '" alt="" style="height:330px" />
													</a>
												</div>
												<div class="col-lg-7 col-md-7 col-sm-6">
													<div class="discount-info">
														<h1 class="text-dark-red">Discount ' . $row['discount'] . '%</h1>
														<p>' . $row['description'] . '</p>
														<a class="button-2 text-dark-red text-uppercase" href="product.php?product=' . $row['id'] . '">GET
															DISCOUNT <i class="zmdi zmdi-long-arrow-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>';
									}
								} else {
									echo "";

								}
								?>
                                <!-- single-discount-product end -->
                            </div>
                        </div>
                    </div>
                    <!-- up-comming-product start -->
                    <?php
					$sql = "SELECT * FROM product ORDER BY RAND() LIMIT 1;";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					echo '<div class="col-lg-4 col-md-4">
					<div class="up-comming-product">
						<div class="up-comming-img">
							<a href="product.php?product=' . $row['id'] . '"><img src="admin/' . $row['thumbnail'] . '" alt="" style="height:282px"/></a>
						</div>
						<div class="up-comming-info text-center">
							<div class="up-comming-brief">
								<h4 class="post-title"><a href="product.php?product=' . $row['id'] . '">' . $row['name'] . '</a></h4>
								<h4 class="comming-pro-price">$ 200.00</h4>
								<p style="height:56px; content-visibility: auto;">' . $row['description'] . '</p>
							</div>
						</div>
					</div>
				</div>';
					?>
                    <!-- up-comming-product end -->
                </div>
            </div>
        </div>
        <!-- DISCOUNT-PRODUCT END -->
        <!-- PURCHASE-ONLINE-AREA START -->
        <div class="purchase-online-area pt-80 product-style-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="title-border">Purchase Online on Hurst</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12  text-center">
                        <!-- Nav tabs -->
                        <ul class="tab-menu nav clearfix">
                            <li><a class="active" href="#new-arrivals" data-bs-toggle="tab">New Arrivals</a></li>
                            <li><a href="#best-seller" data-bs-toggle="tab">Best Seller </a></li>
                            <li><a href="#out-of-stock" data-bs-toggle="tab">Out of Stock </a></li>
                            <li><a href="#discounts" data-bs-toggle="tab">Discounts</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="new-arrivals">
                                <div class="row">
                                    <!-- Single-product start -->
                                    <?php
									$sql = "SELECT * FROM product ORDER BY id DESC LIMIT 8";
									$result = mysqli_query($conn, $sql);
									while ($row = $result->fetch_assoc()) {
										echo '
									<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<span class="pro-price-2">$ ' . $row['price_out'] . '
												</span>
												<a href="single-product.html"><img src="admin/' . $row['thumbnail'] . '" alt="" style="height:270px" /></a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title">
													<a href="product.php?product=' . $row['id'] . '">' . $row['name'] . '</a>
													</h4>
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
														<button type="submit" class="btn" name="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i>
														</button>
													</form>
												</div>
											</div>
										</div>
									</div>';
									}
									?>
                                </div>
                            </div>
                            <div class="tab-pane" id="best-seller">
                                <div class="row">
                                    <!-- Single-product start -->
                                    <?php
									$sql = "SELECT * FROM product ORDER BY RAND() DESC LIMIT 8";
									$result = mysqli_query($conn, $sql);
									while ($row = $result->fetch_assoc()) {
										echo '<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-label sale-label">sale</span>
												<span class="pro-price-2">$ ' . $row['price_out'] . '
												</span>
												<a href="single-product.html">
												<img src="admin/' . $row['thumbnail'] . '" alt="" style="height:270px" />
												</a>
											</div>
											<div class="product-info clearfix text-center">
												<div class="fix">
													<h4 class="post-title">
													<a href="product.php?product=' . $row['id'] . '">' . $row['name'] . '</a>
													</h4>
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
                            <div class="tab-pane" id="out-of-stock">
                                <div class="row">
                                    <!-- Single-product start -->
                                    <?php
									$sql = "SELECT * FROM product ORDER BY quantity ASC LIMIT 8";
									$result = mysqli_query($conn, $sql);
									while ($row = $result->fetch_assoc()) {
										echo '<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-label new-label">Low Stock</span>
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
                            <div class="tab-pane" id="discounts">
                                <div class="row">
								<?php
									$sql = "SELECT * FROM product ORDER BY discount DESC LIMIT 8";
									$result = mysqli_query($conn, $sql);
									while ($row = $result->fetch_assoc()) {
										echo '<div class="col-xl-3 col-lg-4 col-md-6">
										<div class="single-product">
											<div class="product-img">
												<span class="pro-label new-label"> - ' . $row['discount'] . ' %</span>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- PURCHASE-ONLINE-AREA END -->
        <!-- BRAND-LOGO-AREA START -->
        <div class="brand-logo-area pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand">
                            <div class="brand-slider">
								<?php
								// lấy toàn bộ brand trong database bảng brand
								$sql = "SELECT * FROM brand";
								$result = mysqli_query($conn, $sql);
								while ($row = $result->fetch_assoc()) {
									echo '
								<div class="single-brand">
									<a href="#"><img src="admin/' . $row['thumbnail'] . '" alt=""  style="height:35px;filter: brightness(0.1);" /></a>
								</div>';
								}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BRAND-LOGO-AREA END -->
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