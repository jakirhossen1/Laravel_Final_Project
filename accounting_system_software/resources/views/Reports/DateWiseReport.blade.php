


<!-- content @s -->
<div class="nk-content ">
	<div class="container-fluid">
		<div class="nk-content-inner">
			<div class="nk-content-body">
				<div class="components-preview wide-md mx-auto">
					<div class="nk-block nk-block-lg">
						<div class="card card-preview">  
							<div class="card-inner">
   
							    <a href="country_pdf" class="btn btn-danger">PDF</a>
							    <a href="country_print" class="btn btn-success">Print</a>
							    <p></p>

								<form action="dr_report" method="post">
									@csrf
									<div class="row">
										<div class="col-md-12\">
											<label>Start Date:</label>
											<input type="date" name="start" id="start">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12\">
											<label>End Date:</label>
											<input type="date" name="end" id="end">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="submit"  class="btn btn-primary bx-pull-right ">Search</button>
										</div>
									</div>
								</form>
							</div>
						</div><!-- .card-preview -->
					</div> <!-- nk-block -->
				</div><!-- .components-preview -->
			</div>
		</div>
	</div>
</div>




