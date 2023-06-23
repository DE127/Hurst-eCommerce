<?php
require_once 'config\config.php';
// session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
// if (!isset($_SESSION['admin'])) {
	header("Location: login.php");
	exit;
}
?>