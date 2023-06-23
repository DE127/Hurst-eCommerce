<?php
// ?action=catalog&query=brands&id=4&delete
// xóa brand
if (isset($_GET['action']) && $_GET['query'] == 'list' && isset($_GET['id']) && isset($_GET['delete'])) {
    $brand_id = $_GET['id'];
    $query = "DELETE FROM customer WHERE id = '$brand_id'";
    // xóa thumbnail
    $query_thumbnail = "SELECT thumbnail FROM brand WHERE id = '$brand_id'";
    $result_thumbnail = mysqli_query($conn, $query_thumbnail);
    $row_thumbnail = mysqli_fetch_assoc($result_thumbnail);
    $thumbnail = $row_thumbnail['thumbnail'];
    unlink($thumbnail);
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
            alert('Customer deleted successfully!');
            window.location.href = '?action=customers&query=list';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting customer!');
            window.location.href = '?action=customers&query=list';
        </script>";
    }
}


?>