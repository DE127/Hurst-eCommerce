<!-- module add category (status, thumbnail, name, description php)-->
<?php

$error = false;

if (isset($_POST['btn-save'])) {
    // Clean user inputs to prevent SQL injections
    $status = $_POST['status'];
    $name = trim($_POST['product_name']);
    // description from the quill editor
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
    } else {
        $error = false;
    }

    if (isset($_FILES["thumbnail"])) {
        $thumbnail = $_FILES["thumbnail"]["name"];
        // rest of the code that uses $logo variable
    } else {
        $thumbnail = "";
        echo 'No file uploaded!';
    }

    // Update brand information
    if (!$error) {
        $query = "INSERT INTO product_type(status, name, description) VALUES('$status', '$name', '$description')";
        // Kiểm tra xem người dùng đã tải lên ảnh mới chưa
        if (!empty($thumbnail)) {
            // Kiểm tra định dạng tệp tin thumbnail
            $allowed_formats = array('jpg', 'jpeg', 'png', 'gif');
            $file_info = pathinfo($_FILES['thumbnail']['name']);
            $file_extension = strtolower($file_info['extension']);
            if (!in_array($file_extension, $allowed_formats)) {
                $error_message = 'Invalid file format for thumbnail. Allowed formats: ' . implode(', ', $allowed_formats);
            }

            // Kiểm tra kích thước tệp tin thumbnail
            if ($_FILES['thumbnail']['size'] > 1000000) {
                $error_message = 'thumbnail file size must be less than 1MB';
            }

            // tạo tên mới cho tệp tin thumbnail
            $thumbnail = uniqid() . '_' . $thumbnail;

            // Lưu trữ tệp tin thumbnail vào thư mục uploads
            $uploads_dir = 'uploads/thumbnails/categories/';
            $thumbnail_path = $uploads_dir . $thumbnail;
            move_uploaded_file($_FILES['thumbnail']['tmp_name'], $thumbnail_path);

            // Cập nhật đường dẫn tới thumbnail mới trong cơ sở dữ liệu
            $query = "INSERT INTO product_type(status, name, description, thumbnail) VALUES('$status', '$name', '$description', '$thumbnail_path')";
        }
        if (mysqli_query($conn, $query)) {
            $successmsg = "category added successfully.";
            // clear form input fields after inserting
            $status = "";
            $name = "";
            $description = "";
        } else {
            $errormsg = "Error in adding category...Please try again later!";
        }
    }

}
?>