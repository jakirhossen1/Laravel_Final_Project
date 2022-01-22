

<table border="1" cellspacing="0" cellpadding="0" class="datatable-init nowrap table" width="100%" style="text-align: center;" >
	<thead>
		<tr>
			<th>Profile Picture:-</th>
			<th>User Information:-</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td rowspan="4"><img style="height:200px; width: 200px;" src="{{Session::get('sess_picture')}}"></td>
			<td>
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
			</td>
		</tr>
	</tbody>
	
</table>


<!-- <div class="row">
						<div class="col-md-3">
							<label>Profile Picture:</label>
							 <img src="{{Session::get('sess_picture')}}">
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<label>User Name:</label>
									{{Session::get('sess_names')}}
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
</div> -->