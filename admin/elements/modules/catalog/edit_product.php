<!-- module edit product (status, thumbnail, name, description,.... )-->
<?php

$error = false;

if (isset($_POST['btn-save'])) {
    $id = $_GET['id'];
    // Clean user inputs to prevent SQL injection
    $name = trim($_POST['product_name']);
    $description = trim($_POST['description']);
    $price_in = trim($_POST['price_in']);
    $price_out = trim($_POST['price_out']);
    $quantity = trim($_POST['quantity']);
    $discount = trim($_POST['discount']);
    $product_type_id = trim($_POST['product_type_id']);
    $brand_id = trim($_POST['brand_id']);
    $status = trim($_POST['status']);
    // Validate input fields

    // check ' in name and description
    $name = str_replace("'", "\'", $name);
    $description = str_replace("'", "\'", $description);

    if (empty($name)) {
        $error = true;
        $name_error = "Please enter a name.";
    } elseif ($description == "") {
        $error = true;
        $description_error = "Please enter your description.";
    } elseif ($price_in == "") {
        $error = true;
        $price_in_error = "Please enter your price_in.";
    } elseif ($price_out == "") {
        $error = true;
        $price_out_error = "Please enter your price_out.";
    } elseif ($quantity == "") {
        $error = true;
        $quantity_error = "Please enter your quantity.";
    } elseif ($discount == "") {
        $error = true;
        $discount_error = "Please enter your discount.";
    } elseif ($product_type_id == "") {
        $error = true;
        $product_type_id_error = "Please enter your product_type_id.";
    } elseif ($brand_id == "") {
        $error = true;
        $brand_id_error = "Please enter your brand_id.";
    } elseif ($status == "") {
        $error = true;
        $status_error = "Please enter your status.";
    }
    // Update category information
    if (!$error) {
        $query = "UPDATE product SET name='$name', description='$description', price_in='$price_in', price_out='$price_out', quantity='$quantity', discount='$discount', product_type_id='$product_type_id', brand_id='$brand_id', status='$status'";
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
            // get thumbnail in database
            $getthumbnail = "SELECT thumbnail FROM product WHERE id = '$id'";
            $result = mysqli_query($conn, $getthumbnail);
            $row = mysqli_fetch_assoc($result);
            $thumbnail_old = $row['thumbnail'];

            // Tạo tên mới cho tệp tin ảnh
            $thumbnail_new_name = uniqid() . '_' . $thumbnail_name;

            // Lưu trữ tệp tin ảnh vào thư mục uploads
            $uploads_dir = 'uploads/thumbnails/product/';
            $thumbnail_path = $uploads_dir . $thumbnail_new_name;
            move_uploaded_file($thumbnail_tmp_name, $thumbnail_path);
            // Cập nhật đường dẫn tới ảnh mới trong cơ sở dữ liệu
            $query .= ", thumbnail='$thumbnail_path'";
            // Hiển thị thông báo tải lên thành công
            echo '<script>console.log("Thumbnail uploaded successfully.")</script>';
        }
        $query .= " WHERE id='$id'";
        if (mysqli_query($conn, $query)) {
            // xóa thumbnail cũ
            unlink($thumbnail_old);
            $successmsg = "Category added successfully.";
            echo '6';
        } else {
            $errormsg = "Error in adding category...Please try again later!";
            echo '7';
        }
        // vòng lặp thêm nhiều ảnh
        if (isset($_FILES['image'])) {
            $errors = array();
            $file_name_array = array();
            echo '8';
            foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
                $file_name = $_FILES['image']['name'][$key];
                $file_size = $_FILES['image']['size'][$key];
                $file_tmp = $_FILES['image']['tmp_name'][$key];
                $file_type = $_FILES['image']['type'][$key];
                if ($file_size > 2097152) {
                    $errors[] = 'File size must be less than 2 MB';
                }

                if ($_FILES['image']['name'][$key] != '') {
                    $file_name = $_FILES['image']['name'][$key];
                    $file_name_parts = explode('.', $file_name);
                    $file_ext = strtolower(end($file_name_parts));
                } else {
                    echo "some image wrong";
                    $error = true;
                }
                $extensions = array("jpeg", "jpg", "png");
                // tạo tên mới cho ảnh
                $file_name = uniqid() . '_' . $file_name;
                if (in_array($file_ext, $extensions) === false) {
                    $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
                }
                if (empty($errors)) {
                    $file_name_array[] = $file_name;
                    move_uploaded_file($file_tmp, "uploads/medias/" . $file_name);
                }
            }
            $query_gallery = "SELECT * FROM product_image WHERE product_id = '$id'";
            $result_gallery = mysqli_query($conn, $query_gallery);
            if (empty($errors)) {
                // lưu tên file vào cơ sở dữ liệu 'content'
                while ($row_gallery = mysqli_fetch_assoc($result_gallery)) {
                    $gallery = $row_gallery['gallery'];
                    $gallery = explode(',', $gallery);
                    foreach ($gallery as $value) {
                        unlink('uploads/medias/' . $value);
                    }
                }
                $file_name_str = implode(",", $file_name_array);
                $query = "INSERT INTO product_image (product_id, status, image) VALUES ('$result', '$status', '$file_name_str');";
                // Lưu các tên file vào cơ sở dữ liệu hoặc thực hiện các hành động khác ở đây
                if (mysqli_query($conn, $query)) {
                    $successmsg = "Product added successfully.";
                } else {
                    $errormsg = "Error in adding Product...Please try again later!";
                }
            } else {
                print_r($errors);
            }
        }
    }
}
