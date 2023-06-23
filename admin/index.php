<?php
session_start();
// $_SESSION['admin'] = true;
require_once('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href="" />
	<?php require_once 'elements/header.php'; ?>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
	data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
	data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
	data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<?php
require('config/config.php');

?>
	<!--begin::Theme mode setup on page load-->
	<script>var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (localStorage.getItem("data-bs-theme") !== null) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <?php
		require 'config/config.php';
		require 'elements/app-header.php';
		require 'elements/app-menu.php'; 
		?>
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
	<?php require 'elements/scrolltop.php' ?>
	<?php require 'elements/modal.php' ?>
	<!--begin::Javascript-->
	<script>var hostUrl = "assets/";</script>
	<?php require 'elements/js.php'; ?>
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>