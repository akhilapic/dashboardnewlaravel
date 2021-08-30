@include("inc.header")
@include("inc.sidebar")

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="d-sm-flex d-block justify-content-between align-items-center mb-4">
					<div class="card-action coin-tabs mt-3 mt-sm-0">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" href="#AllStatus">All Status</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " data-bs-toggle="tab" href="#Pending">Pending</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " data-bs-toggle="tab" href="#On-Hold">On-Hold</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#Candidate">Candidate</a>
							</li>
						</ul>
					</div>
					<div class="d-flex mt-sm-0 mt-3">
						<select class="default-select dashboard-select">
						  <option data-display="newest">newest</option>
						  
						  <option value="2">oldest</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="tab-content">
							<div class="tab-pane fade show active" id="AllStatus">	
								<div class="table-responsive">
									<table class="table display mb-4 dataTablesCard order-table card-table text-black application" id="application-tbl1">
										<thead>
											<tr>
												<th>
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="checkAll4">
													  <label class="form-check-label" for="checkAll4">
													  </label>
													</div>  
												</th>
												<th>Order ID</th>
												<th>Date Applied</th>
												<th>Company</th>
												<th>Type</th>
												<th>Position</th>
												<th>Contact</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox">
													  <label class="form-check-label" for="customCheckBox">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#2769ee"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
														Bubbles Studios	
													</span>
												</td>
												<td>FULLTIME</td>
												<td>UI Designer</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
											
												<td><span class="btn btn-outline light  border-light btn-sm">Pending</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox1">
													  <label class="form-check-label" for="customCheckBox1">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#ac30c4"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>

														Kelon Team
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
											
												<td><span class="btn bgl-secondary light  text-secoundry btn-sm btn-rounded">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox14">
													  <label class="form-check-label" for="customCheckBox14">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#3a1a87"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
														Kripton Inc.
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
											
												<td><span class="btn bgl-white   text-danger border-danger btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox12">
													  <label class="form-check-label" for="customCheckBox12">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#48c290"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
														Bubbles Studios
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
											
												<td><span class="btn bgl-white   text-danger border-danger btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox2">
													  <label class="form-check-label" for="customCheckBox2">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#e9b934"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>

														Bubbles Studios
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
											
												<td><span class="btn bgl-secondary light   btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox3">
													  <label class="form-check-label" for="customCheckBox3">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#3dabab"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
														Kripton Inc.
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
												<td><span class="btn bgl-white   text-danger border-danger btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox4">
													  <label class="form-check-label" for="customCheckBox4">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#4cc82f"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>

														Kripton Inc.
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
												<td><span class="btn bgl-secondary light   btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox5">
													  <label class="form-check-label" for="customCheckBox5">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#ff39a9"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
														Kelon Team
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
												<td><span class="btn bgl-white   text-danger border-danger btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox6">
													  <label class="form-check-label" for="customCheckBox6">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#dc134a"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
														Kripton Inc.
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
												<td><span class="btn bgl-secondary light   btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>	
									</table>	
								</div>
							</div>
							<div class="tab-pane fade" id="Pending">
								<div class="table-responsive">
									<table class="table display mb-4 dataTablesCard order-table card-table text-black application" id="application-tbl2">
										<thead>
											<tr>
												<th>
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="checkAll1">
													  <label class="form-check-label" for="checkAll1">
													  </label>
													</div>  
												</th>
												<th>Order ID</th>
												<th>Date Applied</th>
												<th>Company</th>
												<th>Type</th>
												<th>Position</th>
												<th>Contact</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
											<tbody>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox7">
													  <label class="form-check-label" for="customCheckBox7">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#dc134a"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
														Kripton Inc.
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
												<td><span class="btn bgl-secondary light   btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox8">
													  <label class="form-check-label" for="customCheckBox8">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#dc134a"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
														Kripton Inc.
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
												<td><span class="btn bgl-secondary light   btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
										
								</div>	
							</div>
							<div class="tab-pane" id="On-Hold">
								<div class="table-responsive">
									<table class="table display mb-4 dataTablesCard order-table card-table text-black application" id="application-tbl3">
										<thead>
											<tr>
												<th>
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="checkAll2">
													  <label class="form-check-label" for="checkAll2">
													  </label>
													</div>  
												</th>
												<th>Order ID</th>
												<th>Date Applied</th>
												<th>Company</th>
												<th>Type</th>
												<th>Position</th>
												<th>Contact</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
											<tbody>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox9">
													  <label class="form-check-label" for="customCheckBox9">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#dc134a"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
														Kripton Inc.
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
												<td><span class="btn bgl-secondary light   btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox10">
													  <label class="form-check-label" for="customCheckBox10">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#dc134a"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
														Kripton Inc.
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
												<td><span class="btn bgl-secondary light   btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>	
							</div>
							<div class="tab-pane" id="Candidate">
								<div class="table-responsive">
									<table class="table display mb-4 dataTablesCard order-table card-table text-black application" id="application-tbl4">
										<thead>
											<tr>
												<th>
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="checkAll5">
													  <label class="form-check-label" for="checkAll5">
													  </label>
													</div>  
												</th>
												<th>Order ID</th>
												<th>Date Applied</th>
												<th>Company</th>
												<th>Type</th>
												<th>Position</th>
												<th>Contact</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
											<tbody>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox11">
													  <label class="form-check-label" for="customCheckBox11">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#dc134a"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
														Kripton Inc.
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
												<td><span class="btn bgl-secondary light   btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="tbl-bx">
													<div class="form-check ms-2">
													  <input class="form-check-input" type="checkbox" value="" id="customCheckBox13">
													  <label class="form-check-label" for="customCheckBox13">
													  </label>
													</div>
												</td>
												<td>#000123456</td>
												<td class="wspace-no">Nov 21th 2020 09:21 AM</td>
												<td class="wspace-no">
													<span class="fs-16">
														<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
														  <g  transform="translate(0.243)">
															<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
															<g  transform="translate(-0.243)">
															  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#dc134a"/>
															  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
															  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
															</g>
														  </g>
														</svg>
														Kripton Inc.
													</span>
												</td>
												<td>PART TIME</td>
												<td>UI Reseracher</td>
												<td class="wspace-no">
													<span class="text-secoundry fs-14 font-w600">
														<i class="fas fa-phone-alt me-2"></i>
															012 3123412 441
													</span>
												</td>
												<td><span class="btn bgl-secondary light   btn-rounded btn-sm">ON HOLD</span></td>
												<td>
													<div class="dropdown text-end">
														<div class="btn-link" data-bs-toggle="dropdown" >
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
															<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>	
				</div>
				
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        @include("inc.footer")