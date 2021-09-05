<x-header title="User Details"/>
@include("inc.sidebar");
<!--*********************Content body start***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="d-flex align-items-center mb-4 flex-wrap">
					<h4 class="fs-20 font-w600  me-auto">Users List</h4>
					<div>
					<a href="{{url('admin/newuser')}}" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Add New User</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="table-responsive">
							<table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
								<thead>
									<tr>
										<th>No</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>phone No.</th>
										<th>Profile</th>
										<th>Status</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
								@if($userdata)
							 	
								@foreach($userdata as $key=> $value)
								
								<tr id="row_{{$value->id}}">
										<td>{{$key+1}}</td>
										<td>{{$value->first_name}}</td>
										<td>{{$value->last_name}}</td>
										<td>{{$value->email}}</td>
										<td>{{$value->phone}}</td>
										<td><img src="{{ url('/images/').'/'.$value->image }}" height="100" width="150" alt="" title=""></td>
										<td><span class="badge @if($value->status=='0') badge-success @else badge-danger @endif badge-lg light"><a href="javascript:void(0)" class="userstatus" data-id = "{{$value->id}}" data-status = "@if($value->status=='0'){{1}}@else{{0}}@endif"> @if($value->status=='0') Active @else Deactive  @endif</a></span></td>
										<td>
											<div class="action-buttons d-flex justify-content-end">
												<a href="{{url('action/view-user/'.$value->id)}}" class="btn btn-success light mr-2">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>
												</a>
												<a href="{{url('action/edit-user/'.$value->id)}}" class="btn btn-secondary light mr-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
															<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
														</g>
													</svg>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger light deleted" data-token="{{ csrf_token() }}" data-id="{{$value->id}}" data-image="{{$value->image}}">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
															<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
														</g>
													</svg>
												</a>
											</div>
										</td>
									</tr>
								@endforeach
								@endif	
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>
        </div>
		
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Job</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					  </div>
					  <div class="modal-body">
						<div class="mb-4">
							<label  class="form-label">Position</label>
							<input type="text"  class="form-control" placeholder="Name" aria-label="name">
						</div>
						<div class="mb-4">
							<label class="form-label">Job Type</label>
							<select id="inputState" class="form-select form-control">
							  <option selected>Choose...</option>
							  <option>Part-Time</option>
							   <option>Full-Time</option>
								<option>Freelancer</option>
							</select>
						</div>
						<div class="mb-4">
							<label class="form-label">Description:</label>
							<textarea class="form-control" aria-label="With textarea"></textarea>
						</div>
						<div class="mb-4">
							<label  class="form-label">Posted Date</label>
							<div class="input-group">
								 <div class="input-group-text"><i class="far fa-clock"></i></div>
								<input size="16" type="text" value="2012-06-15" readonly class="form-control form_datetime">
							</div>
						</div>	
						<div class="mb-4">
							<label  class="form-label">Last Date To Apply</label>
							<div class="input-group">
								 <div class="input-group-text"><i class="far fa-clock"></i></div>
								<input size="16" type="text" value="2012-06-15" readonly class="form-control form_datetime">
							</div>
						</div>
						<div class="mb-4">
							<label  class="form-label">Close Date</label>
							<div class="input-group">
								 <div class="input-group-text"><i class="far fa-clock"></i></div>
								<input size="16" type="text" value="2012-06-15" readonly class="form-control form_datetime">
							</div>
						</div>	
						<div class="mb-4">
							<span>Status:<label class="radio-inline mx-3"><input type="radio" name="optradio"> Active</label></span>
							<span><label class="radio-inline me-3"><input type="radio" name="optradio"> In Active</label></span>
						</div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					  </div>
					</div>
				</div>
			</div>
		</div>
        <!--**********************************
            Content body end
        ***********************************-->
		
		
        <!--******************Content body end*********************-->
@include("inc.footer");