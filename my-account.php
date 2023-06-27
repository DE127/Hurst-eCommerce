<!doctype html>
<html class="no-js" lang="en">

<?php
include_once 'elements\head.php';
include_once 'config\conn.php';
?>

<body>
    <!-- WRAPPER START -->
    <div class="wrapper bg-dark-white">

        <?php
		include_once 'elements\header.php';
		require_once 'session.php';

		$error = false;

		$id = $_SESSION['customer_id'];
		$sql = "SELECT * FROM customer WHERE id = '$id' LIMIT 1";
		$order = mysqli_query($conn, 'SELECT * FROM `order` WHERE customer_id = ' . $id);
		$result = mysqli_query($conn, $sql);
		$customer = mysqli_fetch_assoc($result);

		if (isset($_POST['btn-save-info'])) {
			// Clean user inputs to prevent SQL injection
			$fullname = trim($_POST['fullname']);
			$username = trim($_POST['username']);
			$phone = trim($_POST['phone']);
			$address = trim($_POST['address']);
			$birthday = trim($_POST['birthday']);
			$sex = trim($_POST['sex']);

			if ($address == "") {
				$error = true;
				$address_error = "Please enter your address.";
			} else {
				$error = false;
			}

			if (empty($fullname)) {
				$error = true;
				$fullname_error = "Please enter your full name.";
			}
			if (isset($_FILES["avatar"])) {
				$avatar = $_FILES["avatar"]["name"];
				// rest of the code that uses $logo variable
			} else {
				$avatar = "";
				echo 'No file uploaded!';
			}

			if (!$error) {
				$query = "UPDATE customer SET fullname='$fullname', phone='$phone', address='$address', birthday='$birthday', sex='$sex'";
				// Kiểm tra xem người dùng đã tải lên ảnh mới chưa
				if (!empty($avatar)) {
					// Kiểm tra định dạng tệp tin avatar
					$allowed_formats = array('jpg', 'jpeg', 'png', 'gif');
					$file_info = pathinfo($_FILES['avatar']['name']);
					$file_extension = strtolower($file_info['extension']);
					if (!in_array($file_extension, $allowed_formats)) {
						$error_message = 'Invalid file format for avatar. Allowed formats: ' . implode(', ', $allowed_formats);
					}

					// Kiểm tra kích thước tệp tin avatar
					if ($_FILES['avatar']['size'] > 1000000) {
						$error_message = 'avatar file size must be less than 1MB';
					}

					// tạo tên mới cho tệp tin avatar
					$avatar = uniqid() . '_' . $avatar;

					// Lưu trữ tệp tin avatar vào thư mục uploads
					$uploads_dir = 'admin/uploads/avatars/customer/';
					$avatar_path = $uploads_dir . $avatar;
					move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar_path);

					// Cập nhật đường dẫn tới avatar mới trong cơ sở dữ liệu
					$query .= ", avatar='$avatar_path'";
				}
				// Kiểm tra xem có lỗi nào xảy ra không
				if (isset($error_message)) {
					echo '<p>' . $error_message . '</p>';
				} else {
					$query .= " WHERE id=$id";
					// Thêm thông tin cửa hàng vào cơ sở dữ liệu
					if ($conn->query($query) === true) {
						// reload lại trang để hiển thị thông tin mới bằng js
						echo '<script>
                window.location.href = "my-account.php";
                console.log("Information updated successfully");
                </script>';
					} else {
						echo '<script>alert("Error update information.");</script>';
					}
				}
			}
		}

		?>
        <!-- HEADING-BANNER START -->
        <div class="heading-banner-area overlay-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-banner">
                            <div class="heading-banner-title">
                                <h2>My Account</h2>
                            </div>
                            <div class="breadcumbs pb-15">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li>My Account</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADING-BANNER END -->
        <!-- MY-ACCOUNT-AREA START -->
        <div class="my-account-area  pt-80 pb-80">
            <div class="container">
                <div class="my-account">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel-group" id="accordion">
                                <div class="panel mb-2">
                                    <div class="my-account-menu">
                                        <a data-bs-toggle="collapse" href="#my-info">
                                            My Personal Information
                                        </a>
                                    </div>
                                    <div id="my-info" class="panel-collapse collapse show" data-bs-parent="#accordion">
                                        <div class="panel-body">
                                            <div class="billing-details shop-cart-table">
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <input type="text" placeholder="Your name here..." name="fullname"
                                                        value="<?php echo $customer['fullname'] ?>">
                                                    <input type="text" placeholder="Email address here..." name="email"
                                                        value="<?php echo $customer['email'] ?>">
                                                    <input type="text" placeholder="Phone here..." name="phone"
                                                        value="<?php echo $customer['phone'] ?>">
                                                    <input type="date" name="birthday" placeholder="Birthday here..."
                                                        value="<?php echo $customer['birthday'] ?>">
                                                    <select class="custom-select mb-15" name="sex">
                                                        <option>Sex</option>
                                                        <option value="1">Male</option>
                                                        <option value="0">Female</option>
                                                        <option value="2">Other</option>
                                                    </select>
                                                    <textarea placeholder="Your address here..." class="custom-textarea"
                                                        name="address"><?php echo $customer['address'] ?></textarea><br>
                                                    <label for="avatar">Avatar</label>
                                                    <input type="file" name="avatar">
                                                    <button type="submit" data-text="Save"
                                                        class="button-one submit-button mt-15"
                                                        name="btn-save-info">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel mb-2">
                                    <div class="my-account-menu">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#my-billing">
                                            My Billing address
                                        </a>
                                    </div>
                                    <div id="my-billing" class="panel-collapse collapse" data-bs-parent="#accordion">
                                        <div class="panel-body">
                                            <div class="billing-details shop-cart-table">
                                                <input type="text" placeholder="Your name here..." name="fullname"
                                                    value="<?php echo $customer['fullname'] ?>"=>
                                                <input type="text" placeholder="Email address here..." name="email"
                                                    value="<?php echo $customer['email'] ?>">
                                                <input type="text" placeholder="Phone here..." name="phone"
                                                    value="<?php echo $customer['phone'] ?>">
                                                <input type="date" name="birthday" placeholder="Birthday here..."
                                                    value="<?php echo $customer['birthday'] ?>">
                                                <textarea placeholder="Your address here..." class="custom-textarea"
                                                    name="address"><?php echo $customer['address'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel mb-2 mb-md-0">
                                    <div class="my-account-menu">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#my-order">
                                            Order history and details
                                        </a>
                                    </div>
                                    <div id="my-order" class="panel-collapse collapse" data-bs-parent="#accordion">
                                        <div class="panel-body">
                                            <div class="our-order payment-details shop-cart-table">
                                                <table>
                                                    <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                                        <tr class="text-start text-muted text-uppercase gs-0">
                                                            <th class="min-w-100px">order No.</th>
                                                            <th>Amount</th>
                                                            <th class="min-w-100px">Update</th>
                                                            <th class="min-w-100px">Ship</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                                        <?php
														while ($row2 = mysqli_fetch_assoc($order)) {
															echo '<tr>
													<td>
														<a href="?action=sales&query=details&id=' . $row2['id'] . '" class="text-gray-600 text-hover-primary mb-1">#' . $row2['id'] . '</a>
													</td>';
															echo '<td>' . $row2['total'] . '</td>
													<td>' . $row2['date_update'] . '</td>
													<td>' . $row2['date_ship'] . '</td>
												</tr>';
														}
														?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel-group" id="accordion-2">
                                <div class="panel mb-2">
                                    <div class="my-account-menu">
                                        <a data-bs-toggle="collapse" href="#my-payment-method">
                                            My Payment Method
                                        </a>
                                    </div>
                                    <div id="my-payment-method" class="panel-collapse collapse show"
                                        data-bs-parent="#accordion-2">
                                        <div class="panel-body">
                                            <div class="payment-method  shop-cart-table">
                                                <div class="payment-accordion">
                                                    <!-- Accordion start  -->
                                                    <h3 class="payment-accordion-toggle active">Direct Bank Transfer
                                                    </h3>
                                                    <div class="payment-content default">
                                                        <p>Make your payment directly into our bank account. Please use
                                                            your Order ID as the payment reference. Your order won't be
                                                            shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                    <!-- Accordion end -->
                                                    <!-- Accordion start -->
                                                    <h3 class="payment-accordion-toggle">Cheque Payment</h3>
                                                    <div class="payment-content">
                                                        <p>Please send your cheque to Store Name, Store Street, Store
                                                            Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                    <!-- Accordion end -->
                                                    <!-- Accordion start -->
                                                    <h3 class="payment-accordion-toggle">PayPal</h3>
                                                    <div class="payment-content">
                                                        <p>Pay via PayPal; you can pay with your credit card if you
                                                            don�t have a PayPal account.</p>
                                                        <a href="#"><img alt="" src="img/payment/1.png"></a>
                                                        <a href="#"><img alt="" src="img/payment/2.png"></a>
                                                        <a href="#"><img alt="" src="img/payment/3.png"></a>
                                                        <a href="#"><img alt="" src="img/payment/4.png"></a>
                                                    </div>
                                                    <!-- Accordion end -->
                                                    <button type="submit" data-text="place order"
                                                        class="button-one submit-button mt-15">place order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="my-account-menu my-account-menu-2">
                                        <a href="wishlist.php">
                                            My Wishlist
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MY-ACCOUNT-CART-AREA END -->
        <!-- FOOTER START -->
        <?php include_once 'elements\footer.php' ?>
        <!-- FOOTER END -->

    </div>
    <!-- WRAPPER END -->

    <!-- all js here -->
    <?php include_once 'elements\js.php' ?>
</body>

</html>