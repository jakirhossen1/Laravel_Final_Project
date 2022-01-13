<input type="hidden" name="_token" id="u_token" value="{{ csrf_token()}}">
<input type="hidden" name="id" value="<?php echo $qr['id']?>" /> 
<div class="row">
	<div class="col-md-12">
	    <label>Ledger Parent Type</label>
	    <input type="text" class="form-control" name="ledger_sub_group_parent_id" id="ledger_sub_group_parent_id" value="<?php echo $qr['ledger_sub_group_parent_id']?>" />
	</div>
</div>
<div class="row">

    <div class="col-md-12">
        <label>Ledger Sub Group Name</label>
        <input type="text" class="form-control" name="ledger_sub_group_name" id="ledger_sub_group_name" value="<?php echo $qr['ledger_sub_group_name']?>"  />
    </div>
    
</div>