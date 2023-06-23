<?php

$error = false;

// Check if form has been submitted
if (isset($_POST['add_shipping'])) {
  // Get form data
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $status = $_POST['status'];

  $sql = "INSERT INTO shipping_method (name, description, status, price) VALUES ('$name', '$description', '$status', '$price')";
  if ($conn->query($sql) === true) {
    echo "<script>window.location.href='index.php?action=shipping&query=list';</script>";
    exit();
  } else {
    echo "Error adding payment method: " . $conn->error;
  }
}
?>