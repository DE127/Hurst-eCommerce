<?php
// lấy thông tin của admin theo admin_id lưu trong session
$admin_id = $_SESSION['admin_id'];
$sql = "SELECT * FROM admin WHERE id = '$admin_id' LIMIT 1";
$result = mysqli_query($conn, $sql);
$admin = mysqli_fetch_assoc($result);
if ($admin['avatar'] == '') {
	$admin['avatar'] = 'uploads/avatars/default.jpg';
}
?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
						Account Overview</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="?" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Account</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Navbar-->
				<div class="card mb-5 mb-xl-10">
					<div class="card-body pt-9 pb-0">
						<!--begin::Details-->
						<div class="d-flex flex-wrap flex-sm-nowrap">
							<!--begin: Pic-->
							<div class="me-7 mb-4">
								<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
									<img src="<?php echo $admin['avatar'] ?>" alt="image">
									<div
										class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
									</div>
								</div>
							</div>
							<!--end::Pic-->
							<!--begin::Info-->
							<div class="flex-grow-1">
								<!--begin::Title-->
								<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
									<!--begin::User-->
									<div class="d-flex flex-column">
										<!--begin::Name-->
										<div class="d-flex align-items-center mb-2">
											<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">
												<?php echo $admin['fullname'] ?>
											</a>
											<a href="#">
												<i class="ki-duotone ki-verify fs-1 text-primary">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</a>
										</div>
										<!--end::Name-->
										<!--begin::Info-->
										<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
											<a href="#"
												class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
												<i class="ki-duotone ki-profile-circle fs-4 me-1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>Admin</a>
											<a href="#"
												class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
												<i class="ki-duotone ki-geolocation fs-4 me-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<?php echo $admin['address'] ?>
											</a>
											<a href="<?php echo 'mailto:' . $admin['email'] ?>"
												class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
												<i class="ki-duotone ki-sms fs-4 me-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<?php echo $admin['email'] ?>
											</a>
										</div>
										<!--end::Info-->
									</div>
									<!--end::User-->
								</div>
								<!--end::Title-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Details-->
						<!--begin::Navs-->
						<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
							<!--begin::Nav item-->
							<li class="nav-item mt-2">
								<a class="nav-link text-active-primary ms-0 me-10 py-5 active"
									href="?action=account&query=overview">Overview</a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item mt-2">
								<a class="nav-link text-active-primary ms-0 me-10 py-5"
									href="?action=account&query=settings">Settings</a>
							</li>
							<!--end::Nav item-->
						</ul>
						<!--begin::Navs-->
					</div>
				</div>
				<!--end::Navbar-->
				<!--begin::details View-->
				<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
					<!--begin::Card header-->
					<div class="card-header cursor-pointer">
						<!--begin::Card title-->
						<div class="card-title m-0">
							<h3 class="fw-bold m-0">Profile Details</h3>
						</div>
						<!--end::Card title-->
						<!--begin::Action-->
						<a href="?action=account&query=settings" class="btn btn-sm btn-primary align-self-center">Edit
							Profile</a>
						<!--end::Action-->
					</div>
					<!--begin::Card header-->
					<!--begin::Card body-->
					<div class="card-body p-9">
						<!--begin::Row-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Username</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">
									<?php echo $admin['username'] ?>
								</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Row-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Role</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">
									<?php echo 'Administrator' ?>
								</span>
								<span class="badge badge-success">Verified</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Row-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Full Name</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">
									<?php echo $admin['fullname'] ?>
								</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Input group-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Contact Phone
								<span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active"
									data-bs-original-title="Phone number must be active" data-kt-initialized="1">
									<i class="ki-duotone ki-information fs-7">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
								</span></label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 d-flex align-items-center">
								<span class="fw-bold fs-6 text-gray-800 me-2">
									<?php echo $admin['phone'] ?>
								</span>

							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Row-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Email
							<span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active"
									data-bs-original-title="Phone number must be active" data-kt-initialized="1">
									<i class="ki-duotone ki-information fs-7">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
								</span></label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">
									<?php echo $admin['email'] ?>
								</span>
								<span class="badge badge-success">Verified</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--begin::Row-->
						<div class="row mb-7">
							<!--begin::Label-->
							<label class="col-lg-4 fw-semibold text-muted">Addres</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8">
								<span class="fw-bold fs-6 text-gray-800">
									<?php echo $admin['address'] ?>
								</span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
						<!--end::Notice-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::details View-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	<!--begin::Footer-->

</div>