<input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
<input type="hidden" name="ledger_posting_head_id" value="<?php echo $qr['ledger_posting_head_id']?>" > 
                  <div class="row">
                      <div class="col-md-12">
                           <label>Ledger Group</label>
                           <select class="form-control" name="ledger_group_id" id="ledger_group_id"   >
                              <option value="<?php echo $qr['ledger_group_id']?>" > <?php echo $qr['ledger_group_id']?> </option>
                              <option value="select">Please select your ledger group name</option>
                              @foreach($lgt as $LGT)
                              <option value="{{$LGT->ledger_id}}">{{$LGT->ledger_name}}</option>
                              @endforeach
                           </select>
                      </div>
                    
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                           <label>Ledger Sub Group</label>
                           <select class="form-control" name="ledger_sub_group_id" id="ledger_sub_group_id" >
                              <option value="<?php echo $qr['ledger_sub_group_id']?>"><?php echo $qr['ledger_sub_group_id']?></option>
                              <option value="select">Please select your ledger sub group name</option>
                              @foreach($lsg as $LSG)
                              <option value="{{$LSG->id}}">{{$LSG->ledger_sub_group_name}}</option>
                              @endforeach
                           </select>
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