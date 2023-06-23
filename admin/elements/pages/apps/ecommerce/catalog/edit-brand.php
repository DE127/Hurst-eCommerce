<?php
$result = mysqli_query($conn, 'SELECT * FROM brand WHERE id = ' . $_GET['id']);

$row = mysqli_fetch_assoc($result);
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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Edit Brand</h1>
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
						<li class="breadcrumb-item text-muted">Product</li>
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
				<!--begin::Form-->
				<form id="" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data" data-kt-redirect="" action="" method="post">
					<!--begin::Aside column-->
					<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
						<!--begin::Thumbnail settings-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Thumbnail</h2>
								</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body text-center pt-0">
								<!--begin::Image input-->
								<!--begin::Image input placeholder-->
								<style>
									.image-input-placeholder {
										background-image: url('<?php echo $row['thumbnail'] ?>');
									}

									[data-bs-theme="dark"] .image-input-placeholder {
										background-image: url('<?php echo $row['thumbnail'] ?>');
									}
								</style>
								<!--end::Image input placeholder-->
								<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
									data-kt-image-input="true">
									<!--begin::Preview existing avatar-->
									<div class="image-input-wrapper w-150px h-150px"></div>
									<!--end::Preview existing avatar-->
									<!--begin::Label-->
									<label
										class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
										data-kt-image-input-action="change" data-bs-toggle="tooltip"
										aria-label="Change avatar" data-bs-original-title="Change avatar"
										data-kt-initialized="1">
										<i class="ki-duotone ki-pencil fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
										<!--begin::Inputs-->
										<input type="file" name="thumbnail" accept=".png, .jpg, .jpeg" value="">
										<input type="hidden" name="avatar_remove">
										<!--end::Inputs-->
									</label>
									<!--end::Label-->
									<!--begin::Cancel-->
									<span
										class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
										data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
										aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
										data-kt-initialized="1">
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
										aria-label="Remove avatar" data-bs-original-title="Remove avatar"
										data-kt-initialized="1">
										<i class="ki-duotone ki-cross fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Remove-->
								</div>
								<!--end::Image input-->
								<!--begin::Description-->
								<div class="text-muted fs-7">Set the brand thumbnail image. Only *.png, *.jpg and
									*.jpeg image files are accepted</div>
								<!--end::Description-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Thumbnail settings-->
						<!--begin::Status-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Status</h2>
								</div>
								<!--end::Card title-->
								<!--begin::Card toolbar-->
								<div class="card-toolbar">
									<div class="rounded-circle bg-success w-15px h-15px"
										id="kt_ecommerce_add_product_status"></div>
								</div>
								<!--begin::Card toolbar-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<!--begin::Select2-->
								<select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
									data-hide-search="true" data-placeholder="Select an option" id="" name="status"
									data-select2-id="select2-data-kt_ecommerce_add_product_status_select">
									<option></option>
									<?php
									if ($row['status'] == 1) {
										echo '<option value="1" selected="selected">Published</option>
										<option value="0">Inactive</option>';
									}

									if ($row['status'] == 0) {
										echo '<option value="1">Published</option>
										<option value="0" selected="selected">Inactive</option>';
									}
									?>
								</select>
								<span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
									data-select2-id="select2-data-1-1d5w" style="width: 100%;"></span>
								<span class="selection">
									<!--begin::Description-->
									<div class="text-muted fs-7">Set the brand status.</div>
									<!--end::Description-->
							</div>
							<!--end::Card body-->
						</div>
					</div>
					<!--end::Aside column-->
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
						<!--begin:::Tabs-->
						<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2"
							role="tablist">
							<!--begin:::Tab item-->
							<li class="nav-item" role="presentation">
								<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
									href="#kt_ecommerce_add_product_general" aria-selected="true" role="tab">General</a>
							</li>
						</ul>
						<!--end:::Tabs-->
						<!--begin::Tab content-->
						<div class="tab-content">
							<!--begin::Tab pane-->
							<div class="tab-pane fade active show" id="kt_ecommerce_add_product_general"
								role="tab-panel">
								<div class="d-flex flex-column gap-7 gap-lg-10">
									<!--begin::General options-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>General</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Brand Name</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="product_name" class="form-control mb-2"
													placeholder="Brand name" value="<?php echo $row['name'] ?>">
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">A brand name is required and recommended
													to be unique.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div>
												<!--begin::Label-->
												<label class="form-label">Description</label>
												<!--end::Label-->
												<textarea class="form-control" name="description" placeholder="Enter description brand..." data-kt-autosize="true"><?php echo $row['description'] ?></textarea>

												<!--begin::Description-->
												<div class="text-muted fs-7">Set a description to the brand for better
													visibility.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Pricing-->
								</div>
							</div>
							<!--end::Tab pane-->
						</div>
						<!--end::Tab content-->
						<div class="d-flex justify-content-end">
							<!--begin::Button-->
							<a href="?action=catalog&amp;query=products" id="kt_ecommerce_add_product_cancel"
								class="btn btn-light me-5">Cancel</a>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="" class="btn btn-primary" name="btn-save">
								<span class="indicator-label">Save Changes</span>
								<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
							<!--end::Button-->
						</div>
					</div>
					<!--end::Main column-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	
</div>
<!--end:::Main-->