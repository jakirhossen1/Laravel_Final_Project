<input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
<input type="hidden" name="sl_no" value="<?php echo $qr['sl_no']?>" >
<div class="row">
    <div class="col-md-6">
        <label>Company Name</label>
        <input type="text" class="form-control" name="company_id" id="company_id" value="<?php echo $qr['company_id']?>" >
    </div>
    <div class="col-md-6">
        <label>Ledger Group Type</label>
        <input type="text" class="form-control" name="group_id" id="group_id" value="<?php echo $qr['group_id']?>" >
    </div>
    
</div>
<div class="row">
    <div class="col-md-6">
       <label>Sub Group Name</label>
       <input type="text" class="form-control" name="sub_group_id" id="sub_group_id" value="<?php echo $qr['sl_no']?>" >
    </div>
    <div class="col-md-6">
       <label>Posting Head Name</label>
       <input type="text" class="form-control" name="postling_head_id" id="postling_head_id" value="<?php echo $qr['postling_head_id']?>" >
    </div>
    
</div>
<div class="row">
    <div class="col-md-6">
        <label>Voucher Type</label>
        <select class="form-control" name="voucher_type" id="voucher_type"  >
       		<option value="<?php echo $qr['voucher_type']?>"><?php echo $qr['voucher_type']?></option>
	        <option value="selected">Please select your voucher type</option>
	        <option value="Bank Payment">Bank Payment</option>
	        <option value="Bank Sales">Bank Sales</option>
	        <option value="Cash Payment">Cash Payment</option>
	        <option value="Cash Sales">Cash Sales</option>
       </select>
    </div>
    <div class="col-md-6">
       <label>Voucher No</label>
       <input type="text" class="form-control" name="voucher_no" id="voucher_no" value="<?php echo $qr['voucher_no']?>" >
    </div>
</div>
<div class="row">
    <div class="col-md-6">
       <label>Debit Amount</label>
       <input type="number" class="form-control" name="debit_amount" id="debit_amount" value="<?php echo $qr['debit_amount']?>" >
    </div>
    <div class="col-md-6">
       <label>Credit Amount</label>
       <input type="number" class="form-control" name="credit_amount" id="credit_amount" value="<?php echo $qr['credit_amount']?>" >
    </div>
</div>
<div class="row">
    <div class="col-md-6">
       <label>User Name</label>
       <input type="text" class="form-control" name="user_id" id="user_id" value="<?php echo $qr['user_id']?>" >
    </div>
    <div class="col-md-6">
       <label>Checkno</label>
       <input type="text" class="form-control" name="check_no" id="check_no" value="<?php echo $qr['check_no']?>" >
    </div>
</div>
<div class="row">
	<div class="col-md-6">
	    <label>Check Date</label>
	    <input type="date" class="form-control" name="check_date" id="check_date" value="<?php echo $qr['check_date']?>" >
	</div>
	<div class="col-md-6">
       	<label>Voucher Status</label>
       	<select class="form-control" name="voucher_status" id="voucher_status" >
	       	<option value="<?php echo $qr['voucher_status']?>"><?php echo $qr['voucher_status']?></option>
	        <option value="selected">Please select your voucher status</option>
	        <option value="Paid">Paid</option>
	        <option value="Unpaid">Unpaid</option>
	        <option value="Processing"></option>
	        <option value="Hold">Hold</option>
      	</select>
  </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label>Prepare By</label>
        <input type="text" class="form-control" name="prepared_by" id="prepared_by" value="<?php echo $qr['prepared_by']?>" >
    </div>
</div>