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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Invoice 3</h1>
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
						<li class="breadcrumb-item text-muted">Invoice Manager</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">View Invoices</li>
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
				<!-- begin::Invoice 3-->
				<div class="card">
					<!-- begin::Body-->
					<div class="card-body py-20">
						<!-- begin::Wrapper-->
						<div class="mw-lg-950px mx-auto w-100">
							<!-- begin::Header-->
							<div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
								<h4 class="fw-bolder text-gray-800 fs-2qx pe-5 pb-7">INVOICE</h4>
								<!--end::Logo-->
								<div class="text-sm-end">
									<!--begin::Logo-->
									<a href="#" class="d-block mw-150px ms-sm-auto">
										<img alt="Logo" src="assets/media/svg/brand-logos/lloyds-of-london-logo.svg" class="w-100" />
									</a>
									<!--end::Logo-->
									<!--begin::Text-->
									<div class="text-sm-end fw-semibold fs-4 text-muted mt-7">
										<div>Cecilia Chapman, 711-2880 Nulla St, Mankato</div>
										<div>Mississippi 96522</div>
									</div>
									<!--end::Text-->
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="pb-12">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column gap-7 gap-md-10">
									<!--begin::Message-->
									<div class="fw-bold fs-2">Dear Melody Macy
									<span class="fs-6">(melody@altbox.com)</span>,
									<br />
									<span class="text-muted fs-5">Here are your order details. We thank you for your purchase.</span></div>
									<!--begin::Message-->
									<!--begin::Separator-->
									<div class="separator"></div>
									<!--begin::Separator-->
									<!--begin::Order details-->
									<div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
										<div class="flex-root d-flex flex-column">
											<span class="text-muted">Order ID</span>
											<span class="fs-5">#14534</span>
										</div>
										<div class="flex-root d-flex flex-column">
											<span class="text-muted">Date</span>
											<span class="fs-5">22 March, 2023</span>
										</div>
										<div class="flex-root d-flex flex-column">
											<span class="text-muted">Invoice ID</span>
											<span class="fs-5">#INV-000414</span>
										</div>
										<div class="flex-root d-flex flex-column">
											<span class="text-muted">Shipment ID</span>
											<span class="fs-5">#SHP-0025410</span>
										</div>
									</div>
									<!--end::Order details-->
									<!--begin::Billing & shipping-->
									<div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
										<div class="flex-root d-flex flex-column">
											<span class="text-muted">Billing Address</span>
											<span class="fs-6">Unit 1/23 Hastings Road,
											<br />Melbourne 3000,
											<br />Victoria,
											<br />Australia.</span>
										</div>
										<div class="flex-root d-flex flex-column">
											<span class="text-muted">Shipping Address</span>
											<span class="fs-6">Unit 1/23 Hastings Road,
											<br />Melbourne 3000,
											<br />Victoria,
											<br />Australia.</span>
										</div>
									</div>
									<!--end::Billing & shipping-->
									<!--begin:Order summary-->
									<div class="d-flex justify-content-between flex-column">
										<!--begin::Table-->
										<div class="table-responsive border-bottom mb-9">
											<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
												<thead>
													<tr class="border-bottom fs-6 fw-bold text-muted">
														<th class="min-w-175px pb-2">Products</th>
														<th class="min-w-70px text-end pb-2">SKU</th>
														<th class="min-w-80px text-end pb-2">QTY</th>
														<th class="min-w-100px text-end pb-2">Total</th>
													</tr>
												</thead>
												<tbody class="fw-semibold text-gray-600">
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
																</a>
																<!--end::Thumbnail-->
																<!--begin::Title-->
																<div class="ms-5">
																	<div class="fw-bold">Product 1</div>
																	<div class="fs-7 text-muted">Delivery Date: 22/03/2023</div>
																</div>
																<!--end::Title-->
															</div>
														</td>
														<td class="text-end">04242009</td>
														<td class="text-end">2</td>
														<td class="text-end">$240.00</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="?action=catalog&query=edit-product" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/100.gif);"></span>
																</a>
																<!--end::Thumbnail-->
																<!--begin::Title-->
																<div class="ms-5">
																	<div class="fw-bold">Footwear</div>
																	<div class="fs-7 text-muted">Delivery Date: 22/03/2023</div>
																</div>
																<!--end::Title-->
															</div>
														</td>
														<td class="text-end">02565007</td>
														<td class="text-end">1</td>
														<td class="text-end">$24.00</td>
													</tr>
													<tr>
														<td colspan="3" class="text-end">Subtotal</td>
														<td class="text-end">$264.00</td>
													</tr>
													<tr>
														<td colspan="3" class="text-end">VAT (0%)</td>
														<td class="text-end">$0.00</td>
													</tr>
													<tr>
														<td colspan="3" class="text-end">Shipping Rate</td>
														<td class="text-end">$5.00</td>
													</tr>
													<tr>
														<td colspan="3" class="fs-3 text-dark fw-bold text-end">Grand Total</td>
														<td class="text-dark fs-3 fw-bolder text-end">$269.00</td>
													</tr>
												</tbody>
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end:Order summary-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Body-->
							<!-- begin::Footer-->
							<div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
								<!-- begin::Actions-->
								<div class="my-1 me-5">
									<!-- begin::Pint-->
									<button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print Invoice</button>
									<!-- end::Pint-->
									<!-- begin::Download-->
									<button type="button" class="btn btn-light-success my-1">Download</button>
									<!-- end::Download-->
								</div>
								<!-- end::Actions-->
								<!-- begin::Action-->
								<a href="?action=invoices&query=create" class="btn btn-primary my-1">Create Invoice</a>
								<!-- end::Action-->
							</div>
							<!-- end::Footer-->
						</div>
						<!-- end::Wrapper-->
					</div>
					<!-- end::Body-->
				</div>
				<!-- end::Invoice 1-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	
</div>
<!--end:::Main-->