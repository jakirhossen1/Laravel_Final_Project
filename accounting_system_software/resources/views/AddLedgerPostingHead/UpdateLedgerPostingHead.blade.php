<input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
<input type="hidden" name="ledger_posting_head_id" value="<?php echo $qr['ledger_posting_head_id']?>" > 
                  <div class="row">
                      <div class="col-md-12">
                           <label>Ledger Group</label>
                           <input type="text" class="form-control" name="ledger_group_id" id="ledger_group_id" value="<?php echo $qr['ledger_group_id']?>"  >
                      </div>
                    
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                           <label>Ledger Sub Group</label>
                           <input type="text" class="form-control" name="ledger_sub_group_id" id="ledger_sub_group_id" value="<?php echo $qr['ledger_sub_group_id']?>" >
                      </div>
                    
                  </div>
                   <div class="row">
                      <div class="col-md-12">
                           <label>Posting Head Name</label>
                           <input type="text" class="form-control" name="posting_head_name" id="posting_head_name" value="<?php echo $qr['posting_head_name']?>"  >
                      </div>
                    
                  </div>
                   <div class="row">
                      <div class="col-md-12">
                           <label>Posting Date</label>
                           <input type="text" class="form-control" name="posting_head_date" id="posting_head_date" value="<?php echo $qr['posting_head_date']?>"  >
                      </div>
                    
                  </div>