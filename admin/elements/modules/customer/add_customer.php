<?php
// nếu nhấn đăng ký
if (isset($_POST['add-customer'])) {
    // Lấy thông tin đăng ký từ biểu mẫu
    $fullname = $_POST['fullname'];
    $username = substr($fullname, 0, 3) . rand(0, 999);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $status = 1;

    // check email từ database xem đã tồn tại chưa
    $sql = "SELECT * FROM customer WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "<script>
                alert('Email already exists!');
                window.location.href = '?action=customers&query=list';
            </script>";
        exit();
    }

    // Mã hóa mật khẩu
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Lưu thông tin đăng ký vào cơ sở dữ liệu
    $sql = "INSERT INTO customer (username, email, password, fullname, status) VALUES ('$username', '$email', '$hashed_password', '$fullname', '$status');";
    if (mysqli_query($conn, $sql)) {
        $successmsg = "Product added successfully.";
        echo "<script>
                window.location.href = '?action=customers&query=list';
            </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>