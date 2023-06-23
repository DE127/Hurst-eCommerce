<!-- module edit category (status, thumbnail, name, description php)-->
<?php

$error = false;

if (isset($_POST['btn-save'])) {
    // Clean user inputs to prevent SQL injection
    $id = $_POST['id'];
    $status = trim($_POST['status']);
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    // Validate input fields
    if (empty($name)) {
        $error = true;
        $name_error = "Please enter a name.";
    } elseif (strlen($name) < 3) {
        $error = true;
        $name_error = "Name must have at least 3 characters.";
    } elseif (!preg_match("/^[a-zA-Z0-9]+$/", $name)) {
        $error = true;
        $name_error = "Name must contain only letters and numbers.";
    } elseif ($description == "") {
        $error = true;
        $description_error = "Please enter your description.";
    } else {
        $error = false;
    }
    // Update brand information
    if (!$error) {
        $query = "UPDATE brand SET status='$status', name='$name', description='$description' WHERE id='$id'";
        if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] == UPLOAD_ERR_OK) {
            // Lấy thông tin tệp tin ảnh
            $thumbnail_name = $_FILES['thumbnail']['name'];
            $thumbnail_tmp_name = $_FILES['thumbnail']['tmp_name'];
            $thumbnail_size = $_FILES['thumbnail']['size'];
            // Kiểm tra định dạng tệp tin ảnh
            $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
            $thumbnail_extension = pathinfo($thumbnail_name, PATHINFO_EXTENSION);
            if (!in_array($thumbnail_extension, $allowed_types)) {
                echo 'Only JPG, JPEG, PNG, and GIF files are allowed.';
                exit;
            }
            // Kiểm tra kích thước tệp tin ảnh
            $max_size = 1048576; // 1MB
            if ($thumbnail_size > $max_size) {
                echo 'File size must be less than 1MB.';
                exit;
            }
            // Tạo tên mới cho tệp tin ảnh
            $thumbnail_new_name = uniqid() . '_' . $thumbnail_name;
            // Lưu trữ tệp tin ảnh vào thư mục uploads
            $uploads_dir = 'uploads/brand/';
            $thumbnail_path = $uploads_dir . $thumbnail_new_name;
            move_uploaded_file($thumbnail_tmp_name, $thumbnail_path);
            // Cập nhật đường dẫn tới ảnh mới trong cơ sở dữ liệu
            $query .= ", thumbnail='$thumbnail_path'";
            // Hiển thị thông báo tải lên thành công
            echo 'Thumbnail uploaded successfully.';
        }
        if (mysqli_query($conn, $query)) {
            $successmsg = "Category updated successfully.";
        } else {
            $errormsg = "Error in updating category...Please try again later!";
        }
    }
} // Get category information from database
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM brand WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $status = $row['status'];
    $name = $row['name'];
    $description = $row['description'];
    $thumbnail = $row['thumbnail'];
}
?>