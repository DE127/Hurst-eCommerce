<?php
include_once(__DIR__ . "/../../../config/config.php");

$error = false;
// Kiểm tra xem người dùng đã gửi biểu mẫu hay chưa
if (isset($_POST['btn-save-deactivate'])) {
    // Update admin information
    if (!$error) {
        $admin_id = $_SESSION['admin_id'];
        $query = "UPDATE admin SET `status` ='0' WHERE id = '$admin_id'";
        // thực hiện câu lệnh sql
        if (mysqli_query($conn, $query)) {
            // hủy session
            header("Location: login.php");
            session_unset();
            session_destroy();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
    exit();
}
?>