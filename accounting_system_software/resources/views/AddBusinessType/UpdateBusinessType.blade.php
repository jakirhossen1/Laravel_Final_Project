<input type="hidden" name="_token" id="u_token" value="{{ csrf_token()}}">
 <input type="hidden" name="id" value="<?php echo $qr['id']?>" /> 
 <div class="row">
  <div class="col-md-12">
       <label>Business Type</label>
       <input type="text" class="form-control" name="business_type" id="business_type" value="<?php echo $qr['business_type']?>" />
  </div>
</div>
