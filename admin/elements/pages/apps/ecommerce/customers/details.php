<?php

$result = mysqli_query($conn, 'SELECT * FROM customer WHERE id = ' . $_GET['id']);
$order = mysqli_query($conn, 'SELECT * FROM `order` WHERE customer_id = ' . $_GET['id']);

$row = mysqli_fetch_assoc($result);
if ($row['avatar'] == '') {
	$row['avatar'] = 'uploads/avatars/default.jpg';
}

// delete admin/ in url avatar
$row['avatar'] = str_replace('admin/', '', $row['avatar']);
?>
<!--begin::Main-->
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
						Customer Details</h1>
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
						<li class="breadcrumb-item text-muted">eCommerce</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Customers</li>
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
				<!--begin::Layout-->
				<div class="d-flex flex-column flex-xl-row">
					<!--begin::Sidebar-->
					<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
						<!--begin::Card-->
						<div class="card mb-5 mb-xl-8">
							<!--begin::Card body-->
							<div class="card-body pt-15">
								<!--begin::Summary-->
								<div class="d-flex flex-center flex-column mb-5">
									<!--begin::Avatar-->
									<div class="symbol symbol-150px symbol-circle mb-7">
										<img src="<?php echo $row['avatar'] ?>" alt="image" />
									</div>
									<!--end::Avatar-->
									<!--begin::Name-->
									<a class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">
										<?php echo $row['fullname'] ?>
									</a>
									<!--end::Name-->
									<!--begin::Email-->
									<a href="<?php echo 'mailto:' . $row['email'] ?>"
										class="fs-5 fw-semibold text-muted text-hover-primary mb-6"><?php echo $row['email'] ?></a>
									<!--end::Email-->
								</div>
								<!--end::Summary-->
								<!--begin::Details toggle-->
								<div class="d-flex flex-stack fs-4 py-3">
									<div class="fw-bold">Details</div>
								</div>
								<!--end::Details toggle-->
								<div class="separator separator-dashed my-3"></div>
								<!--begin::Details content-->
								<div class="pb-5 fs-6">
									<!--begin::Details item-->
									<div class="fw-bold mt-5">Account</div>
									<div class="text-gray-600">
										<?php echo $row['username'] ?>
									</div>
									<!--begin::Details item-->
									<!--begin::Details item-->
									<div class="fw-bold mt-5">Email</div>
									<div class="text-gray-600">
										<a href="<?php echo 'mailto:' . $row['email'] ?>"
											class="text-gray-600 text-hover-primary"><?php echo $row['email'] ?></a>
									</div>
									<!--begin::Details item-->
									<!--begin::Details item-->
									<div class="fw-bold mt-5">Phone</div>
									<div class="text-gray-600">
										<a href="<?php echo 'tel:' . $row['phone'] ?>"
											class="text-gray-600 text-hover-primary"><?php echo $row['phone'] ?></a>
									</div>
									<!--begin::Details item-->
									<!--begin::Details item-->
									<div class="fw-bold mt-5">Delivery Address</div>
									<div class="text-gray-600">
										<?php echo $row['address'] ?>
									</div>
									<!--begin::Details item-->
									<!--begin::Details item-->
								</div>
								<!--end::Details content-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Card-->
					</div>
					<!--end::Sidebar-->
					<!--begin::Content-->
					<div class="flex-lg-row-fluid ms-lg-15">
						<!--begin:::Tabs-->
						<ul
							class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
									href="#kt_ecommerce_customer_overview">Overview</a>
							</li>
							<!--end:::Tab item-->
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
									href="#kt_ecommerce_customer_general">General Settings</a>
							</li>
							<!--end:::Tab item-->
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
									href="#kt_ecommerce_customer_advanced">Advanced Settings</a>
							</li>
							<!--end:::Tab item-->
						</ul>
						<!--end:::Tabs-->
						<!--begin:::Tab content-->
						<div class="tab-content" id="myTabContent">
							<!--begin:::Tab pane-->
							<div class="tab-pane fade show active" id="kt_ecommerce_customer_overview" role="tabpanel">
								<div class="card pt-4 mb-6 mb-xl-9">
									<!--begin::Card-->
									<div class="card pt-4 h-md-100 mb-6 mb-md-0">
										<!--begin::Card header-->
										<div class="card-header border-0">
											<!--begin::Card title-->
											<div class="card-title">
												<h2 class="fw-bold">Reward Points</h2>
											</div>
											<!--end::Card title-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<div class="fw-bold fs-2">
												<div class="d-flex">
													<i class="ki-duotone ki-heart text-info fs-2x">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<div class="ms-2">
														<?php echo $row['point'] ?>
														<span class="text-muted fs-4 fw-semibold">Points earned</span>
													</div>
												</div>
												<div class="fs-7 fw-normal text-muted">Earn reward points with every
													purchase.</div>
											</div>
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--begin::Card-->
								<div class="card pt-4 mb-6 mb-xl-9">
									<!--begin::Card header-->
									<div class="card-header border-0">
										<!--begin::Card title-->
										<div class="card-title">
											<h2>Transaction History</h2>
										</div>
										<!--end::Card title-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0 pb-5">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed gy-5"
											id="kt_table_customers_payment">
											<thead class="border-bottom border-gray-200 fs-7 fw-bold">
												<tr class="text-start text-muted text-uppercase gs-0">
													<th class="min-w-100px">order No.</th>
													<th>Status</th>
													<th>Amount</th>
													<th class="min-w-100px">Update</th>
													<th class="min-w-100px">Ship</th>
												</tr>
											</thead>
											<tbody class="fs-6 fw-semibold text-gray-600">
												<!--
												if($row['status'] == 1) echo '<span class="badge badge-light-success">Successful</span>';
												if($row['status'] == 0) echo '<span class="badge badge-light-warning">Pending</span>';
												if($row['status'] == 2) echo '<span class="badge badge-light-danger">Rejected</span>';
												if($row['status'] == 3) echo '<span class="badge badge-light-danger">Expired</span>';
												if($row['status'] == 4) echo '<span class="badge badge-light-danger">Failed</span>';
												if($row['status'] == 5) echo '<span class="badge badge-light-danger">Cancelled</span>';
												if($row['status'] == 6) echo '<span class="badge badge-light-primary">Processing</span>';
												if($row['status'] == 7) echo '<span class="badge badge-light-info">Refunded</span>';
												if($row['status'] == 8) echo '<span class="badge badge-light-success">Delivered</span>';
												if($row['status'] == 9) echo '<span class="badge badge-light-primary">Delivering</span>';
												-->
												<?php
												while ($row2 = mysqli_fetch_assoc($order)) {
													echo '<tr>
													<td>
														<a href="?action=sales&query=details&id=' . $row2['id'] . '" class="text-gray-600 text-hover-primary mb-1">#' . $row2['id'] . '</a>
													</td>';
													if ($row2['status'] == 1)
														echo '<td><span class="badge badge-light-success">Successful</span></td>';
													if ($row2['status'] == 0)
														echo '<td><span class="badge badge-light-warning">Pending</span></td>';
													if ($row2['status'] == 2)
														echo '<td><span class="badge badge-light-danger">Rejected</span></td>';
													if ($row['status'] == 3)
														echo '<span class="badge badge-light-danger">Expired</span>';
													if ($row['status'] == 4)
														echo '<span class="badge badge-light-danger">Failed</span>';
													if ($row['status'] == 5)
														echo '<span class="badge badge-light-danger">Cancelled</span>';
													if ($row['status'] == 6)
														echo '<span class="badge badge-light-primary">Processing</span>';
													if ($row['status'] == 7)
														echo '<span class="badge badge-light-info">Refunded</span>';
													if ($row['status'] == 8)
														echo '<span class="badge badge-light-success">Delivered</span>';
													if ($row['status'] == 9)
														echo '<span class="badge badge-light-primary">Delivering</span>';
													echo '<td>' . $row2['total'] . '</td>
													<td>' . $row2['date_update'] . '</td>
													<td>' . $row2['date_ship'] . '</td>
												</tr>';
												}
												?>
											</tbody>
										</table>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end:::Tab pane-->
							<!--begin:::Tab pane-->
							<div class="tab-pane fade" id="kt_ecommerce_customer_general" role="tabpanel">
								<!--begin::Card-->
								<div class="card pt-4 mb-6 mb-xl-9">
									<!--begin::Card header-->
									<div class="card-header border-0">
										<!--begin::Card title-->
										<div class="card-title">
											<h2>Profile</h2>
										</div>
										<!--end::Card title-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0 pb-5">
										<!--begin::Form-->
										<form class="form" action="" id="" method="post" enctype="multipart/form-data">
											<!--begin::Input group-->
											<div class="mb-7">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2">
													<span>Update Avatar</span>
													<span class="ms-1" data-bs-toggle="tooltip"
														title="Allowed file types: png, jpg, jpeg.">
														<i class="ki-duotone ki-information fs-7">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<!--begin::Image input wrapper-->
												<div class="mt-1">
													<!--begin::Image input placeholder-->
													<style>
														.image-input-placeholder {
															background-image: url('<?php echo $row['avatar'] ?>');
														}

														[data-bs-theme="dark"] .image-input-placeholder {
															background-image: url('<?php echo $row['avatar'] ?>');
														}
													</style>
													<!--end::Image input placeholder-->
													<!--begin::Image input-->
													<div class="image-input image-input-outline image-input-placeholder"
														data-kt-image-input="true">
														<!--begin::Preview existing avatar-->
														<div class="image-input-wrapper w-125px h-125px"
															style="background-image: url('<?php echo $row['avatar'] ?>')">
														</div>
														<!--end::Preview existing avatar-->
														<!--begin::Edit-->
														<label
															class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
															data-kt-image-input-action="change" data-bs-toggle="tooltip"
															title="Change avatar">
															<i class="ki-duotone ki-pencil fs-7">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<!--begin::Inputs-->
															<input type="file" name="avatar"
																accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="avatar_remove" />
															<!--end::Inputs-->
														</label>
														<!--end::Edit-->
														<!--begin::Cancel-->
														<span
															class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
															data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
															title="Cancel avatar">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
														<!--end::Cancel-->
														<!--begin::Remove-->
														<span
															class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
															data-kt-image-input-action="remove" data-bs-toggle="tooltip"
															title="Remove avatar">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
														<!--end::Remove-->
													</div>
													<!--end::Image input-->
												</div>
												<!--end::Image input wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-7">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2 required">Name</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid"
													placeholder="" name="fullname"
													value="<?php echo $row['fullname'] ?>" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<div class="fv-row mb-7">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2 required">Username</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid"
													placeholder="Enter new username" name="username"
													value="<?php echo $row['username'] ?>" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<div class="fv-row mb-7">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2 required">Phone</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="tel" class="form-control form-control-solid"
													placeholder="Enter phone number" name="phone"
													value="<?php echo $row['phone'] ?>" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<div class="fv-row mb-7">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2 required">Address</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid"
													placeholder="Enter address" name="address"
													value="<?php echo $row['address'] ?>" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<div class="fv-row mb-7">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2 required">Birthday</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="date" class="form-control form-control-solid"
													placeholder="Enter birthday" name="birthday"
													value="<?php echo $row['birthday'] ?>" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<div class="fv-row mb-7">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2 required">Sex</label>
												<!--end::Label-->
												<!--begin::Input-->
												<select class="form-select" data-control="select2"
													data-placeholder="Select an option" name="sex">
													<option></option>
													<option value="1">Male</option>
													<option value="2">Female</option>
													<option value="0">Other</option>
												</select>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<div class="d-flex justify-content-end">
												<!--begin::Button-->
												<button type="submit" id="kt_ecommerce_customer_profile_submit"
													class="btn btn-light-primary" name="btn-save-info">
													<span class="indicator-label">Save</span>
													<span class="indicator-progress">Please wait...
														<span
															class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
										</form>
										<!--end::Form-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end:::Tab pane-->
							<!--begin:::Tab pane-->
							<div class="tab-pane fade" id="kt_ecommerce_customer_advanced" role="tabpanel">
								<!--begin::Card-->
								<div class="card pt-4 mb-6 mb-xl-9">
									<!--begin::Card header-->
									<div class="card-header border-0">
										<!--begin::Card title-->
										<div class="card-title">
											<h2>Security Details</h2>
										</div>
										<!--end::Card title-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0 pb-5">
										<!--begin::Table wrapper-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed gy-5"
												id="kt_table_users_login_session">
												<!--begin::Table body-->
												<tbody class="fs-6 fw-semibold text-gray-600">
													<tr>
														<td>Phone</td>
														<td>
															<?php echo $row['phone'] ?>
														</td>
														<td class="text-end">
															<button type="button"
																class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_update_phone">
																<i class="ki-duotone ki-pencil fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>Password</td>
														<td>******</td>
														<td class="text-end">
															<button type="button"
																class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_update_password">
																<i class="ki-duotone ki-pencil fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</button>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table wrapper-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end:::Tab pane-->
						</div>
						<!--end:::Tab content-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Layout-->
				<!--begin::Modals-->
				<!--begin::Modal - Update password-->
				<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
					<!--begin::Modal dialog-->
					<div class="modal-dialog modal-dialog-centered mw-650px">
						<!--begin::Modal content-->
						<div class="modal-content">
							<!--begin::Modal header-->
							<div class="modal-header">
								<!--begin::Modal title-->
								<h2 class="fw-bold">Update Password</h2>
								<!--end::Modal title-->
								<!--begin::Close-->
								<div class="btn btn-icon btn-sm btn-active-icon-primary"
									data-kt-users-modal-action="close">
									<i class="ki-duotone ki-cross fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<!--end::Close-->
							</div>
							<!--end::Modal header-->
							<!--begin::Modal body-->
							<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
								<!--begin::Form-->
								<form id="kt_modal_update_password_form" class="form" action="" method="post">
									<!--begin::Input group=-->
									<!-- <div class="fv-row mb-10">
										<label class="required form-label fs-6 mb-2">Current Password</label>
										<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off" />
									</div> -->
									<!--end::Input group=-->
									<!--begin::Input group-->
									<div class="mb-10 fv-row" data-kt-password-meter="true">
										<!--begin::Wrapper-->
										<div class="mb-1">
											<!--begin::Label-->
											<label class="form-label fw-semibold fs-6 mb-2">New Password</label>
											<!--end::Label-->
											<!--begin::Input wrapper-->
											<div class="position-relative mb-3">
												<input class="form-control form-control-lg form-control-solid"
													type="password" placeholder="" name="new_password"
													autocomplete="off" />
												<span
													class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
													data-kt-password-meter-control="visibility">
													<i class="ki-duotone ki-eye-slash fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
													<i class="ki-duotone ki-eye d-none fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</div>
											<!--end::Input wrapper-->
											<!--begin::Meter-->
											<div class="d-flex align-items-center mb-3"
												data-kt-password-meter-control="highlight">
												<div
													class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
												</div>
												<div
													class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
												</div>
												<div
													class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
												</div>
												<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
												</div>
											</div>
											<!--end::Meter-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Hint-->
										<div class="text-muted">Use 8 or more characters with a mix of letters, numbers
											& symbols.</div>
										<!--end::Hint-->
									</div>
									<!--end::Input group=-->
									<!--begin::Input group=-->
									<div class="fv-row mb-10">
										<label class="form-label fw-semibold fs-6 mb-2">Confirm New Password</label>
										<input class="form-control form-control-lg form-control-solid" type="password"
											placeholder="" name="confirm_password" autocomplete="off" />
									</div>
									<!--end::Input group=-->
									<!--begin::Actions-->
									<div class="text-center pt-15">
										<button type="reset" class="btn btn-light me-3"
											data-kt-users-modal-action="cancel">Discard</button>
										<button type="submit" class="btn btn-primary"
											data-kt-users-modal-action="submit" name="btn-save-pw">
											<span class="indicator-label">Submit</span>
											<span class="indicator-progress">Please wait...
												<span
													class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Modal body-->
						</div>
						<!--end::Modal content-->
					</div>
					<!--end::Modal dialog-->
				</div>
				<!--end::Modal - Update password-->
				<!--begin::Modal - Update email-->
				<div class="modal fade" id="kt_modal_update_phone" tabindex="-1" aria-hidden="true">
					<!--begin::Modal dialog-->
					<div class="modal-dialog modal-dialog-centered mw-650px">
						<!--begin::Modal content-->
						<div class="modal-content">
							<!--begin::Modal header-->
							<div class="modal-header">
								<!--begin::Modal title-->
								<h2 class="fw-bold">Update Phone Number</h2>
								<!--end::Modal title-->
								<!--begin::Close-->
								<div class="btn btn-icon btn-sm btn-active-icon-primary"
									data-kt-users-modal-action="close">
									<i class="ki-duotone ki-cross fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
								<!--end::Close-->
							</div>
							<!--end::Modal header-->
							<!--begin::Modal body-->
							<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
								<!--begin::Form-->
								<form id="kt_modal_update_phone_form" class="form" action="" method="post">
									<!--begin::Notice-->
									<!--begin::Notice-->
									<div
										class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
										<!--begin::Icon-->
										<i class="ki-duotone ki-information fs-2tx text-primary me-4">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
										<!--end::Icon-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1">
											<!--begin::Content-->
											<div class="fw-semibold">
												<div class="fs-6 text-gray-700">Please note that a valid phone number
													may be required for order or shipping rescheduling.</div>
											</div>
											<!--end::Content-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
									<!--end::Notice-->
									<!--begin::Input group-->
									<div class="fv-row mb-7">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold form-label mb-2">
											<span class="required">Phone</span>
										</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control form-control-solid" placeholder=""
											name="profile_phone" value="<?php echo $row['phone'] ?>" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="text-center pt-15">
										<button type="reset" class="btn btn-light me-3"
											data-kt-users-modal-action="cancel">Discard</button>
										<button type="submit" class="btn btn-primary"
											data-kt-users-modal-action="submit" name="btn-save-phone">
											<span class="indicator-label">Submit</span>
											<span class="indicator-progress">Please wait...
												<span
													class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Modal body-->
						</div>
						<!--end::Modal content-->
					</div>
					<!--end::Modal dialog-->
				</div>
				<!--end::Modal - Update email-->
				<!--end::Modals-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->

</div>
<!--end:::Main-->