<?php
include_once '../../config/config.php';
include_once '../session.php';

$conn = $mysqli;

// Nếu form submit
if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ form
    $title = $_POST['title'];
    $description = $_POST['description'];
    $meta_keyword = $_POST['meta_keyword'];
    $meta_description = $_POST['meta_description'];
    $meta_other = $_POST['meta_other'];
    $css = $_POST['css'];
    $js = $_POST['js'];
    $content = $_POST['content'];
    $slug = $_POST['slug'];
    $status = $_POST['status'];

    // Thực hiện truy vấn
    $sql = "INSERT INTO pages (title, description, meta_keyword, meta_description, meta_other, css, js, content, slug, status) VALUES ('$title', '$description', '$meta_keyword', '$meta_description', '$meta_other', '$css', '$js', '$content', '$slug', '$status')";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>