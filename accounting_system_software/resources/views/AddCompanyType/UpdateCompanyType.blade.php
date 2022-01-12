<input type="hidden" name="_token" id="u_token" value="{{ csrf_token()}}">
 <input type="hidden" name="id" value="<?php echo $qr['id']?>" /> 
 <div class="row">
  <div class="col-md-12">
       <label>Company Type</label>
       <input type="text" class="form-control" name="company_type" id="company_type" value="<?php echo $qr['company_type']?>" />
  </div>
</div>
