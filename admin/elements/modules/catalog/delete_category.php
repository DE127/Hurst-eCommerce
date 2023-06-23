<?php
// ?action=catalog&query=brands&id=4&delete
// xóa brand
if (isset($_GET['action']) && $_GET['query'] == 'categories' && isset($_GET['id']) && isset($_GET['delete'])) {
    $brand_id = $_GET['id'];
    $query = "DELETE FROM product_type WHERE id = '$brand_id'";
    // xóa thumbnail
    $query_thumbnail = "SELECT thumbnail FROM product_type WHERE id = '$brand_id'";
    $result_thumbnail = mysqli_query($conn, $query_thumbnail);
    $row_thumbnail = mysqli_fetch_assoc($result_thumbnail);
    $thumbnail = $row_thumbnail['thumbnail'];
    unlink($thumbnail);
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
            alert('Category deleted successfully!');
            window.location.href = '?action=catalog&query=categories';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting Category!');
            window.location.href = 'index.php?action=catalog&query=categories';
        </script>";
    }
}


?>