<input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
<input type="hidden" name="budget_id" value="<?php echo $qr['budget_id']?>" > 
                  <div class="row">
                      <div class="col-md-12">
                           <label>Group Name</label>
                           <select class="form-control" name="group_id" id="group_id"  >
                            <option value="<?php echo $qr['group_id']?>"><?php echo $qr['group_id']?></option>
                            <option value="select">Please select your group name</option>
                            @foreach($gt as $GT )
                            <option value="{{$GT->id}}">{{$GT->group_type_name}}</option>
                            @endforeach
                           </select>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                           <label>Sub Group Name</label>
                           <select class="form-control" name="sub_group_id" id="sub_group_id"  >
                            <option value="<?php echo $qr['sub_group_id']?>"><?php echo $qr['sub_group_id']?></option>
                            <option value="select">Please select your sub group name</option>
                            @foreach($lsgn as $LSGN )
                            <option value="{{$LSGN->id}}">{{$LSGN->ledger_sub_group_name}}</option>
                            @endforeach
                           </select>
                      </div>
                  </div>
                   <div class="row">
                      <div class="col-md-12">
                           <label>Posting Head Name</label>
                           <select class="form-control" name="posting_head_id" id="posting_head_id"  >
                            <option value="<?php echo $qr['posting_head_id']?>"><?php echo $qr['posting_head_id']?></option>
                            @foreach($lphn as $LPHN )
                            <option value="{{$LPHN->ledger_posting_head_id}}">{{$LPHN->posting_head_name}}</option>
                            @endforeach
                           </select>
                      </div>
                  </div>
                   <div class="row">
                      <div class="col-md-12">
                        <label>Budget Type</label>
                            <select class="form-control" name="budget_type" id="budget_type"   >
                              <option value="<?php echo $qr['budget_type']?>"><?php echo $qr['budget_type']?></option>
                            <option value="select">Select your budget type</option>
                            <option value="Monthly">Monthly</option>
                            <option value="Yearly">Yearly</option>
                           </select>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                           <label>Month</label>
                           <select  class="form-control" name="month" id="month"  >
                            <option value="<?php echo $qr['month']?>"><?php echo $qr['month']?></option>
                            <option value="selected">Please select month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                         </select>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                           <label>Amount</label>
                           <input type="number" class="form-control" name="amount" id="amount" value="<?php echo $qr['amount']?>" >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                           <label>User Name</label>
                           <select class="form-control" name="user_id" id="user_id"  >
                            <option value="<?php echo $qr['user_id']?>"><?php echo $qr['user_id']?></option>
                            <option value="select">Please select your user name</option>
                            @foreach($un as $UN )
                            <option value="{{$UN->user_id}}">{{$UN->user_name}}</option>
                            @endforeach
                           </select>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                           <label>Creation Date</label>
                           <input type="date" class="form-control" name="creation_date" id="creation_date" value="<?php echo $qr['creation_date']?>" >
                      </div>
                  </div>