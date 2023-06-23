<!-- module edit category (status, thumbnail, name, description php)-->
<?php

$error = false;

if (isset($_POST['btn-save'])) {
    // Clean user inputs to prevent SQL injection
    $id = $_GET['id'];
    $status = trim($_POST['status']);
    $name = trim($_POST['categoryname']);
    $description = trim($_POST['description']);

    // check ' in name and description
    $name = str_replace("'", "\'", $name);
    $description = str_replace("'", "\'", $description);

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

        // Check if name already exists in database
        $query = "SELECT name FROM product_type WHERE name='$name' AND id != '$id'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $error = true;
            $name_error = "Name is already taken.";
        }
    }
    // Update category information
    if (!$error) {
        $query = "UPDATE product_type SET status='$status', name='$name', description='$description' WHERE id='$id'";
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
            $max_size = 5048576; // 1MB
            if ($thumbnail_size > $max_size) {
                echo 'File size must be less than 1MB.';
                exit;
            }
            // xóa ký tự đặc biệt trong tên tệp tin ảnh
            $thumbnail_name = preg_replace("/[^A-Z0-9._-]/i", "_", $thumbnail_name);
            // Tạo tên mới cho tệp tin ảnh
            $thumbnail_new_name = uniqid() . '_' . $thumbnail_name;
            // Lưu trữ tệp tin ảnh vào thư mục uploads
            $uploads_dir = 'uploads/thumbnails/categories/';
            $thumbnail_path = $uploads_dir . $thumbnail_new_name;
            move_uploaded_file($thumbnail_tmp_name, $thumbnail_path);
            // Cập nhật đường dẫn tới ảnh mới trong cơ sở dữ liệu
            $query = "UPDATE product_type SET status='$status', name='$name', description='$description', thumbnail='$thumbnail_path' WHERE id='$id'";
            // Hiển thị thông báo tải lên thành công
            echo 'Thumbnail uploaded successfully.';
        }
        if (mysqli_query($conn, $query)) {
            $successmsg = "Category updated successfully.";
            echo "<script>
                alert('Category updated successfully!');
                window.location.href = '?action=catalog&query=categories';
            </script>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
            $errormsg = "Error in updating category...Please try again later!";
        }
    }
}
?>