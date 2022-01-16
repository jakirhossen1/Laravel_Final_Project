<!DOCTYPE html>
<html lang="zxx" class="js">
<style type="text/css">
    .mar{
        margin-top:100px ;
    }
</style>

<head>

<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="assets/images/favicon.png">
<!-- Page Title  -->
<title><?php echo $title;?></title>
<!-- StyleSheets  -->
<link rel="stylesheet" href="assets/css/dashlite.css">
<link id="skin-default" rel="stylesheet" href="assets/css/theme.css">

</head>

<body class="nk-body bg-white npc-general pg-auth" >

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 mar">
        <form method="post" action="#" class="form-validate is-alter " autocomplete="off"  >
    <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}" />
<div class="form-group">
<div class="form-control-wrap">
    
    <input  type="text" class="form-control form-control-lg" name="email" id="email" onkeyup="validation(id)" onchange="validation(id)" placeholder="Enter your email address or username">
    <label id="email_error" style="color:red;"></label>
</div>
</div><!-- .form-group -->
<div class="form-group">
<div class="form-control-wrap">
<a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
<em class="passcode-icon icon-show icon ni ni-eye"></em>
<em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
</a>
    <input  type="password" class="form-control form-control-lg" name="password"  id="password" onkeyup="validation(id)" onchange="validation(id)" placeholder="Enter your passcode">
    <label id="password_error" style="color:red"></label>
</div>
</div><!-- .form-group -->
<div class="form-group">
    <button type="button" onclick="login()" class="btn btn-lg btn-primary btn-block">Sign in</button>
</div>
</form><!-- form -->
    </div>
    <div class="col-md-4"></div>
    
</div>





<!-- JavaScript -->
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<!-- select region modal -->

</body>
</html>
	
        <script type="text/javascript">
 window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>

</script>
<script type="text/javascript">
function login(){
   var base_url="<?php echo URL('/').'/'?>";
   var email=$('#email').val();
   var password=$('#password').val();
   var token=$('#_token').val();
   
   if(email ==='' || password===''){
       if(email===''){
           $('#email_error').html("please enter your email");
           $('#email').css('border-color','red');
       }
        if(password===''){
           $('#password_error').html("please enter your password");
           $('#password').css('border-color','red');
       }
   }else{
       $.ajax({
           url:'authen',
           method:'post',
           dataType:'html',
           data:{email:email,password:password,_token:token},
           success:function(data){
               var dat=$.parseJSON(data);
               if(dat.res==1){
                   window.location.assign('us');
               }else if(dat.res==2){
            $('#email_error').html("You enter wrong email address");
            $('#email').css('border-color','red');
            $('#password_error').html("You enter wrong password");
            $('#password').css('border-color','red');
               }else if(dat.res==3){
          $('#email_error').html("You enter wrong email address");
            $('#email').css('border-color','red');
            
               }else if(dat.res==4){
        $('#password_error').html("You enter wrong password");
            $('#password').css('border-color','red');
            
               }else if(dat.res==5){
            $('#status_error').html("Your account is inactive");
            $('#password').css('border-color','red');
             $('#email').css('border-color','red');
            
               }
           }
       })
   }
   
   
   
}

 function validation(id) {
        var val = $.trim($('#' + id).val());
                    if (val === '') {
                        $('#' + id + '_error').html('');
                        $('#' + id).css('border-color', 'red');
                    } else {
                        $('#' + id + '_error').html('');
                        $('#' + id).css('border-color', 'green');
                    }
    }
</script>