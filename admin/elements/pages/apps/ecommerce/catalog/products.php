<?php
// Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
$query = "SELECT * FROM product";
// lấy dữ liệu từ bảng brand để hiển thị ra bảng
$result = mysqli_query($conn, $query);

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
                        Products</h1>
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
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" data-kt-ecommerce-product-filter="search"
                                    class="form-control form-control-solid w-250px ps-12"
                                    placeholder="Search Product" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <div class="w-100 mw-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-hide-search="true" data-placeholder="Status"
                                    data-kt-ecommerce-product-filter="status">
                                    <option></option>
                                    <option value="all">All</option>
                                    <option value="published">Published</option>
                                    <option value="scheduled">Scheduled</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--begin::Add product-->
                            <a href="?action=catalog&query=add-product" class="btn btn-primary">Add Product</a>
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table"
                            description="Table Products">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                                value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-200px">Product</th>
                                    <th class="text min-w-200px">Description</th>
                                    <th class="text-end min-w-70px">Qty</th>
                                    <th class="text-end min-w-70px">Purchase</th>
                                    <th class="text-end min-w-70px">Price</th>
                                    <th class="text-end min-w-100px">Status</th>
                                    <th class="text-end min-w-70px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <?php
							while ($row = mysqli_fetch_assoc($result)) {
							echo '<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(\'' . $row['thumbnail']  . '\');"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">' . $row['name'] . '</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text pe-0">
										<span class="fw-bold">' . $row['description'] . '</span>
									</td>
									<td class="text-end pe-0" data-order=\'' . $row['quantity'] . '\'>';
										if ($row['quantity'] == 0)	echo '<span class="badge badge-light-danger">Sold out</span>';
										if ($row['quantity'] > 0 & $row['quantity'] <10)	echo '<span class="badge badge-light-warning">Low stock</span>';
								echo	'<span class="fw-bold ms-3">' . $row['quantity'] . '</span>
									</td>
									<td class="text-end pe-0">' . $row['price_in'] . '</td>
									<td class="text-end pe-0">' . $row['price_out'] . '</td>';
								echo '<td class="text-end pe-0" data-order="<?php' . $row['status'] . '">';
										if ($row['status'] == 0) echo '<div class="badge badge-light-danger">Inactive</div>';
										if ($row['status'] == 1) echo '<div class="badge badge-light-success">Published</div>';
										if ($row['status'] == 2) echo '<div class="badge badge-light-primary">Scheduled</div>';
								echo '<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<div class="menu-item px-3">
												<a href="?action=catalog&query=edit-product&id='. $row['id'] . '" class="menu-link px-3">Edit</a>
											</div>
											<div class="menu-item px-3">
												<a onclick="confirmDelete()" class="menu-link px-3" data-kt-ecommerce-product-filter="">Delete</a>
												<script>
													function confirmDelete(){
														if(confirm(\'Are you sure you want to delete this product?\')){
															window.location.href = \'?action=catalog&query=products&id='. $row['id'] . '&delete\';
														} else {
															window.location.href = \'?action=catalog&query=products\';
														}}
													</script>
											</div>
										</div>
									</td>
								</tr>';
							}
							?>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->

</div>
<!--end:::Main-->