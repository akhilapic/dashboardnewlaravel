<x-header title="View User Details"/>
@include("inc.sidebar");
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="d-flex align-items-center mb-4 flex-wrap">
					<h4 class="fs-20 font-w600  me-auto">View User Details</h4>
				</div>
				<div class="row">
					<div class=" col-md-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="fs-20 mb-0">Overview</h4>
									</div>
									<div class="card-body pt-4">
										<div class="mb-3 d-flex">
											<h5 class="mb-1 fs-14 custom-label">Name:</h5>
											<span>{{$user->first_name}} {{$user->last_name}}</span>	
										</div>
										<div class="mb-3 d-flex">
											<h5 class="mb-1 fs-14 custom-label">Email:</h5>
											<span>{{$user->email}}</span>	
										</div>
										<div class="mb-3 d-flex">
											<h5 class="mb-1 fs-14 custom-label">Phone:</h5>
											<span>{{$user->phone}}</span>	
										</div>
                                        <div class="mb-3 d-flex">
											<h5 class="mb-1 fs-14 custom-label">Address:</h5>
											<span>{{$user->address}}</span>	
										</div>

                                        <div class="mb-3 d-flex">
											<h5 class="mb-1 fs-14 custom-label">Image:</h5>
											<img src="{{ url('/images/').'/'.$user->image }}" height="100" width="150" alt="" title="">
										</div>
									
									</div>
									<div class="card-footer border-0 pt-0 " style="display:none">
										<div class="d-flex justify-content-between flex-wrap">
											<a href="javascript:void(0);" class="btn btn-primary btn-sm mb-3"><i class="fas fa-check me-2 "></i>Apply Now</a>
											<a href="javascript:void(0);" class="btn btn-outline-primary btn-sm mb-3"><i class="fas fa-phone-volume me-2"></i>Contact Now</a>
										</div>
									</div>
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
@include("inc.footer");