<?php
if (!isset($_SESSION['customer']) || $_SESSION['customer'] !== true) {
    // header("Location: login.php");
    // chuyển về trang login
    echo "<script type='text/javascript'>alert('Please login to continue!');</script>";
    echo "<script type='text/javascript'>window.location.href = 'login.php';</script>";
    exit;
}
?>