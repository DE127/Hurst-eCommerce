<?php

if (isset($_GET['action']) && $_GET['query'] == 'list' && isset($_GET['id']) && isset($_GET['delete'])) {
    $payment_id = $_GET['id'];
    $query = "DELETE FROM payment_method WHERE id = '$payment_id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
            alert('Payment method deleted successfully!');
            window.location.href = '?action=payments&query=list';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting Payment method!');
        </script>";
    }
}
$error = false;
// Get payment id from URL parameter

?>
