<?php
// ?action=catalog&query=brands&id=4&delete
// xóa brand
if (isset($_GET['action']) && $_GET['query'] == 'brands' && isset($_GET['id']) && isset($_GET['delete'])) {
    $brand_id = $_GET['id'];
    $query = "DELETE FROM brand WHERE id = '$brand_id'";
    // xóa thumbnail
    $query_thumbnail = "SELECT thumbnail FROM brand WHERE id = '$brand_id'";
    $result_thumbnail = mysqli_query($conn, $query_thumbnail);
    $row_thumbnail = mysqli_fetch_assoc($result_thumbnail);
    $thumbnail = $row_thumbnail['thumbnail'];
    unlink($thumbnail);
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
            alert('Brand deleted successfully!');
            window.location.href = 'index.php?action=catalog&query=brands';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting brand!');
            window.location.href = 'index.php?action=catalog&query=brands';
        </script>";
    }
}


?>