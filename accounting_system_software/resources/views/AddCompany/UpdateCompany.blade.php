<input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
<input type="hidden" name="company_id" value="<?php echo $qr['company_id']?>" >
<div class="row">
  <div class="col-md-6">
       <label>Company Type</label>
       <select class="form-control" name="company_type" id="company_type"  >
             <option value="<?php echo $qr['company_type']?>" ><?php echo $qr['company_type']?></option>
             <option value="">Please select your company type</option>
             @foreach($type as $Type)
             <option value="{{$Type->id}}">{{$Type->company_type}}</option>
             @endforeach
        </select>
  </div>
  <div class="col-md-6">
       <label>Business Type</label>
       <select class="form-control" name="business_type" id="business_type"  >
             <option value="<?php echo $qr['business_type']?>"><?php echo $qr['business_type']?></option>
             <option value="">Please select your business type</option>
             @foreach($business as $Bus)
             <option value="{{$Bus->id}}">{{$Bus->business_type}}</option>
             @endforeach
        </select>
  </div>

</div>
<div class="row">
  <div class="col-md-6">
       <label>Country Name</label>
       <select class="form-control" name="country" id="country"  >
             <option value="<?php echo $qr['country']?>"><?php echo $qr['country']?></option>
             <option value="">Please select your country name</option>
             @foreach($country as $Country)
             <option value="{{$Country->id}}">{{$Country->name}}</option>
             @endforeach
        </select>
  </div>
  <div class="col-md-6">
       <label>Company Name</label>
       <input type="text" class="form-control" name="company_name" id="company_name" value="<?php echo $qr['company_name']?>" >
  </div>

</div>
<div class="row">
  <div class="col-md-6">
       <label>Company Address</label>
       <input type="text" class="form-control" name="address" id="address" value="<?php echo $qr['address']?>" >
  </div>
  <div class="col-md-6">
         <label>Contact No</label>
         <input type="number" class="form-control" name="phone" id="phone" value="<?php echo $qr['phone']?>" >
  </div>
</div>
<div class="row">
  <div class="col-md-6">
       <label>Company Registration No</label>
       <input type="text" class="form-control" name="company_registration_no" id="company_registration_no" value="<?php echo $qr['company_registration_no']?>" >
  </div>
  <div class="col-md-6">
       <label>Tin</label>
       <input type="text" class="form-control" name="tin" id="tin" value="<?php echo $qr['tin']?>" >
  </div>
</div>
<div class="row">
  <div class="col-md-6">
       <label>Vat</label>
       <input type="text" class="form-control" name="vat" id="vat" value="<?php echo $qr['vat']?>" >
  </div>
  <div class="col-md-6">
       <label>Trade License</label>
       <input type="text" class="form-control" name="trade_license" id="trade_license" value="<?php echo $qr['trade_license']?>" >
  </div>
</div>
<div class="row">
  <div class="col-md-6">
       <label>Company Logo</label>
       <input type="file" class="form-control-file" name="picture" value="<?php echo $qr['picture']?>" >
  </div>
</div>