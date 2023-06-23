<?php
session_start();

// Kiểm tra xem sản phẩm đã được thêm vào giỏ hàng chưa
if (isset($_POST['add-to-cart'])) {
	// Lấy thông tin sản phẩm từ form
	$product_id = $_POST['product_id'];
	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_quantity = $_POST['product_quantity'];

	// Tạo mảng chứa thông tin sản phẩm
	$product = array(
		'id' => $product_id,
		'name' => $product_name,
		'price' => $product_price,
		'quantity' => $product_quantity
	);
	// Thêm sản phẩm vào giỏ hàng
	if (isset($_SESSION['cart'])) {
		// Nếu giỏ hàng đã có sản phẩm
		$found = false;
		foreach ($_SESSION['cart'] as $key => $value) {
			if ($value['id'] == $product_id) {
				// Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
				$_SESSION['cart'][$key]['quantity'] += $product_quantity;
				$found = true;
				break;
			}
		}
		if (!$found) {
			// Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm sản phẩm mới vào giỏ hàng
			array_push($_SESSION['cart'], $product);
			// nếu thêm thành công thì chuyển hướng sang trang giỏ hàng
			// header('Location: cart.php');
		}
	} else {
		// Nếu giỏ hàng chưa có sản phẩm, tạo giỏ hàng mới
		$_SESSION['cart'] = array($product);
	}

}
// làm sạch giỏ hàng php
if (isset($_GET['action'])) {
	if ($_GET['action'] == 'delete') {
		foreach ($_SESSION['cart'] as $key => $value) {
			if ($value['id'] == $_GET['id']) {
				unset($_SESSION['cart'][$key]);
			}
		}
	}
}
// xóa sản phẩm khỏi giỏ hàng
if (isset($_POST['update'])) {
	foreach ($_SESSION['cart'] as $key => $value) {
		if ($value['id'] == $_POST['id']) {
			unset($_SESSION['cart'][$key]);
		}
	}
}
// xóa giỏ hàng
if (isset($_POST['delete'])) {
	unset($_SESSION['cart']);
}
?>
<!-- HEADER-AREA START -->
<header id="sticky-menu" class="header header-2">
	<div class="header-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 offset-md-4 col-7">
					<div class="logo text-md-center">
						<a href="index.php"><img src="img/logo/logo.png" alt="" /></a>
					</div>
				</div>
				<div class="col-md-4 col-5">
					<div class="mini-cart text-end">
						<ul>
							<?php
							// kiểm tra xem có sản phẩm trong giỏ hàng hay không
							// nếu có thì hiển thị số lượng sản phẩm
							// nếu không thì hiển thị 0
							if(isset($_SESSION['cart'])) {
								$totalitem = 0;
								foreach($_SESSION['cart'] as $product) {
									$totalitem += $product['quantity'];
								}
								echo '<li>
								<a class="cart-icon" href="#"><i class="zmdi zmdi-shopping-cart"></i><span>'.$totalitem.'</span>
								</a>
								
								';
							} else {
								echo '<li><a class="cart-icon" href="#"><i class="zmdi zmdi-shopping-cart"></i><span>0</span></a>';
							}

							?>
							<li>
								<a class="cart-icon" href="#">
									<i class="zmdi zmdi-shopping-cart"></i>
									<span><?php $totalitem = 0; foreach($_SESSION['cart'] as $product) { $totalitem += $product['quantity'];}echo $totalitem;?></span>
								</a>
								<div class="mini-cart-brief text-left">
									<div class="cart-items">
										<p class="mb-0">You have <span><?php $totalitem = 0; foreach($_SESSION['cart'] as $product) { $totalitem += $product['quantity'];}echo $totalitem;?> items</span> in your shopping bag</p>
									</div>
									<?php foreach ($_SESSION['cart'] as $product): ?>
									<div class="all-cart-product clearfix">
										<div class="single-cart clearfix">
											<div class="cart-photo">
												<a href="#"><img src="img/cart/1.jpg" alt="" /></a>
											</div>
											<div class="cart-info">
												<h5><a href="#"><?php echo $product['name']; ?></a></h5>
												<p class="mb-0">Price : $ <?php echo $product['price'] * $product['quantity']; ?></p>
												<p class="mb-0">Qty : <?php echo $product['quantity']; ?> </p>
												<form method="post" action="">
													<input type="hidden" name="id" value="<?php echo $product['id']; ?>">
													<button type="submit" name="update" class="btn"><i
															class="zmdi zmdi-close"></i></button>
												</form>
											</div>
										</div>
									</div>
									<?php endforeach; ?>
									<div class="cart-totals">
										<h5 class="mb-0">Total: <span class="floatright"> $ <?php $total = 0; foreach($_SESSION['cart'] as $product) { $total += $product['price'] * $product['quantity'];}echo $total;?>.00</span></h5>
									</div>
									<div class="cart-bottom  clearfix">
										<a href="cart.html" class="button-one floatleft text-uppercase"
											data-text="View cart">View cart</a>
										<a href="checkout.html" class="button-one floatright text-uppercase"
											data-text="Check out">Check out</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- MAIN-MENU START -->
	<div class="menu-toggle menu-toggle-2 hamburger hamburger--emphatic d-none d-md-block">
		<div class="hamburger-box">
			<div class="hamburger-inner"></div>
		</div>
	</div>
	<div class="main-menu  d-none d-md-block">
		<nav aria-label="">
			<ul>
				<li><a href="index.php">home</a>
				</li>
				<li><a href="shop.html">products</a>
					<div class="mega-menu menu-scroll">
						<div class="table">
							<div class="table-cell">
								<div class="half-width">
									<ul>
										<li class="menu-title">best brands</li>
										<li><a href="#">henning koppel</a></li>
										<li><a href="#">jehs + Laub</a></li>
										<li><a href="#">vicke lindstrand</a></li>
										<li><a href="#">don chadwick</a></li>
										<li><a href="#">akiko kuwahata</a></li>
										<li><a href="#">barbro berlin</a></li>
										<li><a href="#">cecilia hall</a></li>
										<li><a href="#">don chadwick</a></li>
									</ul>
								</div>
								<div class="half-width">
									<ul>
										<li class="menu-title">popular calatories</li>
										<li><a href="#">akiko kuwahata</a></li>
										<li><a href="#">barbro berlin</a></li>
										<li><a href="#">cecilia hall</a></li>
										<li><a href="#">don chadwick</a></li>
										<li><a href="#">henning koppel</a></li>
										<li><a href="#">jehs + Laub</a></li>
										<li><a href="#">vicke lindstrand</a></li>
										<li><a href="#">don chadwick</a></li>
									</ul>
								</div>
								<div class="full-width">
									<div class="mega-menu-img">
										<a href="single-product.html"><img src="img/megamenu/1.jpg" alt="" /></a>
									</div>
								</div>
								<div class="pb-80"></div>
							</div>
						</div>
					</div>
				</li>
				<li><a href="shop-sidebar.html">accesories</a></li>
				<li><a href="shop-list.html">lookbook</a></li>
				<li><a href="#">pages</a>
					<div class="sub-menu menu-scroll">
						<ul>
							<li class="menu-title">Page's</li>
							<li><a href="shop-sidebar.html">Shop Sidebar</a></li>
							<li><a href="shop-list.html">Shop List</a></li>
							<li><a href="single-product.html">Single Product</a></li>
							<li><a href="single-product-sidebar.html">Single Product Sidebar</a></li>
							<li><a href="cart.html">Shopping Cart</a></li>
							<li><a href="wishlist.html">Wishlist</a></li>
							<li><a href="checkout.html">Checkout</a></li>
							<li><a href="order.html">Order</a></li>
							<li><a href="login.html">login / Registration</a></li>
							<li><a href="my-account.html">My Account</a></li>
						</ul>
					</div>
				</li>
				<li><a href="about.html">about us</a></li>
				<li><a href="contact.html">contact</a></li>
			</ul>
		</nav>
	</div>
	<!-- MAIN-MENU END -->
</header>
<!-- HEADER-AREA END -->
<!-- Mobile-menu start -->
<div class="mobile-menu-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 d-block d-md-none">
				<div class="mobile-menu">
					<nav id="dropdown" aria-label="">
						<ul>
							<li><a href="index.php">home</a>
							</li>
							<li><a href="shop.html">products</a>
								<div class="mega-menu menu-scroll">
									<div class="table">
										<div class="table-cell">
											<div class="half-width">
												<ul>
													<li class="menu-title">best brands</li>
													<li><a href="#">henning koppel</a></li>
													<li><a href="#">jehs + Laub</a></li>
													<li><a href="#">vicke lindstrand</a></li>
													<li><a href="#">don chadwick</a></li>
													<li><a href="#">akiko kuwahata</a></li>
													<li><a href="#">barbro berlin</a></li>
													<li><a href="#">cecilia hall</a></li>
													<li><a href="#">don chadwick</a></li>
												</ul>
											</div>
											<div class="half-width">
												<ul>
													<li class="menu-title">popular calatories</li>
													<li><a href="#">akiko kuwahata</a></li>
													<li><a href="#">barbro berlin</a></li>
													<li><a href="#">cecilia hall</a></li>
													<li><a href="#">don chadwick</a></li>
													<li><a href="#">henning koppel</a></li>
													<li><a href="#">jehs + Laub</a></li>
													<li><a href="#">vicke lindstrand</a></li>
													<li><a href="#">don chadwick</a></li>
												</ul>
											</div>
											<div class="full-width">
												<div class="mega-menu-img">
													<a href="single-product.html"><img src="img/megamenu/1.jpg"
															alt="" /></a>
												</div>
											</div>
											<div class="pb-80"></div>
										</div>
									</div>
								</div>
							</li>
							<li><a href="shop-sidebar.html">accesories</a></li>
							<li><a href="shop-list.html">lookbook</a></li>
							<li><a href="#">pages</a>
								<div class="sub-menu menu-scroll">
									<ul>
										<li class="menu-title">Page's</li>
										<li><a href="shop-sidebar.html">Shop Sidebar</a></li>
										<li><a href="shop-list.html">Shop List</a></li>
										<li><a href="single-product.html">Single Product</a></li>
										<li><a href="single-product-sidebar.html">Single Product Sidebar</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li><a href="wishlist.html">Wishlist</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="order.html">Order</a></li>
										<li><a href="login.html">login / Registration</a></li>
										<li><a href="my-account.html">My Account</a></li>
									</ul>
								</div>
							</li>
							<li><a href="about.html">about us</a></li>
							<li><a href="contact.html">contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Mobile-menu end -->