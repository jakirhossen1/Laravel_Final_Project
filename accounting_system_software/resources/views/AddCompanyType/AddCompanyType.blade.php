

<!-- content @s -->
<div class="nk-content ">
<div class="container-fluid">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="components-preview wide-md mx-auto">

<div class="nk-block nk-block-lg">

<div class="card card-preview">
    
<div class="card-inner">
    <a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary">Add Company Type</a>
   <!--  <a href="us_pdf" class="btn btn-danger">PDF</a>
    <a href="us_print" class="btn btn-success">Print</a> -->
    <p></p>
<table class="datatable-init nowrap table-sm table-responsive">
<thead>
<tr>
<th>Sl</th>
<th>Company Type</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php 
$x=1;
foreach($qr as $row){?>
<tr>
<td><?php echo $x++;?></td>
<td><?php echo $row['company_type']?></td>
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
            <h4>Add Company Type</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
              <form   id="save" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
                  <div class="row">

                      <div class="col-md-12">
                           <label>Company Type</label>
                           <input type="text" class="form-control" name="company_type" id="company_type" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="company_type_error" style="color:red"></label>
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
            <h4>Update Company Type</h4>
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
    var company_type=$('#company_type').val();
    if(company_type===''){
       if(company_type===''){
        $('#company_type_error').html("Please enter company type");
        $('#company_type').css('border-color','red');
       }
        
    }else{
        $.ajax({
       
        url:'companytype_save',
        method:'POST',
        data:new FormData(form),
        processData:false,
        contentType:false,
        success:function(){
         window.location.assign('companytype');   
        }
       
        
    })
    }
    
    
    
    
}
function delid(id){

    $('#del_id').val(id);
    
}
function upid(id){
    $.ajax({
        url:'companytype_update_form',
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
       
        url:'companytype_update',
        method:'POST',
        data:new FormData(form),
        processData:false,
        contentType:false,
        success:function(){
         window.location.assign('companytype');   
        }
       
        
    })
    
    
}
function deletes(){
    var id=$('#del_id').val(); 
    var token=$('#_token').val();
   
    $.ajax({
        url:'companytype_del',
        method:'POST',
        dataType:'html',
        data:{id:id,_token:token},
        success:function(){
             window.location.assign('companytype');  
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
