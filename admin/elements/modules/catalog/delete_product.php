<?php
// ?action=catalog&query=brands&id=4&delete
// xóa brand
if (isset($_GET['action']) && $_GET['query'] == 'products' && isset($_GET['id']) && isset($_GET['delete'])) {
    $brand_id = $_GET['id'];
    $query = "DELETE FROM product WHERE id = '$brand_id'";
    // xóa thumbnail
    $query_thumbnail = "SELECT thumbnail FROM product WHERE id = '$brand_id'";
    $result_thumbnail = mysqli_query($conn, $query_thumbnail);
    $row_thumbnail = mysqli_fetch_assoc($result_thumbnail);
    $thumbnail = $row_thumbnail['thumbnail'];
    unlink($thumbnail);

    // xóa gallery
    $query_gallery = "SELECT * FROM product_image WHERE product_id = '$brand_id'";
    $result_gallery = mysqli_query($conn, $query_gallery);
    // gallery có dạng 648ac5e9605fc_336593990_198964969495579_4173188082530787809_n.jpg,648ac5e9607a1_Male faces-11.png dùng để lưu file ảnh đường đẫn = uploads/medias/
    while ($row_gallery = mysqli_fetch_assoc($result_gallery)) {
        $gallery = $row_gallery['gallery'];
        $gallery = explode(',', $gallery);
        foreach ($gallery as $value) {
            unlink('uploads/medias/' . $value);
        }
    }
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
            alert('Product deleted successfully!');
            window.location.href = 'index.php?action=catalog&query=products';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting product!');
            window.location.href = 'index.php?action=catalog&query=products';
        </script>";
    }
}


?>