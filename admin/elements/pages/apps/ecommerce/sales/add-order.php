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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Add Order</h1>
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
				<!--begin::Form-->
				<form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="">
					<!--begin::Aside column-->
					<div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">
						<!--begin::Order details-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<div class="card-title">
									<h2>Order Details</h2>
								</div>
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<div class="d-flex flex-column gap-10">
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="form-label">Order ID</label>
										<!--end::Label-->
										<!--begin::Auto-generated ID-->
										<div class="fw-bold fs-3">#12788</div>
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="required form-label">Payment Method</label>
										<!--end::Label-->
										<!--begin::Select2-->
										<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="payment_method" id="kt_ecommerce_edit_order_payment">
											<option></option>
											<option value="cod">Cash on Delivery</option>
											<option value="visa">Credit Card (Visa)</option>
											<option value="mastercard">Credit Card (Mastercard)</option>
											<option value="paypal">Paypal</option>
										</select>
										<!--end::Select2-->
										<!--begin::Description-->
										<div class="text-muted fs-7">Set the date of the order to process.</div>
										<!--end::Description-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="required form-label">Shipping Method</label>
										<!--end::Label-->
										<!--begin::Select2-->
										<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="shipping_method" id="kt_ecommerce_edit_order_shipping">
											<option></option>
											<option value="none">N/A - Virtual Product</option>
											<option value="standard">Standard Rate</option>
											<option value="express">Express Rate</option>
											<option value="speed">Speed Overnight Rate</option>
										</select>
										<!--end::Select2-->
										<!--begin::Description-->
										<div class="text-muted fs-7">Set the date of the order to process.</div>
										<!--end::Description-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="required form-label">Order Date</label>
										<!--end::Label-->
										<!--begin::Editor-->
										<input id="kt_ecommerce_edit_order_date" name="order_date" placeholder="Select a date" class="form-control mb-2" value="" />
										<!--end::Editor-->
										<!--begin::Description-->
										<div class="text-muted fs-7">Set the date of the order to process.</div>
										<!--end::Description-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Card header-->
						</div>
						<!--end::Order details-->
					</div>
					<!--end::Aside column-->
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
						<!--begin::Order details-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<div class="card-title">
									<h2>Select Products</h2>
								</div>
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<div class="d-flex flex-column gap-10">
									<!--begin::Input group-->
									<div>
										<!--begin::Label-->
										<label class="form-label">Add products to this order</label>
										<!--end::Label-->
										<!--begin::Selected products-->
										<div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 border border-dashed rounded pt-3 pb-1 px-2 mb-5 mh-300px overflow-scroll" id="kt_ecommerce_edit_order_selected_products">
											<!--begin::Empty message-->
											<span class="w-100 text-muted">Select one or more products from the list below by ticking the checkbox.</span>
											<!--end::Empty message-->
										</div>
										<!--begin::Selected products-->
										<!--begin::Total price-->
										<div class="fw-bold fs-4">Total Cost: $
										<span id="kt_ecommerce_edit_order_total_price">0.00</span></div>
										<!--end::Total price-->
									</div>
									<!--end::Input group-->
									<!--begin::Separator-->
									<div class="separator"></div>
									<!--end::Separator-->
									<!--begin::Search products-->
									<div class="d-flex align-items-center position-relative mb-n7">
										<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
										<input type="text" data-kt-ecommerce-edit-order-filter="search" class="form-control form-control-solid w-100 w-lg-50 ps-12" placeholder="Search Products" />
									</div>
									<!--end::Search products-->
									<!--begin::Table-->
									<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_edit_order_product_table">
										<thead>
											<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
												<th class="w-25px pe-2"></th>
												<th class="min-w-200px">Product</th>
												<th class="min-w-100px text-end pe-5">Qty Remaining</th>
											</tr>
										</thead>
										<tbody class="fw-semibold text-gray-600">
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_1">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 1</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">264.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 01696003</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="9">
													<span class="badge badge-light-warning">Low stock</span>
													<span class="fw-bold text-warning ms-3">9</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_2">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/2.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 2</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">28.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 03375001</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="35">
													<span class="fw-bold ms-3">35</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_3">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/3.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 3</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">53.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 01982004</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="14">
													<span class="fw-bold ms-3">14</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_4">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/4.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 4</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">33.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 04466009</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="37">
													<span class="fw-bold ms-3">37</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_5">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/5.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 5</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">224.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 04906008</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="8">
													<span class="badge badge-light-warning">Low stock</span>
													<span class="fw-bold text-warning ms-3">8</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_6">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/6.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 6</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">159.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 01719007</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="5">
													<span class="badge badge-light-warning">Low stock</span>
													<span class="fw-bold text-warning ms-3">5</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_7">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/7.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 7</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">45.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 02525006</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="19">
													<span class="fw-bold ms-3">19</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_8">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/8.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 8</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">15.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 01694001</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="50">
													<span class="fw-bold ms-3">50</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_9">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/9.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 9</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">244.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 04806008</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="40">
													<span class="fw-bold ms-3">40</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_10">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/10.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 10</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">112.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 01187009</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="40">
													<span class="fw-bold ms-3">40</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_11">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/11.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 11</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">47.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 02104009</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="23">
													<span class="fw-bold ms-3">23</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_12">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/12.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 12</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">231.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 01756007</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="41">
													<span class="fw-bold ms-3">41</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_13">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/13.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 13</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">66.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 04541008</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="21">
													<span class="fw-bold ms-3">21</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_14">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/14.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 14</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">125.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 03237001</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="3">
													<span class="badge badge-light-warning">Low stock</span>
													<span class="fw-bold text-warning ms-3">3</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_15">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/15.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 15</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">119.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 01825007</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="10">
													<span class="fw-bold ms-3">10</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_16">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/16.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 16</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">183.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 03126008</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="3">
													<span class="badge badge-light-warning">Low stock</span>
													<span class="fw-bold text-warning ms-3">3</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_17">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/17.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 17</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">102.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 03458002</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="4">
													<span class="badge badge-light-warning">Low stock</span>
													<span class="fw-bold text-warning ms-3">4</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_18">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/18.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 18</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">130.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 03497004</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="26">
													<span class="fw-bold ms-3">26</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_19">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/19.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 19</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">159.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 01843005</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="46">
													<span class="fw-bold ms-3">46</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_20">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/20.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 20</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">10.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 02119009</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="14">
													<span class="fw-bold ms-3">14</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_21">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/21.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 21</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">258.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 04125001</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="47">
													<span class="fw-bold ms-3">47</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_22">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/22.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 22</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">82.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 04793006</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="6">
													<span class="badge badge-light-warning">Low stock</span>
													<span class="fw-bold text-warning ms-3">6</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_23">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/23.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 23</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">243.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 01372001</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="9">
													<span class="badge badge-light-warning">Low stock</span>
													<span class="fw-bold text-warning ms-3">9</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_24">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/24.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 24</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">79.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 04908007</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="47">
													<span class="fw-bold ms-3">47</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_25">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/25.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 25</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">187.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 01316005</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="16">
													<span class="fw-bold ms-3">16</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_26">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/26.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 26</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">16.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 04410005</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="12">
													<span class="fw-bold ms-3">12</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_27">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/27.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 27</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">32.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 02137003</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="24">
													<span class="fw-bold ms-3">24</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_28">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/28.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 28</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">229.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 04972006</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="6">
													<span class="badge badge-light-warning">Low stock</span>
													<span class="fw-bold text-warning ms-3">6</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_29">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/29.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 29</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">242.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 02215006</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="18">
													<span class="fw-bold ms-3">18</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_30">
														<!--begin::Thumbnail-->
														<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/30.gif);"></span>
														</a>
														<!--end::Thumbnail-->
														<div class="ms-5">
															<!--begin::Title-->
															<a href="?action=catalog&query=edit-product" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 30</a>
															<!--end::Title-->
															<!--begin::Price-->
															<div class="fw-semibold fs-7">Price: $
															<span data-kt-ecommerce-edit-order-filter="price">50.00</span></div>
															<!--end::Price-->
															<!--begin::SKU-->
															<div class="text-muted fs-7">SKU: 04649008</div>
															<!--end::SKU-->
														</div>
													</div>
												</td>
												<td class="text-end pe-5" data-order="30">
													<span class="fw-bold ms-3">30</span>
												</td>
											</tr>
										</tbody>
									</table>
									<!--end::Table-->
								</div>
							</div>
							<!--end::Card header-->
						</div>
						<!--end::Order details-->
						<!--begin::Order details-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<div class="card-title">
									<h2>Delivery Details</h2>
								</div>
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<!--begin::Billing address-->
								<div class="d-flex flex-column gap-5 gap-md-7">
									<!--begin::Title-->
									<div class="fs-3 fw-bold mb-n2">Billing Address</div>
									<!--end::Title-->
									<!--begin::Input group-->
									<div class="d-flex flex-column flex-md-row gap-5">
										<div class="fv-row flex-row-fluid">
											<!--begin::Label-->
											<label class="required form-label">Address Line 1</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control" name="billing_order_address_1" placeholder="Address Line 1" value="" />
											<!--end::Input-->
										</div>
										<div class="flex-row-fluid">
											<!--begin::Label-->
											<label class="form-label">Address Line 2</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control" name="billing_order_address_2" placeholder="Address Line 2" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-column flex-md-row gap-5">
										<div class="flex-row-fluid">
											<!--begin::Label-->
											<label class="form-label">City</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control" name="billing_order_city" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<div class="fv-row flex-row-fluid">
											<!--begin::Label-->
											<label class="required form-label">Postcode</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control" name="billing_order_postcode" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<div class="fv-row flex-row-fluid">
											<!--begin::Label-->
											<label class="required form-label">State</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input class="form-control" name="billing_order_state" placeholder="" value="" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="required form-label">Country</label>
										<!--end::Label-->
										<!--begin::Select2-->
										<select class="form-select" data-placeholder="Select an option" id="kt_ecommerce_edit_order_billing_country" name="billing_order_country">
											<option></option>
											<option value="AF" data-kt-select2-country="assets/media/flags/afghanistan.svg">Afghanistan</option>
											<option value="AX" data-kt-select2-country="assets/media/flags/aland-islands.svg">Aland Islands</option>
											<option value="AL" data-kt-select2-country="assets/media/flags/albania.svg">Albania</option>
											<option value="DZ" data-kt-select2-country="assets/media/flags/algeria.svg">Algeria</option>
											<option value="AS" data-kt-select2-country="assets/media/flags/american-samoa.svg">American Samoa</option>
											<option value="AD" data-kt-select2-country="assets/media/flags/andorra.svg">Andorra</option>
											<option value="AO" data-kt-select2-country="assets/media/flags/angola.svg">Angola</option>
											<option value="AI" data-kt-select2-country="assets/media/flags/anguilla.svg">Anguilla</option>
											<option value="AG" data-kt-select2-country="assets/media/flags/antigua-and-barbuda.svg">Antigua and Barbuda</option>
											<option value="AR" data-kt-select2-country="assets/media/flags/argentina.svg">Argentina</option>
											<option value="AM" data-kt-select2-country="assets/media/flags/armenia.svg">Armenia</option>
											<option value="AW" data-kt-select2-country="assets/media/flags/aruba.svg">Aruba</option>
											<option value="AU" data-kt-select2-country="assets/media/flags/australia.svg">Australia</option>
											<option value="AT" data-kt-select2-country="assets/media/flags/austria.svg">Austria</option>
											<option value="AZ" data-kt-select2-country="assets/media/flags/azerbaijan.svg">Azerbaijan</option>
											<option value="BS" data-kt-select2-country="assets/media/flags/bahamas.svg">Bahamas</option>
											<option value="BH" data-kt-select2-country="assets/media/flags/bahrain.svg">Bahrain</option>
											<option value="BD" data-kt-select2-country="assets/media/flags/bangladesh.svg">Bangladesh</option>
											<option value="BB" data-kt-select2-country="assets/media/flags/barbados.svg">Barbados</option>
											<option value="BY" data-kt-select2-country="assets/media/flags/belarus.svg">Belarus</option>
											<option value="BE" data-kt-select2-country="assets/media/flags/belgium.svg">Belgium</option>
											<option value="BZ" data-kt-select2-country="assets/media/flags/belize.svg">Belize</option>
											<option value="BJ" data-kt-select2-country="assets/media/flags/benin.svg">Benin</option>
											<option value="BM" data-kt-select2-country="assets/media/flags/bermuda.svg">Bermuda</option>
											<option value="BT" data-kt-select2-country="assets/media/flags/bhutan.svg">Bhutan</option>
											<option value="BO" data-kt-select2-country="assets/media/flags/bolivia.svg">Bolivia, Plurinational State of</option>
											<option value="BQ" data-kt-select2-country="assets/media/flags/bonaire.svg">Bonaire, Sint Eustatius and Saba</option>
											<option value="BA" data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.svg">Bosnia and Herzegovina</option>
											<option value="BW" data-kt-select2-country="assets/media/flags/botswana.svg">Botswana</option>
											<option value="BR" data-kt-select2-country="assets/media/flags/brazil.svg">Brazil</option>
											<option value="IO" data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.svg">British Indian Ocean Territory</option>
											<option value="BN" data-kt-select2-country="assets/media/flags/brunei.svg">Brunei Darussalam</option>
											<option value="BG" data-kt-select2-country="assets/media/flags/bulgaria.svg">Bulgaria</option>
											<option value="BF" data-kt-select2-country="assets/media/flags/burkina-faso.svg">Burkina Faso</option>
											<option value="BI" data-kt-select2-country="assets/media/flags/burundi.svg">Burundi</option>
											<option value="KH" data-kt-select2-country="assets/media/flags/cambodia.svg">Cambodia</option>
											<option value="CM" data-kt-select2-country="assets/media/flags/cameroon.svg">Cameroon</option>
											<option value="CA" data-kt-select2-country="assets/media/flags/canada.svg">Canada</option>
											<option value="CV" data-kt-select2-country="assets/media/flags/cape-verde.svg">Cape Verde</option>
											<option value="KY" data-kt-select2-country="assets/media/flags/cayman-islands.svg">Cayman Islands</option>
											<option value="CF" data-kt-select2-country="assets/media/flags/central-african-republic.svg">Central African Republic</option>
											<option value="TD" data-kt-select2-country="assets/media/flags/chad.svg">Chad</option>
											<option value="CL" data-kt-select2-country="assets/media/flags/chile.svg">Chile</option>
											<option value="CN" data-kt-select2-country="assets/media/flags/china.svg">China</option>
											<option value="CX" data-kt-select2-country="assets/media/flags/christmas-island.svg">Christmas Island</option>
											<option value="CC" data-kt-select2-country="assets/media/flags/cocos-island.svg">Cocos (Keeling) Islands</option>
											<option value="CO" data-kt-select2-country="assets/media/flags/colombia.svg">Colombia</option>
											<option value="KM" data-kt-select2-country="assets/media/flags/comoros.svg">Comoros</option>
											<option value="CK" data-kt-select2-country="assets/media/flags/cook-islands.svg">Cook Islands</option>
											<option value="CR" data-kt-select2-country="assets/media/flags/costa-rica.svg">Costa Rica</option>
											<option value="CI" data-kt-select2-country="assets/media/flags/ivory-coast.svg">Côte d'Ivoire</option>
											<option value="HR" data-kt-select2-country="assets/media/flags/croatia.svg">Croatia</option>
											<option value="CU" data-kt-select2-country="assets/media/flags/cuba.svg">Cuba</option>
											<option value="CW" data-kt-select2-country="assets/media/flags/curacao.svg">Curaçao</option>
											<option value="CZ" data-kt-select2-country="assets/media/flags/czech-republic.svg">Czech Republic</option>
											<option value="DK" data-kt-select2-country="assets/media/flags/denmark.svg">Denmark</option>
											<option value="DJ" data-kt-select2-country="assets/media/flags/djibouti.svg">Djibouti</option>
											<option value="DM" data-kt-select2-country="assets/media/flags/dominica.svg">Dominica</option>
											<option value="DO" data-kt-select2-country="assets/media/flags/dominican-republic.svg">Dominican Republic</option>
											<option value="EC" data-kt-select2-country="assets/media/flags/ecuador.svg">Ecuador</option>
											<option value="EG" data-kt-select2-country="assets/media/flags/egypt.svg">Egypt</option>
											<option value="SV" data-kt-select2-country="assets/media/flags/el-salvador.svg">El Salvador</option>
											<option value="GQ" data-kt-select2-country="assets/media/flags/equatorial-guinea.svg">Equatorial Guinea</option>
											<option value="ER" data-kt-select2-country="assets/media/flags/eritrea.svg">Eritrea</option>
											<option value="EE" data-kt-select2-country="assets/media/flags/estonia.svg">Estonia</option>
											<option value="ET" data-kt-select2-country="assets/media/flags/ethiopia.svg">Ethiopia</option>
											<option value="FK" data-kt-select2-country="assets/media/flags/falkland-islands.svg">Falkland Islands (Malvinas)</option>
											<option value="FJ" data-kt-select2-country="assets/media/flags/fiji.svg">Fiji</option>
											<option value="FI" data-kt-select2-country="assets/media/flags/finland.svg">Finland</option>
											<option value="FR" data-kt-select2-country="assets/media/flags/france.svg">France</option>
											<option value="PF" data-kt-select2-country="assets/media/flags/french-polynesia.svg">French Polynesia</option>
											<option value="GA" data-kt-select2-country="assets/media/flags/gabon.svg">Gabon</option>
											<option value="GM" data-kt-select2-country="assets/media/flags/gambia.svg">Gambia</option>
											<option value="GE" data-kt-select2-country="assets/media/flags/georgia.svg">Georgia</option>
											<option value="DE" data-kt-select2-country="assets/media/flags/germany.svg">Germany</option>
											<option value="GH" data-kt-select2-country="assets/media/flags/ghana.svg">Ghana</option>
											<option value="GI" data-kt-select2-country="assets/media/flags/gibraltar.svg">Gibraltar</option>
											<option value="GR" data-kt-select2-country="assets/media/flags/greece.svg">Greece</option>
											<option value="GL" data-kt-select2-country="assets/media/flags/greenland.svg">Greenland</option>
											<option value="GD" data-kt-select2-country="assets/media/flags/grenada.svg">Grenada</option>
											<option value="GU" data-kt-select2-country="assets/media/flags/guam.svg">Guam</option>
											<option value="GT" data-kt-select2-country="assets/media/flags/guatemala.svg">Guatemala</option>
											<option value="GG" data-kt-select2-country="assets/media/flags/guernsey.svg">Guernsey</option>
											<option value="GN" data-kt-select2-country="assets/media/flags/guinea.svg">Guinea</option>
											<option value="GW" data-kt-select2-country="assets/media/flags/guinea-bissau.svg">Guinea-Bissau</option>
											<option value="HT" data-kt-select2-country="assets/media/flags/haiti.svg">Haiti</option>
											<option value="VA" data-kt-select2-country="assets/media/flags/vatican-city.svg">Holy See (Vatican City State)</option>
											<option value="HN" data-kt-select2-country="assets/media/flags/honduras.svg">Honduras</option>
											<option value="HK" data-kt-select2-country="assets/media/flags/hong-kong.svg">Hong Kong</option>
											<option value="HU" data-kt-select2-country="assets/media/flags/hungary.svg">Hungary</option>
											<option value="IS" data-kt-select2-country="assets/media/flags/iceland.svg">Iceland</option>
											<option value="IN" data-kt-select2-country="assets/media/flags/india.svg">India</option>
											<option value="ID" data-kt-select2-country="assets/media/flags/indonesia.svg">Indonesia</option>
											<option value="IR" data-kt-select2-country="assets/media/flags/iran.svg">Iran, Islamic Republic of</option>
											<option value="IQ" data-kt-select2-country="assets/media/flags/iraq.svg">Iraq</option>
											<option value="IE" data-kt-select2-country="assets/media/flags/ireland.svg">Ireland</option>
											<option value="IM" data-kt-select2-country="assets/media/flags/isle-of-man.svg">Isle of Man</option>
											<option value="IL" data-kt-select2-country="assets/media/flags/israel.svg">Israel</option>
											<option value="IT" data-kt-select2-country="assets/media/flags/italy.svg">Italy</option>
											<option value="JM" data-kt-select2-country="assets/media/flags/jamaica.svg">Jamaica</option>
											<option value="JP" data-kt-select2-country="assets/media/flags/japan.svg">Japan</option>
											<option value="JE" data-kt-select2-country="assets/media/flags/jersey.svg">Jersey</option>
											<option value="JO" data-kt-select2-country="assets/media/flags/jordan.svg">Jordan</option>
											<option value="KZ" data-kt-select2-country="assets/media/flags/kazakhstan.svg">Kazakhstan</option>
											<option value="KE" data-kt-select2-country="assets/media/flags/kenya.svg">Kenya</option>
											<option value="KI" data-kt-select2-country="assets/media/flags/kiribati.svg">Kiribati</option>
											<option value="KP" data-kt-select2-country="assets/media/flags/north-korea.svg">Korea, Democratic People's Republic of</option>
											<option value="KW" data-kt-select2-country="assets/media/flags/kuwait.svg">Kuwait</option>
											<option value="KG" data-kt-select2-country="assets/media/flags/kyrgyzstan.svg">Kyrgyzstan</option>
											<option value="LA" data-kt-select2-country="assets/media/flags/laos.svg">Lao People's Democratic Republic</option>
											<option value="LV" data-kt-select2-country="assets/media/flags/latvia.svg">Latvia</option>
											<option value="LB" data-kt-select2-country="assets/media/flags/lebanon.svg">Lebanon</option>
											<option value="LS" data-kt-select2-country="assets/media/flags/lesotho.svg">Lesotho</option>
											<option value="LR" data-kt-select2-country="assets/media/flags/liberia.svg">Liberia</option>
											<option value="LY" data-kt-select2-country="assets/media/flags/libya.svg">Libya</option>
											<option value="LI" data-kt-select2-country="assets/media/flags/liechtenstein.svg">Liechtenstein</option>
											<option value="LT" data-kt-select2-country="assets/media/flags/lithuania.svg">Lithuania</option>
											<option value="LU" data-kt-select2-country="assets/media/flags/luxembourg.svg">Luxembourg</option>
											<option value="MO" data-kt-select2-country="assets/media/flags/macao.svg">Macao</option>
											<option value="MG" data-kt-select2-country="assets/media/flags/madagascar.svg">Madagascar</option>
											<option value="MW" data-kt-select2-country="assets/media/flags/malawi.svg">Malawi</option>
											<option value="MY" data-kt-select2-country="assets/media/flags/malaysia.svg">Malaysia</option>
											<option value="MV" data-kt-select2-country="assets/media/flags/maldives.svg">Maldives</option>
											<option value="ML" data-kt-select2-country="assets/media/flags/mali.svg">Mali</option>
											<option value="MT" data-kt-select2-country="assets/media/flags/malta.svg">Malta</option>
											<option value="MH" data-kt-select2-country="assets/media/flags/marshall-island.svg">Marshall Islands</option>
											<option value="MQ" data-kt-select2-country="assets/media/flags/martinique.svg">Martinique</option>
											<option value="MR" data-kt-select2-country="assets/media/flags/mauritania.svg">Mauritania</option>
											<option value="MU" data-kt-select2-country="assets/media/flags/mauritius.svg">Mauritius</option>
											<option value="MX" data-kt-select2-country="assets/media/flags/mexico.svg">Mexico</option>
											<option value="FM" data-kt-select2-country="assets/media/flags/micronesia.svg">Micronesia, Federated States of</option>
											<option value="MD" data-kt-select2-country="assets/media/flags/moldova.svg">Moldova, Republic of</option>
											<option value="MC" data-kt-select2-country="assets/media/flags/monaco.svg">Monaco</option>
											<option value="MN" data-kt-select2-country="assets/media/flags/mongolia.svg">Mongolia</option>
											<option value="ME" data-kt-select2-country="assets/media/flags/montenegro.svg">Montenegro</option>
											<option value="MS" data-kt-select2-country="assets/media/flags/montserrat.svg">Montserrat</option>
											<option value="MA" data-kt-select2-country="assets/media/flags/morocco.svg">Morocco</option>
											<option value="MZ" data-kt-select2-country="assets/media/flags/mozambique.svg">Mozambique</option>
											<option value="MM" data-kt-select2-country="assets/media/flags/myanmar.svg">Myanmar</option>
											<option value="NA" data-kt-select2-country="assets/media/flags/namibia.svg">Namibia</option>
											<option value="NR" data-kt-select2-country="assets/media/flags/nauru.svg">Nauru</option>
											<option value="NP" data-kt-select2-country="assets/media/flags/nepal.svg">Nepal</option>
											<option value="NL" data-kt-select2-country="assets/media/flags/netherlands.svg">Netherlands</option>
											<option value="NZ" data-kt-select2-country="assets/media/flags/new-zealand.svg">New Zealand</option>
											<option value="NI" data-kt-select2-country="assets/media/flags/nicaragua.svg">Nicaragua</option>
											<option value="NE" data-kt-select2-country="assets/media/flags/niger.svg">Niger</option>
											<option value="NG" data-kt-select2-country="assets/media/flags/nigeria.svg">Nigeria</option>
											<option value="NU" data-kt-select2-country="assets/media/flags/niue.svg">Niue</option>
											<option value="NF" data-kt-select2-country="assets/media/flags/norfolk-island.svg">Norfolk Island</option>
											<option value="MP" data-kt-select2-country="assets/media/flags/northern-mariana-islands.svg">Northern Mariana Islands</option>
											<option value="NO" data-kt-select2-country="assets/media/flags/norway.svg">Norway</option>
											<option value="OM" data-kt-select2-country="assets/media/flags/oman.svg">Oman</option>
											<option value="PK" data-kt-select2-country="assets/media/flags/pakistan.svg">Pakistan</option>
											<option value="PW" data-kt-select2-country="assets/media/flags/palau.svg">Palau</option>
											<option value="PS" data-kt-select2-country="assets/media/flags/palestine.svg">Palestinian Territory, Occupied</option>
											<option value="PA" data-kt-select2-country="assets/media/flags/panama.svg">Panama</option>
											<option value="PG" data-kt-select2-country="assets/media/flags/papua-new-guinea.svg">Papua New Guinea</option>
											<option value="PY" data-kt-select2-country="assets/media/flags/paraguay.svg">Paraguay</option>
											<option value="PE" data-kt-select2-country="assets/media/flags/peru.svg">Peru</option>
											<option value="PH" data-kt-select2-country="assets/media/flags/philippines.svg">Philippines</option>
											<option value="PL" data-kt-select2-country="assets/media/flags/poland.svg">Poland</option>
											<option value="PT" data-kt-select2-country="assets/media/flags/portugal.svg">Portugal</option>
											<option value="PR" data-kt-select2-country="assets/media/flags/puerto-rico.svg">Puerto Rico</option>
											<option value="QA" data-kt-select2-country="assets/media/flags/qatar.svg">Qatar</option>
											<option value="RO" data-kt-select2-country="assets/media/flags/romania.svg">Romania</option>
											<option value="RU" data-kt-select2-country="assets/media/flags/russia.svg">Russian Federation</option>
											<option value="RW" data-kt-select2-country="assets/media/flags/rwanda.svg">Rwanda</option>
											<option value="BL" data-kt-select2-country="assets/media/flags/st-barts.svg">Saint Barthélemy</option>
											<option value="KN" data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.svg">Saint Kitts and Nevis</option>
											<option value="LC" data-kt-select2-country="assets/media/flags/st-lucia.svg">Saint Lucia</option>
											<option value="MF" data-kt-select2-country="assets/media/flags/sint-maarten.svg">Saint Martin (French part)</option>
											<option value="VC" data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.svg">Saint Vincent and the Grenadines</option>
											<option value="WS" data-kt-select2-country="assets/media/flags/samoa.svg">Samoa</option>
											<option value="SM" data-kt-select2-country="assets/media/flags/san-marino.svg">San Marino</option>
											<option value="ST" data-kt-select2-country="assets/media/flags/sao-tome-and-prince.svg">Sao Tome and Principe</option>
											<option value="SA" data-kt-select2-country="assets/media/flags/saudi-arabia.svg">Saudi Arabia</option>
											<option value="SN" data-kt-select2-country="assets/media/flags/senegal.svg">Senegal</option>
											<option value="RS" data-kt-select2-country="assets/media/flags/serbia.svg">Serbia</option>
											<option value="SC" data-kt-select2-country="assets/media/flags/seychelles.svg">Seychelles</option>
											<option value="SL" data-kt-select2-country="assets/media/flags/sierra-leone.svg">Sierra Leone</option>
											<option value="SG" data-kt-select2-country="assets/media/flags/singapore.svg">Singapore</option>
											<option value="SX" data-kt-select2-country="assets/media/flags/sint-maarten.svg">Sint Maarten (Dutch part)</option>
											<option value="SK" data-kt-select2-country="assets/media/flags/slovakia.svg">Slovakia</option>
											<option value="SI" data-kt-select2-country="assets/media/flags/slovenia.svg">Slovenia</option>
											<option value="SB" data-kt-select2-country="assets/media/flags/solomon-islands.svg">Solomon Islands</option>
											<option value="SO" data-kt-select2-country="assets/media/flags/somalia.svg">Somalia</option>
											<option value="ZA" data-kt-select2-country="assets/media/flags/south-africa.svg">South Africa</option>
											<option value="KR" data-kt-select2-country="assets/media/flags/south-korea.svg">South Korea</option>
											<option value="SS" data-kt-select2-country="assets/media/flags/south-sudan.svg">South Sudan</option>
											<option value="ES" data-kt-select2-country="assets/media/flags/spain.svg">Spain</option>
											<option value="LK" data-kt-select2-country="assets/media/flags/sri-lanka.svg">Sri Lanka</option>
											<option value="SD" data-kt-select2-country="assets/media/flags/sudan.svg">Sudan</option>
											<option value="SR" data-kt-select2-country="assets/media/flags/suriname.svg">Suriname</option>
											<option value="SZ" data-kt-select2-country="assets/media/flags/swaziland.svg">Swaziland</option>
											<option value="SE" data-kt-select2-country="assets/media/flags/sweden.svg">Sweden</option>
											<option value="CH" data-kt-select2-country="assets/media/flags/switzerland.svg">Switzerland</option>
											<option value="SY" data-kt-select2-country="assets/media/flags/syria.svg">Syrian Arab Republic</option>
											<option value="TW" data-kt-select2-country="assets/media/flags/taiwan.svg">Taiwan, Province of China</option>
											<option value="TJ" data-kt-select2-country="assets/media/flags/tajikistan.svg">Tajikistan</option>
											<option value="TZ" data-kt-select2-country="assets/media/flags/tanzania.svg">Tanzania, United Republic of</option>
											<option value="TH" data-kt-select2-country="assets/media/flags/thailand.svg">Thailand</option>
											<option value="TG" data-kt-select2-country="assets/media/flags/togo.svg">Togo</option>
											<option value="TK" data-kt-select2-country="assets/media/flags/tokelau.svg">Tokelau</option>
											<option value="TO" data-kt-select2-country="assets/media/flags/tonga.svg">Tonga</option>
											<option value="TT" data-kt-select2-country="assets/media/flags/trinidad-and-tobago.svg">Trinidad and Tobago</option>
											<option value="TN" data-kt-select2-country="assets/media/flags/tunisia.svg">Tunisia</option>
											<option value="TR" data-kt-select2-country="assets/media/flags/turkey.svg">Turkey</option>
											<option value="TM" data-kt-select2-country="assets/media/flags/turkmenistan.svg">Turkmenistan</option>
											<option value="TC" data-kt-select2-country="assets/media/flags/turks-and-caicos.svg">Turks and Caicos Islands</option>
											<option value="TV" data-kt-select2-country="assets/media/flags/tuvalu.svg">Tuvalu</option>
											<option value="UG" data-kt-select2-country="assets/media/flags/uganda.svg">Uganda</option>
											<option value="UA" data-kt-select2-country="assets/media/flags/ukraine.svg">Ukraine</option>
											<option value="AE" data-kt-select2-country="assets/media/flags/united-arab-emirates.svg">United Arab Emirates</option>
											<option value="GB" data-kt-select2-country="assets/media/flags/united-kingdom.svg">United Kingdom</option>
											<option value="US" data-kt-select2-country="assets/media/flags/united-states.svg">United States</option>
											<option value="UY" data-kt-select2-country="assets/media/flags/uruguay.svg">Uruguay</option>
											<option value="UZ" data-kt-select2-country="assets/media/flags/uzbekistan.svg">Uzbekistan</option>
											<option value="VU" data-kt-select2-country="assets/media/flags/vanuatu.svg">Vanuatu</option>
											<option value="VE" data-kt-select2-country="assets/media/flags/venezuela.svg">Venezuela, Bolivarian Republic of</option>
											<option value="VN" data-kt-select2-country="assets/media/flags/vietnam.svg">Vietnam</option>
											<option value="VI" data-kt-select2-country="assets/media/flags/virgin-islands.svg">Virgin Islands</option>
											<option value="YE" data-kt-select2-country="assets/media/flags/yemen.svg">Yemen</option>
											<option value="ZM" data-kt-select2-country="assets/media/flags/zambia.svg">Zambia</option>
											<option value="ZW" data-kt-select2-country="assets/media/flags/zimbabwe.svg">Zimbabwe</option>
										</select>
										<!--end::Select2-->
									</div>
									<!--end::Input group-->
									<!--begin::Checkbox-->
									<div class="form-check form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="" id="same_as_billing" checked="checked" />
										<label class="form-check-label" for="same_as_billing">Shipping address is the same as billing address</label>
									</div>
									<!--end::Checkbox-->
									<!--begin::Shipping address-->
									<div class="d-none d-flex flex-column gap-5 gap-md-7" id="kt_ecommerce_edit_order_shipping_form">
										<!--begin::Title-->
										<div class="fs-3 fw-bold mb-n2">Shipping Address</div>
										<!--end::Title-->
										<!--begin::Input group-->
										<div class="d-flex flex-column flex-md-row gap-5">
											<div class="fv-row flex-row-fluid">
												<!--begin::Label-->
												<label class="form-label">Address Line 1</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control" name="kt_ecommerce_edit_order_address_1" placeholder="Address Line 1" value="" />
												<!--end::Input-->
											</div>
											<div class="flex-row-fluid">
												<!--begin::Label-->
												<label class="form-label">Address Line 2</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control" name="kt_ecommerce_edit_order_address_2" placeholder="Address Line 2" />
												<!--end::Input-->
											</div>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column flex-md-row gap-5">
											<div class="flex-row-fluid">
												<!--begin::Label-->
												<label class="form-label">City</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control" name="kt_ecommerce_edit_order_city" placeholder="" value="" />
												<!--end::Input-->
											</div>
											<div class="fv-row flex-row-fluid">
												<!--begin::Label-->
												<label class="form-label">Postcode</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control" name="kt_ecommerce_edit_order_postcode" placeholder="" value="" />
												<!--end::Input-->
											</div>
											<div class="fv-row flex-row-fluid">
												<!--begin::Label-->
												<label class="form-label">State</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control" name="kt_ecommerce_edit_order_state" placeholder="" value="" />
												<!--end::Input-->
											</div>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Label-->
											<label class="form-label">Country</label>
											<!--end::Label-->
											<!--begin::Select2-->
											<select class="form-select" data-placeholder="Select an option" id="kt_ecommerce_edit_order_shipping_country">
												<option></option>
												<option value="AF" data-kt-select2-country="assets/media/flags/afghanistan.svg">Afghanistan</option>
												<option value="AX" data-kt-select2-country="assets/media/flags/aland-islands.svg">Aland Islands</option>
												<option value="AL" data-kt-select2-country="assets/media/flags/albania.svg">Albania</option>
												<option value="DZ" data-kt-select2-country="assets/media/flags/algeria.svg">Algeria</option>
												<option value="AS" data-kt-select2-country="assets/media/flags/american-samoa.svg">American Samoa</option>
												<option value="AD" data-kt-select2-country="assets/media/flags/andorra.svg">Andorra</option>
												<option value="AO" data-kt-select2-country="assets/media/flags/angola.svg">Angola</option>
												<option value="AI" data-kt-select2-country="assets/media/flags/anguilla.svg">Anguilla</option>
												<option value="AG" data-kt-select2-country="assets/media/flags/antigua-and-barbuda.svg">Antigua and Barbuda</option>
												<option value="AR" data-kt-select2-country="assets/media/flags/argentina.svg">Argentina</option>
												<option value="AM" data-kt-select2-country="assets/media/flags/armenia.svg">Armenia</option>
												<option value="AW" data-kt-select2-country="assets/media/flags/aruba.svg">Aruba</option>
												<option value="AU" data-kt-select2-country="assets/media/flags/australia.svg">Australia</option>
												<option value="AT" data-kt-select2-country="assets/media/flags/austria.svg">Austria</option>
												<option value="AZ" data-kt-select2-country="assets/media/flags/azerbaijan.svg">Azerbaijan</option>
												<option value="BS" data-kt-select2-country="assets/media/flags/bahamas.svg">Bahamas</option>
												<option value="BH" data-kt-select2-country="assets/media/flags/bahrain.svg">Bahrain</option>
												<option value="BD" data-kt-select2-country="assets/media/flags/bangladesh.svg">Bangladesh</option>
												<option value="BB" data-kt-select2-country="assets/media/flags/barbados.svg">Barbados</option>
												<option value="BY" data-kt-select2-country="assets/media/flags/belarus.svg">Belarus</option>
												<option value="BE" data-kt-select2-country="assets/media/flags/belgium.svg">Belgium</option>
												<option value="BZ" data-kt-select2-country="assets/media/flags/belize.svg">Belize</option>
												<option value="BJ" data-kt-select2-country="assets/media/flags/benin.svg">Benin</option>
												<option value="BM" data-kt-select2-country="assets/media/flags/bermuda.svg">Bermuda</option>
												<option value="BT" data-kt-select2-country="assets/media/flags/bhutan.svg">Bhutan</option>
												<option value="BO" data-kt-select2-country="assets/media/flags/bolivia.svg">Bolivia, Plurinational State of</option>
												<option value="BQ" data-kt-select2-country="assets/media/flags/bonaire.svg">Bonaire, Sint Eustatius and Saba</option>
												<option value="BA" data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.svg">Bosnia and Herzegovina</option>
												<option value="BW" data-kt-select2-country="assets/media/flags/botswana.svg">Botswana</option>
												<option value="BR" data-kt-select2-country="assets/media/flags/brazil.svg">Brazil</option>
												<option value="IO" data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.svg">British Indian Ocean Territory</option>
												<option value="BN" data-kt-select2-country="assets/media/flags/brunei.svg">Brunei Darussalam</option>
												<option value="BG" data-kt-select2-country="assets/media/flags/bulgaria.svg">Bulgaria</option>
												<option value="BF" data-kt-select2-country="assets/media/flags/burkina-faso.svg">Burkina Faso</option>
												<option value="BI" data-kt-select2-country="assets/media/flags/burundi.svg">Burundi</option>
												<option value="KH" data-kt-select2-country="assets/media/flags/cambodia.svg">Cambodia</option>
												<option value="CM" data-kt-select2-country="assets/media/flags/cameroon.svg">Cameroon</option>
												<option value="CA" data-kt-select2-country="assets/media/flags/canada.svg">Canada</option>
												<option value="CV" data-kt-select2-country="assets/media/flags/cape-verde.svg">Cape Verde</option>
												<option value="KY" data-kt-select2-country="assets/media/flags/cayman-islands.svg">Cayman Islands</option>
												<option value="CF" data-kt-select2-country="assets/media/flags/central-african-republic.svg">Central African Republic</option>
												<option value="TD" data-kt-select2-country="assets/media/flags/chad.svg">Chad</option>
												<option value="CL" data-kt-select2-country="assets/media/flags/chile.svg">Chile</option>
												<option value="CN" data-kt-select2-country="assets/media/flags/china.svg">China</option>
												<option value="CX" data-kt-select2-country="assets/media/flags/christmas-island.svg">Christmas Island</option>
												<option value="CC" data-kt-select2-country="assets/media/flags/cocos-island.svg">Cocos (Keeling) Islands</option>
												<option value="CO" data-kt-select2-country="assets/media/flags/colombia.svg">Colombia</option>
												<option value="KM" data-kt-select2-country="assets/media/flags/comoros.svg">Comoros</option>
												<option value="CK" data-kt-select2-country="assets/media/flags/cook-islands.svg">Cook Islands</option>
												<option value="CR" data-kt-select2-country="assets/media/flags/costa-rica.svg">Costa Rica</option>
												<option value="CI" data-kt-select2-country="assets/media/flags/ivory-coast.svg">Côte d'Ivoire</option>
												<option value="HR" data-kt-select2-country="assets/media/flags/croatia.svg">Croatia</option>
												<option value="CU" data-kt-select2-country="assets/media/flags/cuba.svg">Cuba</option>
												<option value="CW" data-kt-select2-country="assets/media/flags/curacao.svg">Curaçao</option>
												<option value="CZ" data-kt-select2-country="assets/media/flags/czech-republic.svg">Czech Republic</option>
												<option value="DK" data-kt-select2-country="assets/media/flags/denmark.svg">Denmark</option>
												<option value="DJ" data-kt-select2-country="assets/media/flags/djibouti.svg">Djibouti</option>
												<option value="DM" data-kt-select2-country="assets/media/flags/dominica.svg">Dominica</option>
												<option value="DO" data-kt-select2-country="assets/media/flags/dominican-republic.svg">Dominican Republic</option>
												<option value="EC" data-kt-select2-country="assets/media/flags/ecuador.svg">Ecuador</option>
												<option value="EG" data-kt-select2-country="assets/media/flags/egypt.svg">Egypt</option>
												<option value="SV" data-kt-select2-country="assets/media/flags/el-salvador.svg">El Salvador</option>
												<option value="GQ" data-kt-select2-country="assets/media/flags/equatorial-guinea.svg">Equatorial Guinea</option>
												<option value="ER" data-kt-select2-country="assets/media/flags/eritrea.svg">Eritrea</option>
												<option value="EE" data-kt-select2-country="assets/media/flags/estonia.svg">Estonia</option>
												<option value="ET" data-kt-select2-country="assets/media/flags/ethiopia.svg">Ethiopia</option>
												<option value="FK" data-kt-select2-country="assets/media/flags/falkland-islands.svg">Falkland Islands (Malvinas)</option>
												<option value="FJ" data-kt-select2-country="assets/media/flags/fiji.svg">Fiji</option>
												<option value="FI" data-kt-select2-country="assets/media/flags/finland.svg">Finland</option>
												<option value="FR" data-kt-select2-country="assets/media/flags/france.svg">France</option>
												<option value="PF" data-kt-select2-country="assets/media/flags/french-polynesia.svg">French Polynesia</option>
												<option value="GA" data-kt-select2-country="assets/media/flags/gabon.svg">Gabon</option>
												<option value="GM" data-kt-select2-country="assets/media/flags/gambia.svg">Gambia</option>
												<option value="GE" data-kt-select2-country="assets/media/flags/georgia.svg">Georgia</option>
												<option value="DE" data-kt-select2-country="assets/media/flags/germany.svg">Germany</option>
												<option value="GH" data-kt-select2-country="assets/media/flags/ghana.svg">Ghana</option>
												<option value="GI" data-kt-select2-country="assets/media/flags/gibraltar.svg">Gibraltar</option>
												<option value="GR" data-kt-select2-country="assets/media/flags/greece.svg">Greece</option>
												<option value="GL" data-kt-select2-country="assets/media/flags/greenland.svg">Greenland</option>
												<option value="GD" data-kt-select2-country="assets/media/flags/grenada.svg">Grenada</option>
												<option value="GU" data-kt-select2-country="assets/media/flags/guam.svg">Guam</option>
												<option value="GT" data-kt-select2-country="assets/media/flags/guatemala.svg">Guatemala</option>
												<option value="GG" data-kt-select2-country="assets/media/flags/guernsey.svg">Guernsey</option>
												<option value="GN" data-kt-select2-country="assets/media/flags/guinea.svg">Guinea</option>
												<option value="GW" data-kt-select2-country="assets/media/flags/guinea-bissau.svg">Guinea-Bissau</option>
												<option value="HT" data-kt-select2-country="assets/media/flags/haiti.svg">Haiti</option>
												<option value="VA" data-kt-select2-country="assets/media/flags/vatican-city.svg">Holy See (Vatican City State)</option>
												<option value="HN" data-kt-select2-country="assets/media/flags/honduras.svg">Honduras</option>
												<option value="HK" data-kt-select2-country="assets/media/flags/hong-kong.svg">Hong Kong</option>
												<option value="HU" data-kt-select2-country="assets/media/flags/hungary.svg">Hungary</option>
												<option value="IS" data-kt-select2-country="assets/media/flags/iceland.svg">Iceland</option>
												<option value="IN" data-kt-select2-country="assets/media/flags/india.svg">India</option>
												<option value="ID" data-kt-select2-country="assets/media/flags/indonesia.svg">Indonesia</option>
												<option value="IR" data-kt-select2-country="assets/media/flags/iran.svg">Iran, Islamic Republic of</option>
												<option value="IQ" data-kt-select2-country="assets/media/flags/iraq.svg">Iraq</option>
												<option value="IE" data-kt-select2-country="assets/media/flags/ireland.svg">Ireland</option>
												<option value="IM" data-kt-select2-country="assets/media/flags/isle-of-man.svg">Isle of Man</option>
												<option value="IL" data-kt-select2-country="assets/media/flags/israel.svg">Israel</option>
												<option value="IT" data-kt-select2-country="assets/media/flags/italy.svg">Italy</option>
												<option value="JM" data-kt-select2-country="assets/media/flags/jamaica.svg">Jamaica</option>
												<option value="JP" data-kt-select2-country="assets/media/flags/japan.svg">Japan</option>
												<option value="JE" data-kt-select2-country="assets/media/flags/jersey.svg">Jersey</option>
												<option value="JO" data-kt-select2-country="assets/media/flags/jordan.svg">Jordan</option>
												<option value="KZ" data-kt-select2-country="assets/media/flags/kazakhstan.svg">Kazakhstan</option>
												<option value="KE" data-kt-select2-country="assets/media/flags/kenya.svg">Kenya</option>
												<option value="KI" data-kt-select2-country="assets/media/flags/kiribati.svg">Kiribati</option>
												<option value="KP" data-kt-select2-country="assets/media/flags/north-korea.svg">Korea, Democratic People's Republic of</option>
												<option value="KW" data-kt-select2-country="assets/media/flags/kuwait.svg">Kuwait</option>
												<option value="KG" data-kt-select2-country="assets/media/flags/kyrgyzstan.svg">Kyrgyzstan</option>
												<option value="LA" data-kt-select2-country="assets/media/flags/laos.svg">Lao People's Democratic Republic</option>
												<option value="LV" data-kt-select2-country="assets/media/flags/latvia.svg">Latvia</option>
												<option value="LB" data-kt-select2-country="assets/media/flags/lebanon.svg">Lebanon</option>
												<option value="LS" data-kt-select2-country="assets/media/flags/lesotho.svg">Lesotho</option>
												<option value="LR" data-kt-select2-country="assets/media/flags/liberia.svg">Liberia</option>
												<option value="LY" data-kt-select2-country="assets/media/flags/libya.svg">Libya</option>
												<option value="LI" data-kt-select2-country="assets/media/flags/liechtenstein.svg">Liechtenstein</option>
												<option value="LT" data-kt-select2-country="assets/media/flags/lithuania.svg">Lithuania</option>
												<option value="LU" data-kt-select2-country="assets/media/flags/luxembourg.svg">Luxembourg</option>
												<option value="MO" data-kt-select2-country="assets/media/flags/macao.svg">Macao</option>
												<option value="MG" data-kt-select2-country="assets/media/flags/madagascar.svg">Madagascar</option>
												<option value="MW" data-kt-select2-country="assets/media/flags/malawi.svg">Malawi</option>
												<option value="MY" data-kt-select2-country="assets/media/flags/malaysia.svg">Malaysia</option>
												<option value="MV" data-kt-select2-country="assets/media/flags/maldives.svg">Maldives</option>
												<option value="ML" data-kt-select2-country="assets/media/flags/mali.svg">Mali</option>
												<option value="MT" data-kt-select2-country="assets/media/flags/malta.svg">Malta</option>
												<option value="MH" data-kt-select2-country="assets/media/flags/marshall-island.svg">Marshall Islands</option>
												<option value="MQ" data-kt-select2-country="assets/media/flags/martinique.svg">Martinique</option>
												<option value="MR" data-kt-select2-country="assets/media/flags/mauritania.svg">Mauritania</option>
												<option value="MU" data-kt-select2-country="assets/media/flags/mauritius.svg">Mauritius</option>
												<option value="MX" data-kt-select2-country="assets/media/flags/mexico.svg">Mexico</option>
												<option value="FM" data-kt-select2-country="assets/media/flags/micronesia.svg">Micronesia, Federated States of</option>
												<option value="MD" data-kt-select2-country="assets/media/flags/moldova.svg">Moldova, Republic of</option>
												<option value="MC" data-kt-select2-country="assets/media/flags/monaco.svg">Monaco</option>
												<option value="MN" data-kt-select2-country="assets/media/flags/mongolia.svg">Mongolia</option>
												<option value="ME" data-kt-select2-country="assets/media/flags/montenegro.svg">Montenegro</option>
												<option value="MS" data-kt-select2-country="assets/media/flags/montserrat.svg">Montserrat</option>
												<option value="MA" data-kt-select2-country="assets/media/flags/morocco.svg">Morocco</option>
												<option value="MZ" data-kt-select2-country="assets/media/flags/mozambique.svg">Mozambique</option>
												<option value="MM" data-kt-select2-country="assets/media/flags/myanmar.svg">Myanmar</option>
												<option value="NA" data-kt-select2-country="assets/media/flags/namibia.svg">Namibia</option>
												<option value="NR" data-kt-select2-country="assets/media/flags/nauru.svg">Nauru</option>
												<option value="NP" data-kt-select2-country="assets/media/flags/nepal.svg">Nepal</option>
												<option value="NL" data-kt-select2-country="assets/media/flags/netherlands.svg">Netherlands</option>
												<option value="NZ" data-kt-select2-country="assets/media/flags/new-zealand.svg">New Zealand</option>
												<option value="NI" data-kt-select2-country="assets/media/flags/nicaragua.svg">Nicaragua</option>
												<option value="NE" data-kt-select2-country="assets/media/flags/niger.svg">Niger</option>
												<option value="NG" data-kt-select2-country="assets/media/flags/nigeria.svg">Nigeria</option>
												<option value="NU" data-kt-select2-country="assets/media/flags/niue.svg">Niue</option>
												<option value="NF" data-kt-select2-country="assets/media/flags/norfolk-island.svg">Norfolk Island</option>
												<option value="MP" data-kt-select2-country="assets/media/flags/northern-mariana-islands.svg">Northern Mariana Islands</option>
												<option value="NO" data-kt-select2-country="assets/media/flags/norway.svg">Norway</option>
												<option value="OM" data-kt-select2-country="assets/media/flags/oman.svg">Oman</option>
												<option value="PK" data-kt-select2-country="assets/media/flags/pakistan.svg">Pakistan</option>
												<option value="PW" data-kt-select2-country="assets/media/flags/palau.svg">Palau</option>
												<option value="PS" data-kt-select2-country="assets/media/flags/palestine.svg">Palestinian Territory, Occupied</option>
												<option value="PA" data-kt-select2-country="assets/media/flags/panama.svg">Panama</option>
												<option value="PG" data-kt-select2-country="assets/media/flags/papua-new-guinea.svg">Papua New Guinea</option>
												<option value="PY" data-kt-select2-country="assets/media/flags/paraguay.svg">Paraguay</option>
												<option value="PE" data-kt-select2-country="assets/media/flags/peru.svg">Peru</option>
												<option value="PH" data-kt-select2-country="assets/media/flags/philippines.svg">Philippines</option>
												<option value="PL" data-kt-select2-country="assets/media/flags/poland.svg">Poland</option>
												<option value="PT" data-kt-select2-country="assets/media/flags/portugal.svg">Portugal</option>
												<option value="PR" data-kt-select2-country="assets/media/flags/puerto-rico.svg">Puerto Rico</option>
												<option value="QA" data-kt-select2-country="assets/media/flags/qatar.svg">Qatar</option>
												<option value="RO" data-kt-select2-country="assets/media/flags/romania.svg">Romania</option>
												<option value="RU" data-kt-select2-country="assets/media/flags/russia.svg">Russian Federation</option>
												<option value="RW" data-kt-select2-country="assets/media/flags/rwanda.svg">Rwanda</option>
												<option value="BL" data-kt-select2-country="assets/media/flags/st-barts.svg">Saint Barthélemy</option>
												<option value="KN" data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.svg">Saint Kitts and Nevis</option>
												<option value="LC" data-kt-select2-country="assets/media/flags/st-lucia.svg">Saint Lucia</option>
												<option value="MF" data-kt-select2-country="assets/media/flags/sint-maarten.svg">Saint Martin (French part)</option>
												<option value="VC" data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.svg">Saint Vincent and the Grenadines</option>
												<option value="WS" data-kt-select2-country="assets/media/flags/samoa.svg">Samoa</option>
												<option value="SM" data-kt-select2-country="assets/media/flags/san-marino.svg">San Marino</option>
												<option value="ST" data-kt-select2-country="assets/media/flags/sao-tome-and-prince.svg">Sao Tome and Principe</option>
												<option value="SA" data-kt-select2-country="assets/media/flags/saudi-arabia.svg">Saudi Arabia</option>
												<option value="SN" data-kt-select2-country="assets/media/flags/senegal.svg">Senegal</option>
												<option value="RS" data-kt-select2-country="assets/media/flags/serbia.svg">Serbia</option>
												<option value="SC" data-kt-select2-country="assets/media/flags/seychelles.svg">Seychelles</option>
												<option value="SL" data-kt-select2-country="assets/media/flags/sierra-leone.svg">Sierra Leone</option>
												<option value="SG" data-kt-select2-country="assets/media/flags/singapore.svg">Singapore</option>
												<option value="SX" data-kt-select2-country="assets/media/flags/sint-maarten.svg">Sint Maarten (Dutch part)</option>
												<option value="SK" data-kt-select2-country="assets/media/flags/slovakia.svg">Slovakia</option>
												<option value="SI" data-kt-select2-country="assets/media/flags/slovenia.svg">Slovenia</option>
												<option value="SB" data-kt-select2-country="assets/media/flags/solomon-islands.svg">Solomon Islands</option>
												<option value="SO" data-kt-select2-country="assets/media/flags/somalia.svg">Somalia</option>
												<option value="ZA" data-kt-select2-country="assets/media/flags/south-africa.svg">South Africa</option>
												<option value="KR" data-kt-select2-country="assets/media/flags/south-korea.svg">South Korea</option>
												<option value="SS" data-kt-select2-country="assets/media/flags/south-sudan.svg">South Sudan</option>
												<option value="ES" data-kt-select2-country="assets/media/flags/spain.svg">Spain</option>
												<option value="LK" data-kt-select2-country="assets/media/flags/sri-lanka.svg">Sri Lanka</option>
												<option value="SD" data-kt-select2-country="assets/media/flags/sudan.svg">Sudan</option>
												<option value="SR" data-kt-select2-country="assets/media/flags/suriname.svg">Suriname</option>
												<option value="SZ" data-kt-select2-country="assets/media/flags/swaziland.svg">Swaziland</option>
												<option value="SE" data-kt-select2-country="assets/media/flags/sweden.svg">Sweden</option>
												<option value="CH" data-kt-select2-country="assets/media/flags/switzerland.svg">Switzerland</option>
												<option value="SY" data-kt-select2-country="assets/media/flags/syria.svg">Syrian Arab Republic</option>
												<option value="TW" data-kt-select2-country="assets/media/flags/taiwan.svg">Taiwan, Province of China</option>
												<option value="TJ" data-kt-select2-country="assets/media/flags/tajikistan.svg">Tajikistan</option>
												<option value="TZ" data-kt-select2-country="assets/media/flags/tanzania.svg">Tanzania, United Republic of</option>
												<option value="TH" data-kt-select2-country="assets/media/flags/thailand.svg">Thailand</option>
												<option value="TG" data-kt-select2-country="assets/media/flags/togo.svg">Togo</option>
												<option value="TK" data-kt-select2-country="assets/media/flags/tokelau.svg">Tokelau</option>
												<option value="TO" data-kt-select2-country="assets/media/flags/tonga.svg">Tonga</option>
												<option value="TT" data-kt-select2-country="assets/media/flags/trinidad-and-tobago.svg">Trinidad and Tobago</option>
												<option value="TN" data-kt-select2-country="assets/media/flags/tunisia.svg">Tunisia</option>
												<option value="TR" data-kt-select2-country="assets/media/flags/turkey.svg">Turkey</option>
												<option value="TM" data-kt-select2-country="assets/media/flags/turkmenistan.svg">Turkmenistan</option>
												<option value="TC" data-kt-select2-country="assets/media/flags/turks-and-caicos.svg">Turks and Caicos Islands</option>
												<option value="TV" data-kt-select2-country="assets/media/flags/tuvalu.svg">Tuvalu</option>
												<option value="UG" data-kt-select2-country="assets/media/flags/uganda.svg">Uganda</option>
												<option value="UA" data-kt-select2-country="assets/media/flags/ukraine.svg">Ukraine</option>
												<option value="AE" data-kt-select2-country="assets/media/flags/united-arab-emirates.svg">United Arab Emirates</option>
												<option value="GB" data-kt-select2-country="assets/media/flags/united-kingdom.svg">United Kingdom</option>
												<option value="US" data-kt-select2-country="assets/media/flags/united-states.svg">United States</option>
												<option value="UY" data-kt-select2-country="assets/media/flags/uruguay.svg">Uruguay</option>
												<option value="UZ" data-kt-select2-country="assets/media/flags/uzbekistan.svg">Uzbekistan</option>
												<option value="VU" data-kt-select2-country="assets/media/flags/vanuatu.svg">Vanuatu</option>
												<option value="VE" data-kt-select2-country="assets/media/flags/venezuela.svg">Venezuela, Bolivarian Republic of</option>
												<option value="VN" data-kt-select2-country="assets/media/flags/vietnam.svg">Vietnam</option>
												<option value="VI" data-kt-select2-country="assets/media/flags/virgin-islands.svg">Virgin Islands</option>
												<option value="YE" data-kt-select2-country="assets/media/flags/yemen.svg">Yemen</option>
												<option value="ZM" data-kt-select2-country="assets/media/flags/zambia.svg">Zambia</option>
												<option value="ZW" data-kt-select2-country="assets/media/flags/zimbabwe.svg">Zimbabwe</option>
											</select>
											<!--end::Select2-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Shipping address-->
								</div>
								<!--end::Billing address-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Order details-->
						<div class="d-flex justify-content-end">
							<!--begin::Button-->
							<a href="?action=catalog&query=products" id="kt_ecommerce_edit_order_cancel" class="btn btn-light me-5">Cancel</a>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
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