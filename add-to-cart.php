<?php
session_start();

// Kiểm tra xem sản phẩm đã được thêm vào giỏ hàng chưa
if(isset($_POST['add-to-cart'])) {
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
    if(isset($_SESSION['cart'])) {
        // Nếu giỏ hàng đã có sản phẩm
        $found = false;
        foreach($_SESSION['cart'] as $key => $value) {
            if($value['id'] == $product_id) {
                // Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
                $_SESSION['cart'][$key]['quantity'] += $product_quantity;
                $found = true;
                break;
            }
        }
        echo 'ok';
        if(!$found) {
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
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart Page</title>
</head>
<body>
	<h1>Your Cart</h1>
	<table>
		<thead>
			<tr>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<!-- Loop through the products in the cart and display them -->
			<?php foreach($_SESSION['cart'] as $product): ?>
				<tr>
					<td><?php echo $product['name']; ?></td>
					<td><?php echo $product['price']; ?></td>
					<td><?php echo $product['quantity']; ?></td>
					<td><?php echo $product['price'] * $product['quantity']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3">Total:</td>
				<td><?php $total = 0; foreach($_SESSION['cart'] as $product) { $total += $product['price'] * $product['quantity'];}echo $total;?></td>
			</tr>
		</tfoot>
	</table>
</body>
</html>
