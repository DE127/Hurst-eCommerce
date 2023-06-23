<?php
// lấy dữ liệu từ bàng store_detail để hiển thị ra form
$sql = "SELECT * FROM store_detail Limit 1;";
$result = $conn->query($sql);
// nếu dữ liệu trả về bằng rỗng thi thêm dữ liệu vào bảng store_detail
if ($result->num_rows == 0) {
	$sql = "INSERT INTO store_detail (name, address, currency, phone, email, facebook, map, status) VALUES ('', '', '', '', '', '', '', '1')";
	$conn->query($sql);
}
// lấy dữ liệu từ bảng store_detail để hiển thị ra form
$row = mysqli_fetch_array($result)
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
					<h1
						class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
						Settings</h1>
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
				<!--begin::Card-->
				<div class="card card-flush">
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin:::Tabs-->
						<ul
							class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15">
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary d-flex align-items-center pb-5"
									data-bs-toggle="tab" href="#kt_ecommerce_settings_store">
									<i class="ki-duotone ki-shop fs-2 me-2">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
										<span class="path5"></span>
									</i>Store</a>
							</li>
							<!--end:::Tab item-->
						</ul>
						<!--end:::Tabs-->
						<!--begin:::Tab content-->
						<div class="tab-content" id="myTabContent">
							<!--begin:::Tab pane-->
							<div class="tab-pane fade show active" id="kt_ecommerce_settings_store" role="tabpanel">
								<!--begin::Form-->
								<form id="kt_ecommerce_settings_general_store" class="form" enctype="multipart/form-data" action="" method="post">
									<!--begin::Heading-->
									<div class="row mb-7">
										<div class="col-md-9 offset-md-3">
											<h2>Store Settings</h2>
										</div>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Store Name</span>
												<span class="ms-1" data-bs-toggle="tooltip"
													title="Set the name of the store">
													<i
														class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid"
												name="store_name" value="<?php echo $row['name']?>"/>
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Address</span>
												<span class="ms-1" data-bs-toggle="tooltip"
													title="Set the store's full address.">
													<i
														class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<textarea class="form-control form-control-solid"
												name="store_address"><?php echo $row['address']?></textarea>
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Email</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="email" class="form-control form-control-solid"
												name="store_email" value="<?php echo $row['email']?>"/>
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Phone</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid"
												name="store_phone" value="<?php echo $row['phone']?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Facebook</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid"
												name="store_facebook" value="<?php echo $row['facebook']?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span>Logo</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="file" accept=".png, .jpg, .jpeg" class="form-control form-control-solid"
												name="logo" value="<?php echo $row['logo']?>"/>
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Map</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid"
												name="store_map" value="<?php echo $row['map']?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Currency</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="w-100">
												<!--begin::Select2-->
												<select class="form-select form-select-solid"
													name="localization_currency" data-control="select2"
													data-hide-search="true"
													data-placeholder="Select a currency" name="store_currency">
													<option value="USD">US Dollar</option>
												</select>
												<!--end::Select2-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Action buttons-->
									<div class="row py-5">
										<div class="col-md-9 offset-md-3">
											<div class="d-flex">
												<!--begin::Button-->
												<button type="reset"
													data-kt-ecommerce-settings-type="cancel"
													class="btn btn-light me-3">Cancel</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" name="btn-save"
													data-kt-ecommerce-settings-type="submit"
													class="btn btn-primary">
													<span class="indicator-label">Save</span>
													<span class="indicator-progress">Please wait...
														<span
															class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
										</div>
									</div>
									<!--end::Action buttons-->
								</form>
								<!--end::Form-->
							</div>
							<!--end:::Tab pane-->
						</div>
						<!--end:::Tab content-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>
<!--end:::Main-->