<?php
// lấy thông tin của admin theo admin_id lưu trong session
$admin_id = $_SESSION['admin_id'];
$sql = "SELECT * FROM admin WHERE id = '$admin_id' LIMIT 1";
$result = mysqli_query($conn, $sql);
$admin = mysqli_fetch_assoc($result);
if ($admin['avatar'] == '') {
	$admin['avatar'] = 'uploads/avatars/default.jpg';
}
$name_array = explode(' ', $admin['fullname']);
$firstname = $name_array[0];
$lastname = $name_array[count($name_array) - 1];
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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Account Settings</h1>
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
									<img src="<?php echo $admin['avatar'] ?>"" alt="image">
									<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
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
								<a class="nav-link text-active-primary ms-0 me-10 py-5" href="?action=account&query=overview">Overview</a>
							</li>
							<!--end::Nav item-->
							<!--begin::Nav item-->
							<li class="nav-item mt-2">
								<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="?action=account&query=settings">Settings</a>
							</li>
						</ul>
						<!--begin::Navs-->
					</div>
				</div>
				<!--end::Navbar-->
				<!--begin::Basic info-->
				<div class="card mb-5 mb-xl-10">
					<!--begin::Card header-->
					<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
						<!--begin::Card title-->
						<div class="card-title m-0">
							<h3 class="fw-bold m-0">Profile Details</h3>
						</div>
						<!--end::Card title-->
					</div>
					<!--begin::Card header-->
					<!--begin::Content-->
					<div id="kt_account_settings_profile_details" class="collapse show">
						<!--begin::Form-->
						<form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" action=""  enctype="multipart/form-data" method="post">
							<!--begin::Card body-->
							<div class="card-body border-top p-9">
								<!--begin::Input group-->
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8">
										<!--begin::Image input-->
										<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
											<!--begin::Preview existing avatar-->
											<div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?php echo $admin['avatar'] ?>")"></div>
											<!--end::Preview existing avatar-->
											<!--begin::Label-->
											<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
												<i class="ki-duotone ki-pencil fs-7">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<!--begin::Inputs-->
												<input type="file" name="avatar" id="avatar" accept=".png, .jpg, .jpeg" value="">
												<input type="hidden" name="avatar_remove">
												<!--end::Inputs-->
											</label>
											<!--end::Label-->
											<!--begin::Cancel-->
											<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
												<i class="ki-duotone ki-cross fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<!--end::Cancel-->
											<!--begin::Remove-->
											<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
												<i class="ki-duotone ki-cross fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<!--end::Remove-->
										</div>
										<!--end::Image input-->
										<!--begin::Hint-->
										<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
										<!--end::Hint-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-6 fv-row fv-plugins-icon-container">
												<input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="<?php echo $firstname ?>">
											<div class="fv-plugins-message-container invalid-feedback"></div></div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-6 fv-row fv-plugins-icon-container">
												<input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="<?php echo $lastname ?>">
											<div class="fv-plugins-message-container invalid-feedback"></div></div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label fw-semibold fs-6">
										<span class="required">Contact Phone</span>
										<span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active" data-bs-original-title="Phone number must be active" data-kt-initialized="1">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 fv-row fv-plugins-icon-container">
										<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="<?php echo $admin['phone'] ?>"">
									<div class="fv-plugins-message-container invalid-feedback"></div></div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label fw-semibold fs-6">
										<span class="required">Email</span>
										<span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active" data-bs-original-title="Phone number must be active" data-kt-initialized="1">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 fv-row fv-plugins-icon-container">
										<input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value="<?php echo $admin['email'] ?>"">
									<div class="fv-plugins-message-container invalid-feedback"></div></div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label fw-semibold fs-6">Address</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 fv-row">
										<input type="text" name="address" class="form-control form-control-lg form-control-solid" placeholder="Address" value="<?php echo $admin['address'] ?>"">
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Card body-->
							<!--begin::Actions-->
							<div class="card-footer d-flex justify-content-end py-6 px-9">
								<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
								<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit" name="btn-save-info">Save Changes</button>
							</div>
							<!--end::Actions-->
						<input type="hidden"></form>
						<!--end::Form-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Basic info-->
				<!--begin::Sign-in Method-->
				<div class="card mb-5 mb-xl-10">
					<!--begin::Card header-->
					<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
						<div class="card-title m-0">
							<h3 class="fw-bold m-0">Sign-in Method</h3>
						</div>
					</div>
					<!--end::Card header-->
					<!--begin::Content-->
					<div id="kt_account_settings_signin_method" class="collapse show">
						<!--begin::Card body-->
						<div class="card-body border-top p-9">
							<!--begin::Email Address-->
							<div class="d-flex flex-wrap align-items-center">
								<!--begin::Label-->
								<div id="kt_signin_email">
									<div class="fs-6 fw-bold mb-1">Email Address</div>
									<div class="fw-semibold text-gray-600"><?php echo $admin['email'] ?></div>
								</div>
								<!--end::Label-->
								<!--begin::Edit-->
								<div id="kt_signin_email_edit" class="flex-row-fluid d-none">
									<!--begin::Form-->
									<form id="" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" action="" method="post">
										<div class="row mb-6">
											<div class="col-lg-6 mb-4 mb-lg-0">
												<div class="fv-row mb-0 fv-plugins-icon-container">
													<label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
													<input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="<?php echo $admin['email'] ?>"">
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
											</div>
											<div class="col-lg-6">
												<div class="fv-row mb-0 fv-plugins-icon-container">
													<label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
													<input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword">
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
											</div>
										</div>
										<div class="d-flex">
											<button id="" type="submit" class="btn btn-primary me-2 px-6" name="btn-save-email">Update Email</button>
											<button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
										</div>
									</form>
									<!--end::Form-->
								</div>
								<!--end::Edit-->
								<!--begin::Action-->
								<div id="kt_signin_email_button" class="ms-auto">
									<button class="btn btn-light btn-active-light-primary">Change Email</button>
								</div>
								<!--end::Action-->
							</div>
							<!--end::Email Address-->
							<!--begin::Separator-->
							<div class="separator separator-dashed my-6"></div>
							<!--end::Separator-->
							<!--begin::Password-->
							<div class="d-flex flex-wrap align-items-center mb-10">
								<!--begin::Label-->
								<div id="kt_signin_password">
									<div class="fs-6 fw-bold mb-1">Password</div>
									<div class="fw-semibold text-gray-600">************</div>
								</div>
								<!--end::Label-->
								<!--begin::Edit-->
								<div id="kt_signin_password_edit" class="flex-row-fluid d-none">
									<!--begin::Form-->
									<form id="" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" action="" method="post">
										<div class="row mb-1">
											<div class="col-lg-4">
												<div class="fv-row mb-0 fv-plugins-icon-container">
													<label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
													<input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword">
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
											</div>
											<div class="col-lg-4">
												<div class="fv-row mb-0 fv-plugins-icon-container">
													<label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
													<input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword">
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
											</div>
											<div class="col-lg-4">
												<div class="fv-row mb-0 fv-plugins-icon-container">
													<label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
													<input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword">
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
											</div>
										</div>
										<div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
										<div class="d-flex">
											<button id="" type="submit" class="btn btn-primary me-2 px-6" name="btn-save-pw">Update Password</button>
											<button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
										</div>
									</form>
									<!--end::Form-->
								</div>
								<!--end::Edit-->
								<!--begin::Action-->
								<div id="kt_signin_password_button" class="ms-auto">
									<button class="btn btn-light btn-active-light-primary" >Reset Password</button>
								</div>
								<!--end::Action-->
							</div>
							<!--end::Password-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Content-->
				</div>
				<!--begin::Deactivate Account-->
				<div class="card">
					<!--begin::Card header-->
					<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
						<div class="card-title m-0">
							<h3 class="fw-bold m-0">Deactivate Account</h3>
						</div>
					</div>
					<!--end::Card header-->
					<!--begin::Content-->
					<div id="kt_account_settings_deactivate" class="collapse show">
						<!--begin::Form-->
						<form id="kt_account_deactivate_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" action="" method="post">
							<!--begin::Card body-->
							<div class="card-body border-top p-9">
								<!--begin::Notice-->
								<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
									<!--begin::Icon-->
									<i class="ki-duotone ki-information fs-2tx text-warning me-4">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
									<!--end::Icon-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-grow-1">
										<!--begin::Content-->
										<div class="fw-semibold">
											<h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>
											<div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
											<br>
											<a class="fw-bold" href="#">Learn more</a></div>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Notice-->
								<!--begin::Form input row-->
								<div class="form-check form-check-solid fv-row fv-plugins-icon-container">
									<input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate">
									<label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Form input row-->
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<div class="card-footer d-flex justify-content-end py-6 px-9">
								<button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold" name="btn-save-deactivate">Deactivate Account</button>
							</div>
							<!--end::Card footer-->
						<input type="hidden"></form>
						<!--end::Form-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Deactivate Account-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	<!--begin::Footer-->
	
</div>