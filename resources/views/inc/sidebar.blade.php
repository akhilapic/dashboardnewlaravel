    <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<div class="dropdown header-profile2 ">
					<a class="nav-link " href="javascript:void(0);"  role="button" data-bs-toggle="dropdown">
						<div class="header-info2 d-flex align-items-center">
							<img src="{{asset('admin/images/profile/pic1.jpg')}}" alt=""/>
							<div class="d-flex align-items-center sidebar-info">
								<div>
									<span class="font-w400 d-block">Franklin Jr</span>
									<small class="text-end font-w400">Superadmin</small>
								</div>	
								<i class="fas fa-chevron-down"></i>
							</div>
							
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a href="{{route('app-profile')}}" class="dropdown-item ai-icon ">
							<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
							<span class="ms-2">Profile </span>
						</a>
						<a href="{{route('email-inbox')}}" class="dropdown-item ai-icon">
							<svg  xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
							<span class="ms-2">Inbox </span>
						</a>
						<a href="{{route('login')}}" class="dropdown-item ai-icon">
							<svg  xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
							<span class="ms-2">Logout </span>
						</a>
					</div>
				</div>
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="index.html">Dashboard Light</a></li>
							<li><a href="index-2.html">Dashboard Dark</a></li>
							<li><a href="{{route('jobs-page')}}">Jobs</a></li>
							<li><a href="application-page.html">Application</a></li>
							<li><a href="my-profile.html">Profile</a></li>
							<li><a href="statistics-page.html">Statistics</a></li>
							<li><a href="compaines.html">Companies</a></li>	
						</ul>

                    </li>
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-093-waving"></i>
							<span class="nav-text">Jobs</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('job-list')}}">Job Lists</a></li>
                            <li><a href="{{route('job-view')}}">Job View</a></li>
                            <li><a href="{{route('job-application')}}">Job Application</a></li>
                            <li><a href="{{route('apply-job')}}">Apply Job</a></li>
                            <li><a href="{{route('new-job')}}">New Job</a></li>
                            <li><a href="{{route('user-profile')}}">User Profile</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('app-profile')}}">Profile</a></li>
							<li><a href="{{route('post-details')}}">Post Details</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{route('email-compose')}}">Compose</a></li>
                                    <li><a href="{{route('email-inbox')}}">Inbox</a></li>
                                    <li><a href="{{route('email-read')}}">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('app-calender')}}">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{route('ecom-product-grid')}}">Product Grid</a></li>
									<li><a href="{{route('ecom-product-list')}}">Product List</a></li>
									<li><a href="{{route('ecom-product-detail')}}">Product Details</a></li>
									<li><a href="{{route('ecom-product-order')}}">Order</a></li>
									<li><a href="{{route('ecom-checkout')}}">Checkout</a></li>
									<li><a href="{{route('ecom-invoice')}}">Invoice</a></li>
									<li><a href="{{route('ecom-customers')}}">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-041-graph"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('chart-flot')}}">Flot</a></li>
                            <li><a href="{{route('chart-morris')}}">Morris</a></li>
                            <li><a href="{{route('chart-chartjs')}}">Chartjs</a></li>
                            <li><a href="{{route('chart-chartist')}}">Chartist</a></li>
                            <li><a href="{{route('chart-sparkline')}}">Sparkline</a></li>
                            <li><a href="{{route('chart-peity')}}">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-086-star"></i>
							<span class="nav-text">Bootstrap</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('ui-accordion')}}">Accordion</a></li>
                            <li><a href="{{route('ui-alert')}}">Alert</a></li>
                            <li><a href="{{route('ui-badge')}}">Badge</a></li>
                            <li><a href="{{route('ui-button')}}">Button</a></li>
                            <li><a href="{{route('ui-modal')}}">Modal</a></li>
                            <li><a href="{{route('ui-button-group')}}">Button Group</a></li>
                            <li><a href="{{route('ui-list-group')}}">List Group</a></li>
                            <li><a href="{{route('ui-card')}}">Cards</a></li>
                            <li><a href="{{route('ui-carousel')}}">Carousel</a></li>
                            <li><a href="{{route('ui-dropdown')}}">Dropdown</a></li>
                            <li><a href="{{route('ui-popover')}}">Popover</a></li>
                            <li><a href="{{route('ui-progressbar')}}">Progressbar</a></li>
                            <li><a href=".{{route('ui-tab')}}">Tab</a></li>
                            <li><a href="{{route('ui-typography')}}">Typography</a></li>
                            <li><a href="{{route('ui-pagination')}}">Pagination</a></li>
                            <li><a href="{{route('ui-grid')}}">Grid</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-045-heart"></i>
							<span class="nav-text">Plugins</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('uc-select2')}}">Select 2</a></li>
                            <li><a href="{{route('uc-nestable')}}">Nestedable</a></li>
                            <li><a href="{{route('uc-noui-slider')}}">Noui Slider</a></li>
                            <li><a href="{{'uc-sweetalert'}}">Sweet Alert</a></li>
                            <li><a href="{{route('uc-toastr')}}">Toastr</a></li>
                            <li><a href="{{route('map-jqvmap')}}">Jqv Map</a></li>
							<li><a href="{{route('uc-lightgallery')}}">Light Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('widget-basic')}}" class="" aria-expanded="false">
							<i class="flaticon-013-checkmark"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-072-printer"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('form-element')}}">Form Elements</a></li>
                            <li><a href="{{asset('form-wizard')}}">Wizard</a></li>
                            <li><a href="{{route('form-ckeditor')}}">CkEditor</a></li>
                            <li><a href="{{route('form-pickers')}}">Pickers</a></li>
                            <li><a href="{{route('form-validation')}}">Form Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-043-menu"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('table-bootstrap-basic')}}">Bootstrap</a></li>
                            <li><a href="{{route('table-datatable-basic')}}">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-022-copy"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="./empty-page.html">Empty Page</a></li>
                        </ul>
                    </li>
                </ul>
				<div class="plus-box">
					<p class="fs-14 font-w600 mb-2">Let Jobick Managed<br>Your Resume Easily<br></p>
					<p>Lorem ipsum dolor sit amet</p>
				</div>
				<div class="copyright">
					<p><strong>Jobick Job Admin</strong> © 2021 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
	