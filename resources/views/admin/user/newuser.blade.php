<x-header title="User"/>
@include("inc.sidebar")
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="d-flex align-items-center mb-4">
					<h4 class="fs-20 font-w600 mb-0 me-auto">New User</h4>
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
								<form id="userform"  method="post" action="" enctype="multipart/form-data">
					
									<div class="row">
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Fist Name<span class="text-danger scale5 ms-2">*</span></label>
											<input type="text" class="form-control solid" placeholder="Fist Name" name="first_name" aria-label="name">
										</div>
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Last Name<span class="text-danger scale5 ms-2">*</span></label>
											<input type="text" class="form-control solid" placeholder="Last Name" name="last_name" aria-label="name">
										</div>
										
									
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Email<span class="text-danger scale5 ms-2">*</span></label>
											<input type="email" class="form-control solid" placeholder="Email" name="email" aria-label="name">
										</div>
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Phone<span class="text-danger scale5 ms-2">*</span></label>
											<input type="text" class="form-control solid" placeholder="Phone" name="phone" aria-label="phone">
										</div>
										
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Password<span class="text-danger scale5 ms-2">*</span></label>
											<input type="password" class="form-control solid" placeholder="Passowrd" name="password" aria-label="name">
										</div>
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Confirm Password<span class="text-danger scale5 ms-2">*</span></label>
											<input type="password" class="form-control solid" placeholder="confirm Password" name="confirm_password" aria-label="name">
										</div>
										
										<div class="col-xl-12 mb-4">
											<label  class="form-label font-w600">Address:<span class="text-danger scale5 ms-2">*</span></label>
											<textarea class="form-control solid" name="address" aria-label="With textarea"></textarea>
										</div>
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Profile<span class="text-danger scale5 ms-2">*</span></label>
											<input accept="image/*" id="imgInp" type="file" class="form-control solid"  name="image" aria-label="name">
										</div>
										<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Profile<span class="text-danger scale5 ms-2">*</span></label><br>
										<img id="blah" src="#" alt="your image" height="100" width="100" />
										</div>
									</div>
									<div class="card-footer text-end">
									<div>
										<a href="javascript:void(0);" class="btn btn-primary me-3">Close</a>
										<input type="submit" value="Submit" id="newusersubmit" class="btn btn-secondary" />
									</div>
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