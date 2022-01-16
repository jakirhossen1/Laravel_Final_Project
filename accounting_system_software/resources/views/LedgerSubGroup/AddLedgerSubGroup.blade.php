

<!-- content @s -->
<div class="nk-content ">
<div class="container-fluid">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="components-preview wide-md mx-auto">

<div class="nk-block nk-block-lg">

<div class="card card-preview">
    
<div class="card-inner">
    <a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary">Add Ledger Sub Group</a>
    <a href="lsg_pdf" class="btn btn-danger">PDF</a>
    <a href="lsg_print" class="btn btn-success">Print</a>
    <p></p>
<table class="datatable-init nowrap table-sm table-responsive" style="text-align: center;"  >
<thead>
<tr>
<th>Sl</th>
<th>Ledger Group</th>
<th>Sub Group Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php 
$x=1;
foreach($qr as $row){?>
<tr>
<td><?php echo $x++;?></td>
<td><?php echo $row['ledger_sub_group_parent_id']?></td>
<td><?php echo $row['ledger_sub_group_name']?></td>
<td>
    <a style="color:#fff;" data-toggle="modal" data-target="#deleteid" onclick="delid(<?php echo $row['id']?>)" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
    <a style="color:#fff;" data-toggle="modal" data-target="#updateid" onclick="upid('<?php echo $row['id']?>')" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
    
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
            <h4>Add Ledger Sub Group</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
              <form   id="save" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
                  <div class="row">

                      <div class="col-md-12">
                        <input type="hidden" class="form-control" name="ledger_sub_group_date" id="ledger_sub_group_date" onkeyup="validation(id)" onchange="validation(id)" value="{{date('Y-m-d')}}" />
                           <label>Ledger Group Type</label>
                           <select class="form-control" name="ledger_sub_group_parent_id" id="ledger_sub_group_parent_id" onkeyup="validation(id)" onchange="validation(id)" >
                                <option value="select">Please select your ledger group </option>
                                @foreach($lgt as $LGT)
                                <option value="{{$LGT->ledger_name}}">{{$LGT->ledger_name}}</option>
                                @endforeach
                           </select>
                           <label id="ledger_sub_group_parent_id_error" style="color:red"></label>
                      </div>
                    
                  </div>
                  <div class="row">

                      <div class="col-md-12">
                           <label>Ledger Sub Group Name</label>
                           <input type="text" class="form-control" name="ledger_sub_group_name" id="ledger_sub_group_name" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="ledger_sub_group_name_error" style="color:red"></label>
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
            <h4>Update Ledger Sub Group</h4>
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
    var ledger_sub_group_name=$('#ledger_sub_group_name').val();
    var ledger_sub_group_parent_id=$('#ledger_sub_group_parent_id').val();
    if(ledger_sub_group_name==='' || ledger_sub_group_parent_id===''){
       if(ledger_sub_group_name===''){
        $('#ledger_sub_group_name_error').html("Please enter your ledger sub group name");
        $('#ledger_sub_group_name').css('border-color','red');
       }
       if(ledger_sub_group_parent_id===''){
        $('#ledger_sub_group_parent_id_error').html("Please select your ledger parent type");
        $('#ledger_sub_group_parent_id').css('border-color','red');
       }
        
    }else{
        $.ajax({
       
        url:'lsg_save',
        method:'POST',
        data:new FormData(form),
        processData:false,
        contentType:false,
        success:function(){
         window.location.assign('lsg');   
        }
       
        
    })
    }
    
    
    
    
}
function delid(id){

    $('#del_id').val(id);
    
}
function upid(id){
    $.ajax({
        url:'lsg_update_form',
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
       
        url:'lsg_update',
        method:'POST',
        data:new FormData(form),
        processData:false,
        contentType:false,
        success:function(){
         window.location.assign('lsg');   
        }
       
        
    })
    
    
}
function deletes(){
    var id=$('#del_id').val(); 
    var token=$('#_token').val();
   
    $.ajax({
        url:'lsg_del',
        method:'POST',
        dataType:'html',
        data:{id:id,_token:token},
        success:function(){
             window.location.assign('lsg');  
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
