 <input type="hidden" name="_token" id="u_token" value="{{ csrf_token()}}">
 <input type="hidden" name="user_id" value="<?php echo $qr['user_id']?>" /> 
                  <div class="row">

                      <div class="col-md-6">
                           <label>User Name</label>
                           <input type="text" class="form-control" name="user_name" id="user_name"  value="<?php echo $qr['user_name']?>" >
                      </div>

                      <div class="col-md-6">
                           <label>Full Name</label>
                           <input type="text" class="form-control" name="full_name" id="full_name" value="<?php echo $qr['full_name']?>" />
                      </div>
                  </div>
                   <div class="row">

                     <div class="col-md-6">
                           <label>Email</label>
                           <input type="text" class="form-control" name="email" id="email" value="<?php echo $qr['email']?>" />
                      </div>

                     <div class="col-md-6">
                           <label>Password</label>
                           <input type="password" class="form-control" name="password" id="password" value="<?php echo $qr['password']?>"  />
                      </div>
              
                  </div>

                  <div class="row">

                        <div class="col-md-6">
                           <label>Phone</label>
                           <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $qr['phone']?>" />
                        </div>
                        <div class="col-md-6">
                            <label>Picture</label>
                            <input type="file" class="form-control form-control-sm" name="picture" id="picture" />
                        </div>
                  </div>

                  <div class="row">

                     <div class="col-md-6">
                           <label>Account Creation Date</label>
                           <input type="date" class="form-control" name="account_creation_date" id="account_creation_date" value="<?php echo $qr['account_creation_date']?>" />
                      </div>

                     <div class="col-md-6">
                           <label>Status</label>
                           <select class="form-control" name="status" id="status" >
                               <option value="<?php echo $qr['status']?>"><?php echo $qr['status']?></option>
                               <option value="Active">Active</option>
                               <option value="Inactive">Inactive</option>
                           </select>
                           <label id="status_error" style="color:red"></label>
                      </div>
              
                  </div>
                  
       