<?php

$error = false;
// Kiểm tra xem người dùng đã gửi biểu mẫu hay chưa
if (isset($_POST['btn-save-email'])) {
    $admin_id = $_SESSION['admin'];
    $newEmail = trim($_POST['emailaddress']);
    $confirmemailpassword = trim($_POST['confirmemailpassword']);

    $query = "SELECT password FROM admin WHERE id=$admin_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // kiểm tra password nhập vào có đúng không
    if (password_verify($confirmemailpassword, $row['password'])) {
        $error = false;
    } else {
        $error = true;
        $confirmemailpassword_error = "Password is incorrect.";
    }

    if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please enter a valid email address.";
    }

    // Update admin information
    if (!$error) {
        $admin_id = $_SESSION['admin_id'];
        $query = "UPDATE admin SET email='$newEmail'";
        $query .= " WHERE id=$admin_id";
        mysqli_query($conn, $query);
    }

    echo '<script>console.log("Email updated successfully");</script>';

    // Cập nhật lại session
    $_SESSION['email'] = $newEmail;

    // Hiển thị trang thay đổi email
    // code here...

}
?>
