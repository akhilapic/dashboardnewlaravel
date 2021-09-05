 <x-header title="User"/>
@include("inc.sidebar")
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="d-flex align-items-center mb-4">
					<h4 class="fs-20 font-w600 mb-0 me-auto"> @if(isset($user->id))  Edit User @else  Add New User @endif</h4>
					<div style="display:none">
						<a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"> <i class="fas fa-envelope"></i></a>
						<a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"><i class="fas fa-phone-alt"></i></a>
						<a href="javascript:void(0);" class="btn btn-primary btn-sm"><i class="fas fa-info"></i></a>
					
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
								<div class="card-body">
								<div class="showmst1"></div>
								<div class="alert alert-primary alert-dismissible  showmst2">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                    <strong>Success!</strong> Message has been sent.
                                </div>
								

								<form  @if(empty($user->id)) id="second_form" @else id="edit_user_form" @endif  method="post" action="" enctype="multipart/form-data">
					
									<div class="row">
										<div class="col-xl-6  col-md-6 mb-4">
											<input type="hidden" name="id" value="@if(isset($user->id)){{ $user->id}} @endif"/>
										<label  class="form-label font-w600">Fist Name<span class="text-danger scale5 ms-2">*</span></label>
											<input type="text" class="form-control solid" value="@if(isset($user->first_name))  {{$user->first_name}}  @endif" placeholder="Fist Name" name="first_name" aria-label="name">
										</div>
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Last Name<span class="text-danger scale5 ms-2">*</span></label>
											<input type="text" class="form-control solid"  placeholder="Last Name" name="last_name" value="@if(isset($user->last_name))  {{$user->last_name}}  @endif" aria-label="name">
										</div>
										
									
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Email<span class="text-danger scale5 ms-2">*</span></label>
											<input type="email" class="form-control solid" placeholder="Email" name="email" value="@if(isset($user->email))  {{$user->email}}  @endif" aria-label="name">
										</div>
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Phone<span class="text-danger scale5 ms-2">*</span></label>
											<input type="text" class="form-control solid" placeholder="Phone" name="phone" value="@if(isset($user->phone))  {{$user->phone}}  @endif"" aria-label="phone">
										</div>
										@if(empty($user->id))
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Password<span class="text-danger scale5 ms-2">*</span></label>
											<input type="password" id="password" class="form-control solid" placeholder="Passowrd" name="password" aria-label="name">
										</div>
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Confirm Password<span class="text-danger scale5 ms-2">*</span></label>
											<input type="password" class="form-control solid" placeholder="confirm Password" name="confirm_password" aria-label="name">
										</div>
										@endif
										<div class="col-xl-12 mb-4">
											<label  class="form-label font-w600">Address:<span style="display:none" class="text-danger scale5 ms-2">*</span></label>
											<textarea class="form-control solid" name="address" aria-label="With textarea">@if(isset($user->address)) {{$user->address}} @endif</textarea>
										</div>
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Profile<span class="text-danger scale5 ms-2">*</span></label>
										
										
										<input accept="image/*" id="imgInp" type="file" class="form-control solid"  name="image" aria-label="name">
										</div>
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Profile<span class="text-danger scale5 ms-2">*</span></label><br>
										@if(isset($user->image))
										<input type="hidden" name ="old_iamge" value="{{$user->image}}"/>
										@endif

										
										<img @if(isset($user->image)) src="{{ url('/images/').'/'.$user->image }}" @endif  id="blah" src="#" alt="your image" height="100" width="100" />
										</div>
									</div>
									<div class="card-footer text-end">
									<div>
										<a href="javascript:void(0);" class="btn btn-primary me-3">Close</a>
										<!-- <button type="submit" id="newusersubmit" class="btn btn-secondary" >Submit</button> -->
										 <input type="submit" value="Submit" id="newusersubmit" class="btn btn-secondary" /> 									</div>
								</div>	
								
								</form>
							</div>
							
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		<script>
			
			imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file!='') {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
@include("inc.footer")