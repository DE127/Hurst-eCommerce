<?php
include_once(__DIR__ . "/../../../config/config.php");

$error = false;

if (isset($_POST['btn-save-info'])) {
    // Clean user inputs to prevent SQL injection
    $firstname = trim($_POST['fname']);
    $lastname = trim($_POST['lname']);
    $fullname = $firstname . " " . $lastname;
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);

    // Validate input fields
    if (strlen($username) < 3) {
        $error = true;
        $username_error = "Username must have at least 3 characters.";
    } elseif (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
        $error = true;
        $username_error = "Username must contain only letters and numbers.";
    } elseif ($address == "") {
        $error = true;
        $address_error = "Please enter your address.";
    } elseif ($email == "") {
        $error = true;
        $email_error = "Please enter your email address.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please enter valid email address.";
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

    // Update admin information
    if (!$error) {
        $admin_id = $_SESSION['admin'];
        $query = "UPDATE admin SET fullname='$fullname', phone='$phone', address='$address'";
        // if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == UPLOAD_ERR_OK) {
        //     $avatar_path = 'uploads/avatar/' . $_FILES['avatar']['name'];
        //     move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar_path);
        //     $query .= ", avatar='$avatar_path'";
        // }
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
            if ($_FILES['avatar']['size'] > 5000000) {
                $error_message = 'avatar file size must be less than 1MB';
            }

            // tạo tên mới cho tệp tin avatar
            $avatar = uniqid() . '_' . $avatar;

            // Lưu trữ tệp tin avatar vào thư mục uploads
            $uploads_dir = 'uploads/avatars/';
            $avatar_path = $uploads_dir . $avatar;
            move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar_path);

            // Cập nhật đường dẫn tới avatar mới trong cơ sở dữ liệu
            $query .= ", avatar='$avatar_path'";
        }
        // Kiểm tra xem có lỗi nào xảy ra không
        if (isset($error_message)) {
            echo '<p>' . $error_message . '</p>';
        } else {
            $query .= " WHERE id=$admin_id";
            // Thêm thông tin cửa hàng vào cơ sở dữ liệu
            if ($conn->query($query) === true) {
                // reload lại trang để hiển thị thông tin mới bằng js
                echo '<script>console.log("Information updated successfully");</script>';
            } else {
                echo '<script>alert("Error update information.");</script>';
            }
        }
    }
}

mysqli_close($conn);
?>