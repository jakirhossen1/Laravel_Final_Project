<input type="hidden" name="_token" id="u_token" value="{{ csrf_token()}}">
 <input type="hidden" name="id" value="<?php echo $qr['id']?>" /> 
 <div class="row">
  <div class="col-md-12">
       <label>City Name</label>
       <input type="text" class="form-control" name="city_name" id="city_name" value="<?php echo $qr['city_name']?>" />
       
  </div>
</div>
<div class="row">
  <div class="col-md-12">
       <label>Country Name</label>
       <select  class="form-control" name="country_name" id="country_name" value="<?php echo $qr['country_name']?>  >
       <option value="select">Select your country</option>
       <option value="Bangladesh">Bangladesh</option>
       <option value="India">India</option>
       </select>
       
  </div>
</div>