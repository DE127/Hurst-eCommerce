<!-- deactivate user -->
<?php
include_once '..\session.php';
include_once '..\config\config.php';

$error = false;
$conn = $mysqli;

$user_id = $_POST['user_id'];
// Check if form has been submitted
if (isset($_POST['btn-save-pw'])) {
    // Update password
    $sql = "UPDATE customer SET status = '0' WHERE id = '$user_id'";
    if ($conn->query($sql) === true) {
      // Redirect to user profile page
      header("Location: profile.php");
      exit();
    } else {
      echo "Error Deactivate: " . $conn->error;
    }
  }


exit;
?>