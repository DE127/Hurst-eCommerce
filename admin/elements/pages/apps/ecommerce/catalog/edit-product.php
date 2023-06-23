<?php
// lấy dữ liệu từ bảng brand để hiển thị ra bảng
$result = mysqli_query($conn, 'SELECT * FROM product WHERE id = ' . $_GET['id']);
$result1 = mysqli_query($conn, 'SELECT * FROM brand');
$result2 = mysqli_query($conn, 'SELECT * FROM product_type');

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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
						Edit Product Form</h1>
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
						<li class="breadcrumb-item text-muted">Catalog</li>
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
				<form id="" class="form d-flex flex-column flex-lg-row" data-kt-redirect="" action=""
					enctype="multipart/form-data" method="post">
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
										background-image: url(' <?php echo $row['thumbnail'] ?>');
									}

									[data-bs-theme="dark"] .image-input-placeholder {
										background-image: url(' <?php echo $row['thumbnail'] ?>');
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
										title="Change avatar">
										<i class="ki-duotone ki-pencil fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
										<!--begin::Inputs-->
										<input type="file" name="thumbnail" accept=".png, .jpg, .jpeg"
											value="<?php echo $row['thumbnail'] ?>" />
										<input type="hidden" name="avatar_remove" />
										<!--end::Inputs-->
									</label>
									<!--end::Label-->
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
								<!--begin::Description-->
								<div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and
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
								<select class="form-select mb-2" data-control="select2" data-hide-search="true"
									data-placeholder="Select an option" name="status">
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
								<!--end::Select2-->
								<!--begin::Description-->
								<div class="text-muted fs-7">Set the product status.</div>
								<!--end::Description-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Status-->
						<!--begin::Category & tags-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Product Details</h2>
								</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<!--begin::Input group-->
								<!--begin::Label-->
								<label class="form-label">Categories</label>
								<!--end::Label-->
								<!--begin::Select2-->
								<select class="form-select mb-2" data-control="select2"
									data-placeholder="Select an option" data-allow-clear="false"
									name="product_type_id">
									<option></option>
									<?php
									while ($row2 = mysqli_fetch_assoc($result2)) {
										echo '<option value="' . $row2['id'] . '">' . $row2['name'] . '</option>';
									}
									?>
								</select>
								<!--end::Select2-->
								<!--begin::Description-->
								<div class="text-muted fs-7 mb-7">Add product to a category.</div>
								<!--end::Description-->
								<!--end::Input group-->
								<!--begin::Button-->
								<a href="?action=catalog&query=add-category" class="btn btn-light-primary btn-sm mb-10">
									<i class="ki-duotone ki-plus fs-2"></i>Create new category</a>
								<!--end::Button-->
								<!--begin::Input group-->
								<!--begin::Label-->
								<label class="form-label d-block">Brands</label>
								<!--end::Label-->
								<!--begin::Input-->
								<select class="form-select mb-2" data-control="select2"
									data-placeholder="Select an option" data-allow-clear="false"
									name="brand_id">
									<option></option>
									<?php
									while ($row1 = mysqli_fetch_assoc($result1)) {
										echo '<option value="' . $row1['id'] . '">' . $row1['name'] . '</option>';
									}
									?>
								</select>
								<!--end::Input-->
								<!--begin::Description-->
								<div class="text-muted fs-7">Add Brands to a product.</div>
								<!--end::Description-->
								<!--begin::Button-->
								<a href="?action=catalog&query=add-brand" class="btn btn-light-primary btn-sm mb-10">
									<i class="ki-duotone ki-plus fs-2"></i>Create new Brand</a>
								<!--end::Button-->
								<!--end::Input group-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Category & tags-->
					</div>
					<!--end::Aside column-->
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
						<!--begin:::Tabs-->
						<ul
							class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
									href="#kt_ecommerce_add_product_general">General</a>
							</li>
							<!--end:::Tab item-->
						</ul>
						<!--end:::Tabs-->
						<!--begin::Tab content-->
						<div class="tab-content">
							<!--begin::Tab pane-->
							<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
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
												<label class="required form-label">Product Name</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="product_name" class="form-control mb-2"
													placeholder="Product name" value="<?php echo $row['name'] ?>" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">A product name is required and recommended
													to be unique.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="form-label">Description</label>
												<!--end::Label-->
												<!--begin::Editor-->
												<textarea class="form-control" name="description"
													placeholder="Enter description brand..."
													data-kt-autosize="true"><?php echo $row['description'] ?></textarea>
												<!--end::Editor-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set a description to the product for better
													visibility.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Quantity</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="number" name="quantity" class="form-control mb-2"
													placeholder="Quantity" value="<?php echo $row['quantity'] ?>" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set the product quantity.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::General options-->
									<!--begin::Media-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Media</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<!--begin::Input-->
											<input type="file" accept=".png, .jpg, .jpeg"
												class="form-control form-control-solid" name="image[]" max="10" multiple
												id="mfile" />
											<!--end::Input-->
											<script>
												const input = document.getElementById('mfile');
												input.addEventListener('change', function () {
													const files = input.files;
													if (files.length > 10) {
														alert('Bạn chỉ có thể upload tối đa 10 files!');
														input.value = '';
													}
												});
											</script>
											<!--end::Input group-->
											<!--begin::Description-->
											<div class="text-muted fs-7">Set the product media gallery.</div>
											<!--end::Description-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Media-->
									<!--begin::Pricing-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Pricing</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Base Price</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="number" name="price_in" class="form-control mb-2"
													placeholder="Product price" value="<?php echo $row['price_in'] ?>" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set the product price.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Sell Price</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="number" name="price_out" class="form-control mb-2"
													placeholder="Product price" value="<?php echo $row['price_out'] ?>" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set the product sell price.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Discount (%)</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="number" name="discount" class="form-control mb-2"
													placeholder="" value="<?php echo $row['discount'] ?>" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set discount product sell price.</div>
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
							<a href="?action=catalog&query=products" id="kt_ecommerce_add_product_cancel"
								class="btn btn-light me-5">Cancel</a>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" name="btn-save" class="btn btn-primary">
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