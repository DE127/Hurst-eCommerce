<?php
// lấy dữ liệu từ bảng order
$query = 'SELECT * FROM `order`';
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
                        Orders Listing</h1>
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
                        <li class="breadcrumb-item text-muted">Sales</li>
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
                                <input type="text" data-kt-ecommerce-order-filter="search"
                                    class="form-control form-control-solid w-250px ps-12" placeholder="Search Order" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <!--begin::Flatpickr-->
                            <div class="input-group w-250px">
                                <input class="form-control form-control-solid rounded rounded-end-0"
                                    placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" />
                                <button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                            </div>
                            <!--end::Flatpickr-->
                            <div class="w-100 mw-150px">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-hide-search="true" data-placeholder="Status"
                                    data-kt-ecommerce-order-filter="status">
                                    <option></option>
                                    <option value="all">All</option>
                                    <option value="5">Cancelled</option>
                                    <option value="1">Completed</option>
                                    <option value="2">Rejected</option>
                                    <option value="3">Expired</option>
                                    <option value="4">Failed</option>
                                    <option value="0">Pending</option>
                                    <option value="6">Processing</option>
                                    <option value="7">Refunded</option>
                                    <option value="8">Delivered</option>
                                    <option value="9">Delivering</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--begin::Add product-->
                            <a href="?action=catalog&query=add-product" class="btn btn-primary">Add Order</a>
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_ecommerce_sales_table .form-check-input"
                                                value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-100px">Order ID</th>
                                    <th class="min-w-175px">Customer</th>
                                    <th class="text-end min-w-70px">Status</th>
                                    <th class="text-end min-w-100px">Total</th>
                                    <th class="text-end min-w-100px">Date Modified</th>
                                    <th class="text-end min-w-100px">Date Shipping</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <?php
								while ($row = mysqli_fetch_assoc($result)) {
									$id = $row['customer_id'];
									$customer = mysqli_query($conn, "SELECT * FROM customer WHERE id = '$id' LIMIT 1");
									$row2 = mysqli_fetch_assoc($customer);
                                    $row2['avatar'] = str_replace('admin/', '', $row2['avatar']);
								echo '<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td data-kt-ecommerce-order-filter="order_id">
										<a href="?action=sales&query=details&id='. $row['id'] .'" class="text-gray-800 text-hover-primary fw-bold">'. $row['id'] .'</a>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
												<a href="?action=customers&query=details&id='. $row2['id'] .'">
													<div class="symbol-label">
														<img src="'. $row2['avatar'] .'" class="w-100" />
													</div>
												</a>
											</div>
											<div class="ms-5">
												<a href="?action=customers&query=details&id='. $row2['id'] .'" class="text-gray-800 text-hover-primary fs-5 fw-bold">'. $row2['fullname'] .'</a>
											</div>
										</div>
									</td>';
									if($row['status'] == 1) echo '<td class="text-end pe-0" data-order="1"><div class="badge badge-light-success">Successful</div></td>';
									if($row['status'] == 0) echo '<td class="text-end pe-0" data-order="0"><div class="badge badge-light-warning">Pending</div></td>';
									if($row['status'] == 2) echo '<td class="text-end pe-0" data-order="2"><div class="badge badge-light-danger">Rejected</div></td>';
									if($row['status'] == 3) echo '<td class="text-end pe-0" data-order="3"><div class="badge badge-light-danger">Expired</div></td>';
									if($row['status'] == 4) echo '<td class="text-end pe-0" data-order="4"><div class="badge badge-light-danger">Failed</div></td>';
									if($row['status'] == 5) echo '<td class="text-end pe-0" data-order="5"><div class="badge badge-light-danger">Cancelled</div></td>';
									if($row['status'] == 6) echo '<td class="text-end pe-0" data-order="6"><div class="badge badge-light-primary">Processing</div></td>';
									if($row['status'] == 7) echo '<td class="text-end pe-0" data-order="7"><div class="badge badge-light-info">Refunded</div></td>';
									if($row['status'] == 8) echo '<td class="text-end pe-0" data-order="8"><div class="badge badge-light-success">Delivered</div></td>';
									if($row['status'] == 9) echo '<td class="text-end pe-0" data-order="9"><div class="badge badge-light-primary">Delivering</div></td>';
								echo '<td class="text-end pe-0">
										<span class="fw-bold">$'. $row['total'] .'</span>
									</td>
									<td class="text-end" data-order="'. $row['date_update'] .'">
										<span class="fw-bold">'. $row['date_update'] .'</span>
									</td>
									<td class="text-end" data-order="'. $row['date_ship'] .'">
										<span class="fw-bold">'. $row['date_ship'] .'</span>
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<div class="menu-item px-3">
												<a href="?action=sales&query=details&id='. $row['id'] .'" class="menu-link px-3">View</a>
											</div>
											<div class="menu-item px-3">
												<a href="?action=sales&query=edit-order&id='. $row['id'] .'" class="menu-link px-3">Edit</a>
											</div>
											<div class="menu-item px-3">
												<a onclick="confirmDelete()" class="menu-link px-3">Delete</a>
												<script>
													function confirmDelete(){
														if(confirm(\'Are you sure you want to delete this Order?\')){
															window.location.href = \'?action=sales&query=listing&id='. $row['id'] . '&delete\';
														} else {
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