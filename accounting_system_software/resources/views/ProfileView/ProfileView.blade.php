
    

<!-- content @e -->

<main class="page-content">
	<div class="modal-content">
	    <div class="forms-body">
	    	<div class="row">
	    		<div class="col-md-3"></div>
	    		<div class="col-md-6">
		    		<div class="card-inner">
					    <a href="pv_pdf" class="btn btn-danger mt-5">PDF</a>
					    <a href="pv_print" class="btn btn-success mt-5">Print</a>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label><b><i> <u>Profile Picture:-</u></i></b></label>
							 <img src="{{Session::get('sess_picture')}}">
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<label><b><i> <u>User Information:-</u></i></b></label>
									
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Full Name:</label>
									{{Session::get('sess_name')}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Email:</label>
									{{Session::get('sess_email')}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Phone:</label>
									{{Session::get('sess_phone')}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>Status:</label>
									{{Session::get('sess_status')}}
								</div>
							</div>
								</div>
								<div class="col-md-3"></div>
							</div>
				</div>
	    		<div class="col-md-3"></div>
	    	</div>
		</div>
	</div>
</main>
<!--end page main-->


