<input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
<input type="hidden" name="ledger_id" value="<?php echo $qr['ledger_id']?>" /> 
                    <div class="row">

                        <div class="col-md-12">
                               <label>Group Type</label>
                               <input type="text" class="form-control" name="group_id" id="group_id" value="<?php echo $qr['group_id ']?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                               <label>Ledger Name</label>
                               <input type="text" class="form-control" name="ledger_name" id="ledger_name" value="<?php echo $qr['ledger_name ']?>" />
                         </div>
                     </div>