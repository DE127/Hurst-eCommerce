<?php

$error = false;

// Check if form has been submitted
if (isset($_POST['add_payment'])) {
  // Get form data
  $name = $_POST['name'];
  $description = $_POST['description'];
  $status = $_POST['status'];

  // Insert payment method into database
  $sql = "INSERT INTO payment_method (name, description, status) VALUES ('$name', '$description', '$status')";
  if ($conn->query($sql) === true) {
    // Redirect to payment list page
    echo "<script>window.location.href='index.php?action=payments&query=list';</script>";
    exit();
  } else {
    echo "Error adding payment method: " . $conn->error;
  }
}
?>