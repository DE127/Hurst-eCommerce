<?php

$error = false;

$admin_id = $_SESSION['admin_id'];

if (isset($_POST['btn-save-pw'])) {
  $admin_id = $_SESSION['admin'];
  $password = trim($_POST['currentpassword']);
  $newpassword = trim($_POST['newpassword']);
  $confirmpassword = trim($_POST['confirmpassword']);

  $query = "SELECT password FROM admin WHERE id=$admin_id";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);

  // kiểm tra password nhập vào có đúng không
  if (password_verify($password, $row['password'])) {
    $error = false;
  } else {
    $error = true;
    $password_error = "Password is incorrect.";
  }

  // kiểm tra password mới có trùng với password confirm không
  if ($newpassword != $confirmpassword) {
    $error = true;
    $confirmpassword_error = "Password and Confirm Password doesn't match.";
  }

  // Update admin information
  if (!$error) {
    $query = "UPDATE admin SET ";
    if (!empty($password)) {
      $query .= ", password='" . password_hash($newpassword, PASSWORD_DEFAULT) . "'";
    }
    $query .= " WHERE id=$admin_id";
    mysqli_query($conn, $query);
    $success_msg = "Password changed successfully.";
  }
}
?>