

<!-- content @s -->
<div class="nk-content ">
<div class="container-fluid">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="components-preview wide-md mx-auto">

<div class="nk-block nk-block-lg">

<div class="card card-preview">
    
<div class="card-inner">
    <a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary">Add Ledger Posting Head</a>
   <!--  <a href="us_pdf" class="btn btn-danger">PDF</a>
    <a href="us_print" class="btn btn-success">Print</a> -->
    <p></p>
<table class="datatable-init nowrap table-sm table-responsive">
<thead>
<tr>
<th>Sl</th>
<th>Group</th>
<th>Sub Group </th>
<th>Head Name</th>
<th>Budget Type</th>
<th>Month</th>
<th>Amount</th>
<th>User Name</th>
<th>A/C Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php 
$x=1;
foreach($qr as $row){?>
<tr>
<td><?php echo $x++;?></td>
<td><?php echo $row['group_id']?></td>
<td><?php echo $row['sub_group_id']?></td>
<td><?php echo $row['posting_head_id']?></td>
<td><?php echo $row['budget_type']?></td>
<td><?php echo $row['month']?></td>
<td><?php echo $row['amount']?></td>
<td><?php echo $row['user_id']?></td>
<td><?php echo $row['creation_date']?></td>
<td>
    <a style="color:#fff;" data-toggle="modal" data-target="#deleteid" onclick="delid(<?php echo $row['budget_id']?>)" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
    <a style="color:#fff;" data-toggle="modal" data-target="#updateid" onclick="upid('<?php echo $row['budget_id']?>')" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
    
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
            <h4>Add Budget</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
              <form   id="save" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
                  <div class="row">
                      <div class="col-md-12">
                           <label>Group Name</label>
                           <input type="text" class="form-control" name="group_id" id="group_id" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="group_id_error" style="color:red"></label>
                      </div>
                    
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                           <label>Sub Group Name</label>
                           <input type="text" class="form-control" name="sub_group_id" id="sub_group_id" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="sub_group_id_error" style="color:red"></label>
                      </div>
                    
                  </div>
                   <div class="row">
                      <div class="col-md-12">
                           <label>Posting Head Name</label>
                           <input type="text" class="form-control" name="posting_head_id" id="posting_head_id" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="posting_head_id_error" style="color:red"></label>
                      </div>
                    
                  </div>
                   <div class="row">
                      <div class="col-md-12">
                           <label>Budget Type</label>
                           <select class="form-control" name="budget_type" id="budget_type" onkeyup="validation(id)" onchange="validation(id)" >
                            <option value="select">Select your budget type</option>
                            <option value="Monthly">Monthly</option>
                            <option value="Yearly">Yearly</option>
                           </select>
                           <label id="budget_type_error" style="color:red"></label>
                      </div>
                    
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                           <label>Month</label>
                           <select  class="form-control" name="month" id="month" onkeyup="validation(id)" onchange="validation(id)" >
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
                           <label id="month_error" style="color:red"></label>
                      </div>
                    
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                           <label>Amount</label>
                           <input type="number" class="form-control" name="amount" id="amount" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="Amount_error" style="color:red"></label>
                      </div>
                    
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                           <label>User Name</label>
                           <input type="text" class="form-control" name="user_id" id="user_id" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="user_id_error" style="color:red"></label>
                      </div>
                    
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                           <label>Creation Date</label>
                           <input type="date" class="form-control" name="creation_date" id="creation_date" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="creation_date_error" style="color:red"></label>
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
              
            
             
              
              <input type="text" name="del_id" id="del_id" value="" class="form-control form-control-sm"/>
            
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
            <h4>Update Budget</h4>
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
    var group_id=$('#group_id').val();
    var sub_group_id=$('#sub_group_id').val();
    var posting_head_id=$('#posting_head_id').val();
    var budget_type=$('#budget_type').val();
    var month=$('#month').val();
    var amount=$('#amount').val();
    var user_id=$('#user_id').val();
    var creation_date=$('#creation_date').val();

    if(group_id==='' || sub_group_id==='' || posting_head_id==='' || budget_type==='' ||month==='' || amount==='' || user_id==='' || creation_date===''){
       if(group_id==='' ){
        $('#group_id_error').html("Please select your group name");
        $('#group_id').css('border-color','red');
       }
       if(sub_group_id===''){
        $('#sub_group_id_error').html("Please select your sub group name");
        $('#sub_group_id').css('border-color','red');
       }
       if(posting_head_id===''){
        $('#posting_head_id_error').html("Please select your posting head name");
        $('#posting_head_id').css('border-color','red');
       }
       if(budget_type===''){
        $('#budget_type_error').html("Please select your budget type");
        $('#budget_type').css('border-color','red');
       }
       if(month===''){
        $('#month_error').html("Please select your month");
        $('#month').css('border-color','red');
       }
       if(amount===''){
        $('#amount_error').html("Please enter your budget amount");
        $('#amount').css('border-color','red');
       }
       if(user_id===''){
        $('#user_id_error').html("Please select your user name");
        $('#user_id').css('border-color','red');
       }
       if(creation_date===''){
        $('#creation_date_error').html("Please enter your budget creation date");
        $('#creation_date').css('border-color','red');
       }
        
        
    }else{
        $.ajax({
       
        url:'bg_save',
        method:'POST',
        data:new FormData(form),
        processData:false,
        contentType:false,
        success:function(){
         window.location.assign('bg');   
        }
       
        
    })
    }
    
    
    
    
}
function delid(id){

    $('#del_id').val(id);
    
}
function upid(id){
    $.ajax({
        url:'bg_update_form',
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
       
        url:'bg_update',
        method:'POST',
        data:new FormData(form),
        processData:false,
        contentType:false,
        success:function(){
         window.location.assign('bg');   
        }
       
        
    })
    
    
}
function deletes(){
    var id=$('#del_id').val(); 
    var token=$('#_token').val();
   
    $.ajax({
        url:'bg_del',
        method:'POST',
        dataType:'html',
        data:{id:id,_token:token},
        success:function(){
             window.location.assign('bg');  
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
