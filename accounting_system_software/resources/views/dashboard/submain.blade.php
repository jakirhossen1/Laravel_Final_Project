<!-- wrap @s -->
<div class="nk-wrap ">
<!-- main header @s -->
<div class="nk-header nk-header-fixed is-light">
<div class="container-fluid">
<div class="nk-header-wrap">
<div class="nk-menu-trigger d-xl-none ml-n1">
<a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
</div>
<div class="nk-header-brand d-xl-none">
<a href="html/index.html" class="logo-link">
<img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
<img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
</a>
</div>
<div class="nk-header-tools">
<ul class="nk-quick-nav">
<li class="dropdown user-dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<div class="user-toggle">
<div class="user-avatar sm">
    <img src="{{Session::get('sess_picture')}}" class="img-thumbnail" />
</div>
<div class="user-info d-none d-md-block">
    <!-- <div class="user-status">{{Session::get('sess_name')}}</div> -->
    <div class="user-name dropdown-indicator">{{Session::get('sess_name')}}</div>
</div>
</div>
</a>
<div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
<div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
<div class="user-card">
    <div class="user-avatar">
        <span><img src="{{Session::get('sess_picture')}}" class="img-thumbnail" /></span>
    </div>
    <div class="user-info">
        <span class="lead-text">{{Session::get('sess_name')}}</span>
        <span class="sub-text">{{Session::get('sess_email')}}</span>
    </div>
</div>
</div>
<div class="dropdown-inner">
<ul class="link-list">
    <!-- <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li> -->
    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
</ul>
</div>
<div class="dropdown-inner">
<ul class="link-list">
    <li><a href="lout"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
</ul>
</div>
</div>
</li><!-- .dropdown -->
<!-- .dropdown -->
</ul><!-- .nk-quick-nav -->
</div><!-- .nk-header-tools -->
</div><!-- .nk-header-wrap -->
</div><!-- .container-fliud -->
</div>
<!-- main header @e -->