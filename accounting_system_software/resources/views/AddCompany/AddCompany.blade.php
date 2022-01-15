

<!-- content @s -->
<div class="nk-content ">
<div class="container-fluid">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="components-preview wide-md mx-auto">

<div class="nk-block nk-block-lg">

<div class="card card-preview">
    
<div class="card-inner">
    <a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary">Add Company</a>
    <a href="ac_pdf" class="btn btn-danger">PDF</a>
    <a href="ac_print" class="btn btn-success">Print</a>
    <p></p>
<table class="datatable-init nowrap table-sm table-responsive" style="text-align: center;">
<thead>
<tr>
<th>Sl</th>
<th>C Type</th>
<th>B Type</th>
<th>C Name</th>
<th>Address</th>
<th>C/R No</th>
<th>Trade License</th>
<th>Company Logo</th>
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
<td><?php echo $row['business_type']?></td>
<td><?php echo $row['company_name']?></td>
<td><?php echo $row['address']?></td>
<td><?php echo $row['company_registration_no']?></td>
<td><?php echo $row['trade_license']?></td>
<td><img style="height: 40px; width: 40px;" src="<?php echo URL('/').'/'.$row['picture']?>" class="img-thumbnail" /></td>
<td>
    <a style="color:#fff;" data-toggle="modal" data-target="#deleteid" onclick="delid(<?php echo $row['company_id']?>)" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
    <a style="color:#fff;" data-toggle="modal" data-target="#updateid" onclick="upid('<?php echo $row['company_id']?>')" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
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
            <h4>Add Company</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
              <form   id="save" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
                  <div class="row">
                      <div class="col-md-6">
                           <label>Company Type</label>
                           <select class="form-control" name="company_type" id="company_type" onkeyup="validation(id)" onchange="validation(id)" >
                            <option value="">Please select your company type</option>
                            @foreach($type as $Type)
                            <option value="{{$Type->id}}">{{$Type->company_type}}</option>
                            @endforeach
                            </select>
                           <label id="company_type_error" style="color:red"></label>
                      </div>
                      <div class="col-md-6">
                           <label>Business Type</label>
                           <select class="form-control" name="business_type" id="business_type" onkeyup="validation(id)" onchange="validation(id)" >
                            <option value="">Please select your business type</option>
                            @foreach($business as $Bus)
                            <option value="{{$Bus->id}}">{{$Bus->business_type}}</option>
                            @endforeach
                            </select>
                           <label id="business_type_error" style="color:red"></label>
                      </div>
                    
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                           <label>Country Name</label>
                           <select class="form-control" name="country" id="country" onkeyup="validation(id)" onchange="validation(id)" >
                            <option value="">Please select your country name</option>
                            @foreach($country as $Country)
                            <option value="{{$Country->id}}">{{$Country->country_name}}</option>
                            @endforeach
                            </select>
                           <label id="country_error" style="color:red"></label>
                      </div>
                      <div class="col-md-6">
                           <label>Company Name</label>
                           <input type="text" class="form-control" name="company_name" id="company_name" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="company_name_error" style="color:red"></label>
                      </div>
                    
                  </div>
                   <div class="row">
                      
                      <div class="col-md-6">
                           <label>Company Address</label>
                           <input type="text" class="form-control" name="address" id="address" onkeyup="validation(id)" onchange="validation(id)" >
                           <label id="address_error" style="color:red"></label>
                      </div>
                      <div class="col-md-6">
                             <label>Contact No</label>
                             <input type="number" class="form-control" name="phone" id="phone" onkeyup="validation(id)" onchange="validation(id)" />
                             <label id="phone_error" style="color:red"></label>
                      </div>
                  </div>
                   <div class="row">
                      
                      <div class="col-md-6">
                           <label>Company Registration No</label>
                           <input type="text" class="form-control" name="company_registration_no" id="company_registration_no" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="company_registration_no_error" style="color:red"></label>
                      </div>
                      <div class="col-md-6">
                           <label>Tin</label>
                           <input type="text" class="form-control" name="tin" id="tin" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="tin_error" style="color:red"></label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                           <label>Vat</label>
                           <input type="text" class="form-control" name="vat" id="vat" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="vat_error" style="color:red"></label>
                      </div>
                      <div class="col-md-6">
                           <label>Trade License</label>
                           <input type="text" class="form-control" name="trade_license" id="trade_license" onkeyup="validation(id)" onchange="validation(id)" />
                           <label id="trade_license_error" style="color:red"></label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                           <label>Company Logo</label>
                           <input type="file" class="form-control-file" name="picture">
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
            <h4>Update Company</h4>
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
    var business_type=$('#business_type').val();
    var country=$('#country').val();
    var company_name=$('#company_name').val();
    var address=$('#address').val();
    var phone=$('#phone').val();
    var company_registration_no=$('#company_registration_no').val();
    var tin=$('#tin').val();
    var vat=$('#vat').val();
    var trade_license=$('#trade_license').val();

    if(company_type==='' || business_type==='' || country==='' || company_name==='' || address==='' || phone==='' || company_registration_no==='' || tin===''|| vat==='' || trade_license===''  ){
       if(company_type==='' ){
        $('#company_type_error').html("Please select your company type");
        $('#company_type').css('border-color','red');
       }
       if(business_type===''){
        $('#business_type_error').html("Please select your business type");
        $('#business_type').css('border-color','red');
       }
       if(country===''){
        $('#country_error').html("Please select your country name");
        $('#country').css('border-color','red');
       }
       if(company_name===''){
        $('#company_name_error').html("Please enter your company name");
        $('#company_name').css('border-color','red');
       }
       if(address===''){
        $('#address_error').html("Please write your company address");
        $('#address').css('border-color','red');
       }
       if(phone===''){
        $('#phone_error').html("Please enter your contact no");
        $('#phone').css('border-color','red');
       }
       if(company_registration_no===''){
        $('#company_registration_no_error').html("Please enter your company registration no");
        $('#company_registration_no').css('border-color','red');
       }
       if(tin===''){
        $('#tin_error').html("Please enter your tin number");
        $('#tin').css('border-color','red');
       }
       if(vat===''){
        $('#vat_error').html("Please enter your vat");
        $('#vatvat').css('border-color','red');
       }
        
        if(trade_license===''){
        $('#trade_license_error').html("Please enter your trade license no");
        $('#trade_license').css('border-color','red');
       }

    }else{
        $.ajax({
       
        url:'ac_save',
        method:'POST',
        data:new FormData(form),
        processData:false,
        contentType:false,
        success:function(){
         window.location.assign('ac');   
        }
       
        
    })
    }
    
    
    
    
}
function delid(id){

    $('#del_id').val(id);
    
}
function upid(id){
    $.ajax({
        url:'ac_update_form',
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
       
        url:'ac_update',
        method:'POST',
        data:new FormData(form),
        processData:false,
        contentType:false,
        success:function(){
         window.location.assign('ac');   
        }
       
        
    })
    
    
}
function deletes(){
    var id=$('#del_id').val(); 
    var token=$('#_token').val();
   
    $.ajax({
        url:'ac_del',
        method:'POST',
        dataType:'html',
        data:{id:id,_token:token},
        success:function(){
             window.location.assign('ac');  
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
