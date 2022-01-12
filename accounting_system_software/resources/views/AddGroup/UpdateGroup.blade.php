<input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
<input type="hidden" name="id" value="<?php echo $qr['id']?>" /> 
                  <div class="row">

                      <div class="col-md-12">
                           <label>Select Type</label>
                           <select class="form-control" name="debit_credit" id="debit_credit"  />
                               <option value="<?php echo $qr['debit_credit']?>"><?php echo $qr['debit_credit']?></option>
                               <option value="Debit">Debit</option>
                               <option value="Credit">Credit</option>
                           </select>
                      </div>
                    
                  </div>
                  <div class="row">

                      <div class="col-md-12">
                           <label>Group Type Name</label>
                           <input type="text" class="form-control" name="group_type_name" id="group_type_name" value="<?php echo $qr['group_type_name']?>" />
                      </div>
                    
                  </div>