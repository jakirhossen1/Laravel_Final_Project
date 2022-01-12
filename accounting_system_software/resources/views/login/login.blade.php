<!DOCTYPE html>
<html lang="zxx" class="js">

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

<body class="nk-body bg-white npc-general pg-auth">
<div class="nk-app-root">
<!-- main @s -->
<div class="nk-main ">
<!-- wrap @s -->
<div class="nk-wrap nk-wrap-nosidebar">
<!-- content @s -->
<div class="nk-content ">
<div class="nk-split nk-split-page nk-split-md">
<div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
<div class="absolute-top-right d-lg-none p-3 p-sm-5">
<a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
</div>
<div class="nk-block nk-block-middle nk-auth-body">
<div class="brand-logo pb-5">
<a href="html/index.html" class="logo-link">
<img class="logo-light logo-img logo-img-lg" src="assets/images/logo.png" srcset="assets/images/logo2x.png 2x" alt="logo">
<img class="logo-dark logo-img logo-img-lg" src="assets/images/logo-dark.png" srcset="assets/images/logo-dark2x.png 2x" alt="logo-dark">
</a>
</div>
<div class="nk-block-head">
<div class="nk-block-head-content">
<h5 class="nk-block-title">Sign-In</h5>
<div class="nk-block-des">
<p>Access the DashLite panel using your email and passcode.</p>
</div>
</div>
</div><!-- .nk-block-head -->
<form method="post" action="#" class="form-validate is-alter" autocomplete="off">
    <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}" />
<div class="form-group">
<div class="form-label-group">
<label class="form-label" for="email-address">Email or Username</label>
<a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a>
</div>
    <label id="status_error" style="color:red;"></label>
<div class="form-control-wrap">
    <input  type="text" class="form-control form-control-lg" name="email" id="email" onkeyup="validation(id)" onchange="validation(id)" placeholder="Enter your email address or username">
    <label id="email_error" style="color:red;"></label>
</div>
</div><!-- .form-group -->
<div class="form-group">
<div class="form-label-group">
<label class="form-label" for="password">Passcode</label>
<a class="link link-primary link-sm" tabindex="-1" href="html/pages/auths/auth-reset.html">Forgot Code?</a>
</div>
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
<div class="form-note-s2 pt-4"> New on our platform? <a href="html/pages/auths/auth-register.html">Create an account</a>
</div>
<div class="text-center pt-4 pb-3">
<h6 class="overline-title overline-title-sap"><span>OR</span></h6>
</div>
<ul class="nav justify-center gx-4">
<li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
<li class="nav-item"><a class="nav-link" href="#">Google</a></li>
</ul>
<div class="text-center mt-5">
<span class="fw-500">I don't have an account? <a href="#">Try 15 days free</a></span>
</div>
</div><!-- .nk-block -->
<div class="nk-block nk-auth-footer">
<div class="nk-block-between">
<ul class="nav nav-sm">
<li class="nav-item">
<a class="nav-link" href="#">Terms & Condition</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Privacy Policy</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Help</a>
</li>
<li class="nav-item dropup">
<a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><small>English</small></a>
<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
<ul class="language-list">
<li>
    <a href="#" class="language-item">
        <img src="assets/images/flags/english.png" alt="" class="language-flag">
        <span class="language-name">English</span>
    </a>
</li>
<li>
    <a href="#" class="language-item">
        <img src="assets/images/flags/spanish.png" alt="" class="language-flag">
        <span class="language-name">Español</span>
    </a>
</li>
<li>
    <a href="#" class="language-item">
        <img src="assets/images/flags/french.png" alt="" class="language-flag">
        <span class="language-name">Français</span>
    </a>
</li>
<li>
    <a href="#" class="language-item">
        <img src="assets/images/flags/turkey.png" alt="" class="language-flag">
        <span class="language-name">Türkçe</span>
    </a>
</li>
</ul>
</div>
</li>
</ul><!-- .nav -->
</div>
<div class="mt-3">
<p>&copy; 2021 DashLite. All Rights Reserved.</p>
</div>
</div><!-- .nk-block -->
</div><!-- .nk-split-content -->
<div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
<div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
<div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
<div class="slider-item">
<div class="nk-feature nk-feature-center">
<div class="nk-feature-img">
<img class="round" src="assets/images/slides/promo-a.png" srcset="assets/images/slides/promo-a2x.png 2x" alt="">
</div>
<div class="nk-feature-content py-4 p-sm-5">
<h4>Dashlite</h4>
<p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
</div>
</div>
</div><!-- .slider-item -->
<div class="slider-item">
<div class="nk-feature nk-feature-center">
<div class="nk-feature-img">
<img class="round" src="assets/images/slides/promo-b.png" srcset="assets/images/slides/promo-b2x.png 2x" alt="">
</div>
<div class="nk-feature-content py-4 p-sm-5">
<h4>Dashlite</h4>
<p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
</div>
</div>
</div><!-- .slider-item -->
<div class="slider-item">
<div class="nk-feature nk-feature-center">
<div class="nk-feature-img">
<img class="round" src="assets/images/slides/promo-c.png" srcset="assets/images/slides/promo-c2x.png 2x" alt="">
</div>
<div class="nk-feature-content py-4 p-sm-5">
<h4>Dashlite</h4>
<p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
</div>
</div>
</div><!-- .slider-item -->
</div><!-- .slider-init -->
<div class="slider-dots"></div>
<div class="slider-arrows"></div>
</div><!-- .slider-wrap -->
</div><!-- .nk-split-content -->
</div><!-- .nk-split -->
</div>
<!-- wrap @e -->
</div>
<!-- content @e -->
</div>
<!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<!-- select region modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="region">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
<div class="modal-body modal-body-md">
<h5 class="title mb-4">Select Your Country</h5>
<div class="nk-country-region">
<ul class="country-list text-center gy-2">
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/arg.png" alt="" class="country-flag">
<span class="country-name">Argentina</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/aus.png" alt="" class="country-flag">
<span class="country-name">Australia</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/bangladesh.png" alt="" class="country-flag">
<span class="country-name">Bangladesh</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/canada.png" alt="" class="country-flag">
<span class="country-name">Canada <small>(English)</small></span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/china.png" alt="" class="country-flag">
<span class="country-name">Centrafricaine</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/china.png" alt="" class="country-flag">
<span class="country-name">China</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/french.png" alt="" class="country-flag">
<span class="country-name">France</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/germany.png" alt="" class="country-flag">
<span class="country-name">Germany</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/iran.png" alt="" class="country-flag">
<span class="country-name">Iran</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/italy.png" alt="" class="country-flag">
<span class="country-name">Italy</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/mexico.png" alt="" class="country-flag">
<span class="country-name">México</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/philipine.png" alt="" class="country-flag">
<span class="country-name">Philippines</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/portugal.png" alt="" class="country-flag">
<span class="country-name">Portugal</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/s-africa.png" alt="" class="country-flag">
<span class="country-name">South Africa</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/spanish.png" alt="" class="country-flag">
<span class="country-name">Spain</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/switzerland.png" alt="" class="country-flag">
<span class="country-name">Switzerland</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/uk.png" alt="" class="country-flag">
<span class="country-name">United Kingdom</span>
</a>
</li>
<li>
<a href="#" class="country-item">
<img src="assets/images/flags/english.png" alt="" class="country-flag">
<span class="country-name">United State</span>
</a>
</li>
</ul>
</div>
</div>
</div><!-- .modal-content -->
</div><!-- .modla-dialog -->
</div><!-- .modal -->

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