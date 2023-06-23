<?php
// lấy dữ liệu từ bảng brand để hiển thị ra bảng
$result = mysqli_query($conn, 'SELECT * FROM product_type');

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
						Categories</h1>
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
				<!--begin::Category-->
				<div class="card card-flush">
					<!--begin::Card header-->
					<div class="card-header align-items-center py-5 gap-2 gap-md-5">
						<!--begin::Card title-->
						<div class="card-title">
							<!--begin::Search-->
							<div class="d-flex align-items-center position-relative my-1">
							</div>
							<!--end::Search-->
						</div>
						<!--end::Card title-->
						<!--begin::Card toolbar-->
						<div class="card-toolbar">
							<!--begin::Add customer-->
							<a href="?action=catalog&query=add-category" class="btn btn-primary">Add Category</a>
							<!--end::Add customer-->
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0">
						<!--begin::Table-->
						<table class="table align-middle table-row-dashed fs-6 gy-5" id="">
							<thead>
								<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
									<th class="min-w-250px">Category</th>
									<th class="min-w-150px">Status</th>
									<th class="text-end min-w-70px">Actions</th>
								</tr>
							</thead>
							<tbody class="fw-semibold text-gray-600">
								<?php
								while ($row = mysqli_fetch_assoc($result)) {
									$thumbnail = $row['thumbnail'];
									echo '<tr>
										<td>
											<div class="d-flex">
												<!--begin::Thumbnail-->
												<a href="?action=catalog&query=edit-category" class="symbol symbol-50px">
													<span class="symbol-label" style="background-image:url(\'' . $thumbnail . '\');"></span>
												</a>
												<!--end::Thumbnail-->
												<div class="ms-5">
													<!--begin::Title-->
													<a href="?action=catalog&query=edit-category" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">' . $row['name'] . '</a>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-muted fs-7 fw-bold">' . $row['description'] . '</div>
													<!--end::Description-->
												</div>
											</div>
										</td>';
									if ($row['status'] == 0)
										echo '<td><div class="badge badge-light-danger">Inactive</div></td>';
									if ($row['status'] == 1)
										echo '<td><div class="badge badge-light-success">Published</div></td>';
									if ($row['status'] == 2)
										echo '<td><div class="badge badge-light-primary">Scheduled</div></td>';
									echo '<td class="text-end">
											<a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
											<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="?action=catalog&query=edit-category&id=' . $row['id'] . '" class="menu-link px-3">Edit</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a onclick="confirmDelete()" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
													<script>
													function confirmDelete(){
														if(confirm(\'Are you sure you want to delete this category?\')){
															window.location.href = \'?action=catalog&query=categories&id=' . $row['id'] . '&delete\';
														} else {
															window.location.href = \'?action=catalog&query=categories\';
														}}
													</script>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu-->
										</td>
									</tr>';
								}
								?>
							</tbody>
							<!--end::Table body-->
						</table>
						<!--end::Table-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Category-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>
<!--end::Main-->