

<!-- content @s -->
<div class="nk-content ">
<div class="container-fluid">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="components-preview wide-md mx-auto">

<div class="nk-block nk-block-lg">

<div class="card card-preview">
    
<div class="card-inner">
    <a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary">Add Voucher</a>
    <a href="vcl_pdf" class="btn btn-danger">PDF</a>
    <a href="vcl_print" class="btn btn-success">Print</a>
    <p></p>
<table class="datatable-init nowrap table-sm table-responsive" style="text-align: center;" >
<thead>
<tr>
<th>Sl</th>
<th>Voucher No</th>
<th>Date</th>
<th>Head Name</th>
<th>Company Name</th>
<th>Debit</th>
<th>Credit</th>
<th>Check No</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php 
$x=1;
foreach($qr as $row){?>
<tr>
<td><?php echo $x++;?></td>
<td><?php echo $row['voucher_no']?></td>
<td><?php echo $row['voucher_date']?></td>
<td><?php echo $row['postling_head_id']?></td>
<td><?php echo $row['company_id']?></td>
<td><?php echo $row['debit_amount']?></td>
<td><?php echo $row['credit_amount']?></td>
<td><?php echo $row['check_no']?></td>
<td><?php echo $row['voucher_status']?></td>
<td>
    <a style="color:#fff;" data-toggle="modal" data-target="#deleteid" onclick="delid(<?php echo $row['sl_no']?>)" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
    <a style="color:#fff;" data-toggle="modal" data-target="#updateid" onclick="upid('<?php echo $row['sl_no']?>')" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
    
</td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div><!-- .card-preview -->
</div> <!-- nk-block -->


</div><!-- .components-preview -->
</div>
</div>
</div>
</div>
<!-- content @e -->
<!-- Add Modal-->

<div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        
        <div class="modal-content">
        <div class="modal-header">
            <h4>Add Voucher</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
              <form   id="save" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
                  <div class="row">
                      <div class="col-md-6">
                           <label>Company Name</label>
                           <select class="form-control" name="company_id" id="company_id" onkeyup="validation(id)" onchange="validation(id)" >
                            <option value="select">Please select your company name</option>
                            @foreach($cn as $CN)
                            <option value="{{$CN->company_name}}">{{$CN->company_name}}</option>
                            @endforeach
                           </select>
                           <label id="company_id_error" style="color:red"></label>
                      </div>
                      <div class="col-md-6">
                           <label>Ledger Group Type</label>
                           <select class="form-control" name="group_id" id="group_id" onkeyup="validation(id)" onchange="validation(id)" >
                            <option>Please select your ledger group type</option>
                            @foreach($gn as $GN)
                            <option value="{{$GN->group_type_name}}">{{$GN->group_type_name}}</option>
                            @endforeach
                          </select>
                           <label id="group_id_error" style="color:red"></label>
                      </div>
                    
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                           <label>Sub Group Name</label>
                           <select class="form-control" name="sub_group_id" id="sub_group_id" onkeyup="validation(id)" onchange="validation(id)" >
                            <option value="select">Please select your ledger sub group name</option>
                            @foreach($lsgn as $LSGN)
                            <option value="{{$LSGN->ledger_sub_group_name}}">{{$LSGN->ledger_sub_group_name}}</option>
                            @endforeach
                           </select>
                           <label id="sub_group_id_error" style="color:red"></label>
                      </div>
                      <div class="col-md-6">
                           <label>Posting Head Name</label>
                           <select class="form-control" name="postling_head_id" id="postling_head_id" onkeyup="validation(id)" onchange="validation(id)" >
                              <option value="select">Please select your posting head name</option>
                              @foreach($lphn as $LPHN)
                              <option value="{{$LPHN->posting_head_name}}">{{$LPHN->posting_head_name}}</option>
                              @endforeach
                           </select>
                           <label id="postling_head_id_error" style="color:red"></label>
                      </div>
                    
                  </div>
                   <div class="row">
                      
                      <div class="col-md-6">
                           <label>Voucher Type</label>
                           <select class="form-control" name="voucher_type" id="voucher_type" onkeyup="validation(id)" onchange="validation(id)" >
                              <option value="selected">Please select your voucher type</option>
                              <option value="Bank Payment">Bank Payment</option>
                              <option value="Bank Sales">Bank Sales</option>
                              <option value="Cash Payment">Cash Payment</option>
                              <option value="Cash Sales">Cash Sales</option>
                          </select>
                           <label id="voucher_type_error" style="color:red"></label>
                      </div>
                      <div class="col-md-6">
                             <label>Voucher No</label>
                             <input type="text" class="form-control" name="voucher_no" id="voucher_no" onkeyup="validation(id)" onchange="validation(id)" />
                             <label id="voucher_no_error" style="color:red"></label>
                      </div>
                  </div>
                   <div class="row">
                      
                      <div class="col-md-6">
                           <label>Debit Amount</label>
                           <input type="number" class="form-control" name="debit_amount" id="debit_amount" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="debit_amount_error" style="color:red"></label>
                      </div>
                      <div class="col-md-6">
                           <label>Credit Amount</label>
                           <input type="number" class="form-control" name="credit_amount" id="credit_amount" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="credit_amount_error" style="color:red"></label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                           <label>User Name</label>
                           <select class="form-control" name="user_id" id="user_id" onkeyup="validation(id)" onchange="validation(id)" >
                              <option value="select">Please select your user name</option>
                              @foreach($un as $UN)
                              <option value="{{$UN->user_name}}">{{$UN->user_name}}</option>
                              @endforeach
                           </select>
                           <label id="user_id_error" style="color:red"></label>
                      </div>
                      <div class="col-md-6">
                           <label>Checkno</label>
                           <input type="text" class="form-control" name="check_no" id="check_no" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="check_no_error" style="color:red"></label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                           <label>Check Date</label>
                           <input type="date" class="form-control" name="check_date" id="check_date" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="check_date_error" style="color:red"></label>
                      </div>
                      <div class="col-md-6">
                           <label>Voucher Status</label>
                           <select class="form-control" name="voucher_status" id="voucher_status" onkeyup="validation(id)" onchange="validation(id)" >
                              <option value="selected">Please select your voucher status</option>
                              <option value="Paid">Paid</option>
                              <option value="Unpaid">Unpaid</option>
                              <option value="Processing">Processing</option>
                              <option value="Hold">Hold</option>
                          </select>
                           <label id="voucher_status_error" style="color:red"></label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                           <label>Prepare By</label>
                           <input type="text" class="form-control" name="prepared_by" id="prepared_by" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="prepared_by_error" style="color:red"></label>
                           <input type="hidden" class="form-control" name="voucher_date" id="voucher_date" onkeyup="validation(id)" onchange="validation(id)" value="{{date('Y-m-d')}}" />
                      </div>
                  </div>
        </div>  
           <div class="modal-footer">
               <button class="btn btn-success" type="button" onclick="save()">Save</button>
            <button class="btn btn-danger" class="close" data-dismiss="modal">Cancel</button>
            
            </div> 
        </form>
    </div>
    </div>
</div>

<!-- Add Modal End-->

<!-- Delete Modal Start-->

<div id="deleteid" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        
        <div class="modal-content">
        <div class="modal-header">
            <h4>Do you Want to delete data?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
              <form   id="delete_data" method="post">
              
            
             
              
              <input type="hidden" name="del_id" id="del_id" value="" class="form-control form-control-sm"/>
            
        </div>  
           <div class="modal-footer">
            <button class="btn btn-success" type="button" onclick="deletes()">Yes</button>
            <button class="btn btn-danger" class="close" data-dismiss="modal">No</button>
            
        </div> 
              </form>
        </div>
      
        
       
        
    </div>
    
</div>

<!-- Delete Modal End-->

<!-- Update Modal Start -->
<div id="updateid" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        
        <div class="modal-content">
        <div class="modal-header">
            <h4>Update Voucher</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
             <form   id="update" method="post">
          <div class="modal-body">
             
              <div id="up"></div> 
             
               
           
        </div>  
           <div class="modal-footer">
               <button class="btn btn-success" type="button" onclick="update()">Update</button>
            <button class="btn btn-danger" class="close" data-dismiss="modal">Cancel</button>
            
        </div> 
              </form>
        </div>
      
        
       
        
    </div>
    
</div>

<!-- Update Modal End -->
<script type="text/javascript">
 window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>

</script>
<script type="text/javascript">
function save(){
  
    var form=$('#save').get(0);
    var company_id=$('#company_id').val();
    var group_id=$('#group_id').val();
    var sub_group_id=$('#sub_group_id').val();
    var postling_head_id=$('#postling_head_id').val();
    var voucher_type=$('#voucher_type').val();
    var voucher_no=$('#voucher_no').val();
    var debit_amount=$('#debit_amount').val();
    var credit_amount=$('#credit_amount').val();
    var user_id=$('#user_id').val();
    var check_no=$('#check_no').val();
    var check_date=$('#check_date').val();
    var voucher_status=$('#voucher_status').val();
    var prepared_by=$('#prepared_by').val();

    if(company_id==='' || group_id==='' || sub_group_id==='' || postling_head_id==='' || voucher_type==='' || voucher_no==='' || debit_amount==='' || credit_amount===''|| user_id==='' || check_no==='' || check_date==='' || voucher_status==='' || prepared_by==='' ){
       if(company_id==='' ){
        $('#company_id_error').html("Please select your company name");
        $('#company_id').css('border-color','red');
       }
       if(group_id===''){
        $('#group_id_error').html("Please select your ledger group type");
        $('#group_id').css('border-color','red');
       }
       if(sub_group_id===''){
        $('#sub_group_id_error').html("Please select your ledger sub group type");
        $('#sub_group_id').css('border-color','red');
       }
       if(postling_head_id===''){
        $('#postling_head_id_error').html("Please select your posting head");
        $('#postling_head_id').css('border-color','red');
       }
       if(voucher_type===''){
        $('#voucher_type_error').html("Please select your voucher type");
        $('#voucher_type').css('border-color','red');
       }
       if(voucher_no===''){
        $('#voucher_no_error').html("Please enter your voucher no");
        $('#voucher_no').css('border-color','red');
       }
       if(debit_amount===''){
        $('#debit_amount_error').html("Please enter your debit amount");
        $('#debit_amount').css('border-color','red');
       }
       if(credit_amount===''){
        $('#credit_amount_error').html("Please enter your credit amount");
        $('#credit_amount').css('border-color','red');
       }
       if(user_id===''){
        $('#user_id_error').html("Please select your user name");
        $('#user_id').css('border-color','red');
       }
        
        if(check_no===''){
        $('#check_no_error').html("Please enter your check no");
        $('#check_no').css('border-color','red');
       }
       if(check_date===''){
        $('#check_date_error').html("Please enter your check date");
        $('#check_date').css('border-color','red');
       }
       if(voucher_status===''){
        $('#voucher_status_error').html("Please select your voucher status");
        $('#voucher_status').css('border-color','red');
       }
       if(prepared_by===''){
        $('#prepared_by_error').html("Please write your prepared by");
        $('#prepared_by').css('border-color','red');
       }

    }else{
        $.ajax({
       
        url:'vcl_save',
        method:'POST',
        data:new FormData(form),
        processData:false,
        contentType:false,
        success:function(){
         window.location.assign('vcl');   
        }
       
        
    })
    }
    
    
    
    
}
function delid(id){

    $('#del_id').val(id);
    
}
function upid(id){
    $.ajax({
        url:'vcl_update_form',
        method:'GET',
        dataType:'html',
        data:{id:id},
        success:function(data){
            $('#up').html(data);
            
        }
    })
   }
function update(){
     var form=$('#update').get(0);
   $.ajax({
       
        url:'vcl_update',
        method:'POST',
        data:new FormData(form),
        processData:false,
        contentType:false,
        success:function(){
         window.location.assign('vcl');   
        }
       
        
    })
    
    
}
function deletes(){
    var id=$('#del_id').val(); 
    var token=$('#_token').val();
   
    $.ajax({
        url:'vcl_del',
        method:'POST',
        dataType:'html',
        data:{id:id,_token:token},
        success:function(){
             window.location.assign('vcl');  
        }
    })
    
}

function validation(id){
    var val=$.trim($('#'+id).val());
    if(val===''){
        $('#'+id+'_error').html('');
        $('#'+id).css('border-color','red')
    }else{
       $('#'+id+'_error').html('');
        $('#'+id).css('border-color','green') 
    }
    
}


</script>
