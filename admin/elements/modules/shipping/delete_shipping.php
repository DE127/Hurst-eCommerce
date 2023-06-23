<?php

if (isset($_GET['action']) && $_GET['query'] == 'list' && isset($_GET['id']) && isset($_GET['delete'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM shipping_method WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
            alert('Payment method deleted successfully!');
            window.location.href = '?action=shipping&query=list';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting Shippong method!');
        </script>";
    }
}
$error = false;
// Get payment id from URL parameter

?>
