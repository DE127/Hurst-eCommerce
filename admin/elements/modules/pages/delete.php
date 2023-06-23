<?php
include_once '../../config/config.php';
include_once '../session.php';

$conn = $mysqli;

// Lấy ID trang cần xóa
$id = $_GET['id'];

// Thực hiện truy vấn
$sql = "DELETE FROM pages WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    // Chuyển hướng về trang danh sách
    header('Location: page_list.php');
} else {
    echo "Lỗi: " . $conn->error;
}
exit();
?>