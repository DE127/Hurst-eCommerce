<?php
$error = false;
// Check if form has been submitted
if (isset($_POST['btn-save-phone'])) {
    $id = $_GET['id'];
    // Get form data
    $phone = $_POST['profile_phone'];

    $sql = "UPDATE customer SET phone = '$phone' WHERE id = '$id'";
    if ($conn->query($sql) === true) {
        echo '<script>
            window.location.href = "?action=customers&query=list&id=' . $id . '";
        </script>';
        exit();
    } else {
        echo "Error updating phone: " . $conn->error;
    }
}
?>