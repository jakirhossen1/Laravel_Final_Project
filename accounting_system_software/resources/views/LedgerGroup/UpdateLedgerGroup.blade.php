<input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
<input type="hidden" name="ledger_id" value="<?php echo $qr['ledger_id']?>" /> 
                    <div class="row">

                        <div class="col-md-12">
                               <label>Group Type</label>
                               <select class="form-control" name="group_id" id="group_id"  >
                                    <option value="<?php echo $qr['group_id']?>"><?php echo $qr['group_id']?></option>
                                    <option value="select">Please select your group type</option>
                                    @foreach($gt as $GT)
                                    <option value="{{$GT->group_type_name}}">{{$GT->group_type_name}}</option>
                                    @endforeach
                               </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                               <label>Ledger Name</label>
                               <input type="text" class="form-control" name="ledger_name" id="ledger_name" value="<?php echo $qr['ledger_name']?>" />
                         </div>
                     </div>