<?php
// lấy dữ liệu từ bảng store_details
$sql = "SELECT * FROM store_detail";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<footer>
    <!-- Footer-area start -->
    <div class="footer-area footer-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer">
                        <h3 class="footer-title  title-border">Contact Us</h3>
                        <ul class="footer-contact">
                            <li><span>Address :</span><?php echo $row['address'] ?></li>
                            <li><span>Cell-Phone :</span><?php echo $row['phone'] ?></li>
                            <li><span>Email :</span><?php echo $row['email'] ?></li>
                            <li><span>Email :</span><?php echo $row['facebook'] ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="single-footer">
                        <h3 class="footer-title  title-border">accounts</h3>
                        <ul class="footer-menu">
                            <li><a href="my-account.html"><i class="zmdi zmdi-dot-circle"></i>My Account</a></li>
                            <li><a href="wishlist.html"><i class="zmdi zmdi-dot-circle"></i>My Wishlist</a></li>
                            <li><a href="cart.html"><i class="zmdi zmdi-dot-circle"></i>My Cart</a></li>
                            <li><a href="login.html"><i class="zmdi zmdi-dot-circle"></i>Sign In</a></li>
                            <li><a href="checkout.html"><i class="zmdi zmdi-dot-circle"></i>Check out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
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
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer newsletter-item">
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
                        <p class="mb-0">&copy; <a href="https://github.com/DE127" rel="nofollow
                                target="_blank">DE127 </a> 2023. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright-area start -->
</footer>