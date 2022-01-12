

<!-- content @s -->
<div class="nk-content ">
<div class="container-fluid">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="components-preview wide-md mx-auto">

<div class="nk-block nk-block-lg">

<div class="card card-preview">
    
<div class="card-inner">
    <a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary">Add User</a>
    <a href="us_pdf" class="btn btn-danger">PDF</a>
    <a href="us_print" class="btn btn-success">Print</a>
    <p></p>
<table class="datatable-init nowrap table-sm table-responsive">
<thead>
<tr>
<th>Sl</th>

<th>User Name</th>
<th>Full Name</th>
<th>Email</th>
<th>Phone</th>
<th>Picture</th>
<th>A/C Date</th>
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

<td><?php echo $row['user_name']?></td>
<td><?php echo $row['full_name']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['phone']?></td>
<td><img style="height: 40px; width: 40px;" src="<?php echo URL('/').'/'.$row['picture']?>" class="img-thumbnail" /></td>
<td><?php echo $row['account_creation_date']?></td>
<td><?php echo $row['status']?></td>
<td>
    <a style="color:#fff;" data-toggle="modal" data-target="#deleteid" onclick="delid(<?php echo $row['user_id']?>)" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
    <a style="color:#fff;" data-toggle="modal" data-target="#updateid" onclick="upid('<?php echo $row['user_id']?>')" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
    
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
            <h4>Add Users</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
              <form   id="save" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
                  <div class="row">

                      <div class="col-md-6">
                           <label>User Name</label>
                           <input type="text" class="form-control" name="user_name" id="user_name" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="user_name_error" style="color:red"></label>
                      </div>

                      <div class="col-md-6">
                           <label>Full Name</label>
                           <input type="text" class="form-control" name="full_name" id="full_name" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="full_name_error" style="color:red"></label>
                      </div>
                  </div>
                   <div class="row">

                     <div class="col-md-6">
                           <label>Email</label>
                           <input type="text" class="form-control" name="email" id="email" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="email_error" style="color:red"></label>
                      </div>

                     <div class="col-md-6">
                           <label>Password</label>
                           <input type="password" class="form-control" name="password" id="password" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="password_error" style="color:red"></label>
                      </div>
              
                  </div>

                  <div class="row">

                        <div class="col-md-6">
                           <label>Phone</label>
                           <input type="text" class="form-control" name="phone" id="phone" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="phone_error" style="color:red"></label>
                        </div>
                        <div class="col-md-6">
                            <label>Picture</label>
                            <input type="file" class="form-control form-control-sm" name="picture"/>
                        </div>
                  </div>

                  <div class="row">

                     <div class="col-md-6">
                           <label>Account Creation Date</label>
                           <input type="date" class="form-control" name="account_creation_date" id="account_creation_date" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="account_creation_date_error" style="color:red"></label>
                      </div>

                     <div class="col-md-6">
                           <label>Status</label>
                           <select class="form-control" name="status" id="status" onkeyup="validation(id)" onchange="validation(id)">
                               <option value="Select">Please select your status</option>
                               <option value="Active">Active</option>
                               <option value="Inactive">Inactive</option>
                           </select>
                           <label id="status_error" style="color:red"></label>
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
            <h4>Update Users</h4>
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
    var user_name=$('#user_name').val();
    var full_name=$('#full_name').val();
    var email=$('#email').val();
    var phone=$('#phone').val();
    var password=$('#password').val();
    var account_creation_date=$('#account_creation_date').val();
    var status=$('#status').val();
    if(user_name==='' || user_name==='' || email==='' || phone==='' || password==='' || account_creation_date==='' || status===''){
       if(user_name===''){
        $('#user_name_error').html("Please enter user name");
        $('#user_name').css('border-color','red');
       }
       if(full_name===''){
        $('#full_name_error').html("Please enter full name");
        $('#full_name').css('border-color','red');
       }
       if(email===''){
        $('#email_error').html("Please eneter email");
        $('#email').css('border-color','red');
       }
       if(phone===''){
        $('#phone_error').html("Please enter phone");
        $('#phone').css('border-color','red');
       }
        if(password===''){
        $('#password_error').html("Please enter password");
        $('#password').css('border-color','red');
       }
       if(account_creation_date===''){
        $('#account_creation_date_error').html("Please enter your account creation date");
        $('#account_creation_date').css('border-color','red');
       }
        if(status===''){
        $('#status_error').html("Please select your status");
        $('#status').css('border-color','red');
       }
    }else{
        $.ajax({
       
        url:'us_save',
        method:'POST',
        data:new FormData(form),
        processData:false,
        contentType:false,
        success:function(){
         window.location.assign('us');   
        }
       
        
    })
    }
    
    
    
    
}
function delid(id){

    $('#del_id').val(id);
    
}
function upid(id){
    $.ajax({
        url:'us_update_form',
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
       
        url:'us_update',
        method:'POST',
        data:new FormData(form),
        processData:false,
        contentType:false,
        success:function(){
         window.location.assign('us');   
        }
       
        
    })
    
    
}
function deletes(){
    var id=$('#del_id').val(); 
    var token=$('#_token').val();
   
    $.ajax({
        url:'us_del',
        method:'POST',
        dataType:'html',
        data:{id:id,_token:token},
        success:function(){
             window.location.assign('us');  
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
