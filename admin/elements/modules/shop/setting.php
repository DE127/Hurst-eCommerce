<!-- module setting.php -->
<?php
include_once(__DIR__ . "/../../../config/config.php");
// include_once '/../../../../session.php';

$error = false;


// Kiểm tra xem người dùng đã gửi thông tin chưa
if (isset($_POST['btn-save'])) {
    // Lấy dữ liệu từ biểu mẫu
    $name = $_POST['store_name'];
    $address = $_POST['store_address'];
    $currency = 'USD';
    $phone = $_POST['store_phone'];
    $email = $_POST['store_email'];
    $facebook = $_POST['store_facebook'];
    $map = $_POST['store_map'];
    $status = 1;

    // Kiểm tra xem đã nhập đầy đủ thông tin chưa
    if (empty($name)) {
        $error = true;
        $error_message = 'Please enter store name';
    }
    if (empty($address)) {
        $error = true;
        $error_message = 'Please enter store address';
    }
    if (empty($currency)) {
        $error = true;
        $error_message = 'Please enter store currency';
    }
    if (empty($phone)) {
        $error = true;
        $error_message = 'Please enter store phone';
    }
    if (empty($email)) {
        $error = true;
        $error_message = 'Please enter store email';
    }
    if (empty($facebook)) {
        $error = true;
        $error_message = 'Please enter store facebook';
    }
    if (empty($map)) {
        $error = true;
        $error_message = 'Please enter store map';
    }
    if (isset($_FILES["logo"])) {
        $logo = $_FILES["logo"]["name"];
        // rest of the code that uses $logo variable
    } else {
        $logo = "";
        echo 'No file uploaded!';
    }
    $query = "UPDATE `store_detail` SET `name` = '$name', `address` = '$address', `currency` = '$currency', `phone` = '$phone', `email` = '$email', `facebook` = '$facebook', `map` = '$map', `status` = '$status' WHERE `store_detail`.`id` = 1;";
    // Kiểm tra xem tệp tin logo đã được tải lên chưa
    if (!empty($logo)) {
        // Kiểm tra định dạng tệp tin logo
        $allowed_formats = array('jpg', 'jpeg', 'png', 'gif');
        $file_info = pathinfo($_FILES['logo']['name']);
        $file_extension = strtolower($file_info['extension']);
        if (!in_array($file_extension, $allowed_formats)) {
            $error_message = 'Invalid file format for logo. Allowed formats: ' . implode(', ', $allowed_formats);
        }

        // Kiểm tra kích thước tệp tin logo
        if ($_FILES['logo']['size'] > 1000000) {
            $error_message = 'Logo file size must be less than 1MB';
        }

        // tạo tên mới cho tệp tin logo
        $logo = uniqid() . '_' . $logo;

        // Lưu trữ tệp tin logo vào thư mục uploads
        $uploads_dir = 'uploads/shop/';
        $logo_path = $uploads_dir . $logo;
        move_uploaded_file($_FILES['logo']['tmp_name'], $logo_path);

        // Cập nhật đường dẫn tới logo mới trong cơ sở dữ liệu
        $query = "UPDATE `store_detail` SET `name` = '$name', `address` = '$address', `currency` = '$currency', `phone` = '$phone', `email` = '$email', `facebook` = '$facebook', `logo` = '$logo_path', `map` = '$map', `status` = '$status' WHERE `store_detail`.`id` = 1;";
    }

    // Kiểm tra xem có lỗi nào xảy ra không
    if (isset($error_message)) {
        echo '<p>' . $error_message . '</p>';
    } else {
        // Thêm thông tin cửa hàng vào cơ sở dữ liệu
        if ($conn->query($query) === true) {
            echo 'script>alert("Store information added successfully");</script>';
        } else {
            echo 'script>alert("Error adding store information: ' . $conn->error . '");</script>';
        }
    }
}
?>