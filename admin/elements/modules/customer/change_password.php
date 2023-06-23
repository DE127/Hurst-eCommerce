<!-- change password user -->
<?php
$error = false;
// Check if form has been submitted
if (isset($_POST['btn-save-pw'])) {
  $id = $_GET['id'];
  // Get form data
  $new_password = $_POST['new_password'];

  // Update password
  $new_password = password_hash($new_password, PASSWORD_DEFAULT);
  $sql = "UPDATE customer SET password = '$new_password' WHERE id = '$id'";
  if ($conn->query($sql) === true) {
    echo '<script>
            window.location.href = "?action=customers&query=list&id=' . $id . '";
          </script>';
    exit();
  } else {
    echo "Error updating password: " . $conn->error;
  }
}
?>