

<body class="nk-body bg-lighter npc-general has-sidebar ">
<div class="nk-app-root">
<!-- main @s -->
<div class="nk-main ">
<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
<div class="nk-sidebar-element nk-sidebar-head">
<div class="nk-menu-trigger">
<a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
<a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
</div>
<div class="nk-sidebar-brand">
	<h6 style="color: white;">Accounting Software</h6>
<!-- <a href="html/index.html" class="logo-link nk-sidebar-logo">
<img class="logo-light logo-img" src="images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
<img class="logo-dark logo-img" src="images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
</a> -->
</div>
</div><!-- .nk-sidebar-element -->
<div class="nk-sidebar-element nk-sidebar-body">
<div class="nk-sidebar-content">
<div class="nk-sidebar-menu" data-simplebar>
<ul class="nk-menu">
<!-- <li class="nk-menu-heading">
<h6 class="overline-title text-primary-alt">Dashboard</h6>
</li> --><!-- .nk-menu-item -->


<li class="nk-menu-item has-sub">
<a href="#" class="nk-menu-link nk-menu-toggle">
<span class="nk-menu-icon"><em class="fas fa-chart-line"></em></span>
<span class="nk-menu-text">Dashboard</span>
</a>
<ul class="nk-menu-sub">
<li class="nk-menu-item">
<a href="{{route('dasboard')}}" class="nk-menu-link"><span class="nk-menu-text">Dashboard</span></a>
</li>
</ul><!-- .nk-menu-sub -->
</li><!-- .nk-menu-item -->


<li class="nk-menu-item has-sub">
<a href="#" class="nk-menu-link nk-menu-toggle">
<span class="nk-menu-icon"><em class="fas fa-user-cog"></em></span>
<span class="nk-menu-text">User Setup</span>
</a>
<ul class="nk-menu-sub">
<li class="nk-menu-item">
<a href="us" class="nk-menu-link"><span class="nk-menu-text">Add User</span></a>
</li>
</ul><!-- .nk-menu-sub -->
</li><!-- .nk-menu-item -->


<li class="nk-menu-item has-sub">
<a href="#" class="nk-menu-link nk-menu-toggle">
<span class="nk-menu-icon"><em class="fas fa-tools"></em></span>
<span class="nk-menu-text">Initial Setup</span>
</a>
<ul class="nk-menu-sub">
<li class="nk-menu-item">
<a href="country" class="nk-menu-link"><span class="nk-menu-text">Add Country</span></a>
</li>
<li class="nk-menu-item">
<a href="business" class="nk-menu-link"><span class="nk-menu-text">Add Business Type</span></a>
</li>
<li class="nk-menu-item">
<a href="companytype" class="nk-menu-link"><span class="nk-menu-text">Add Company Type</span></a>
</li>
</ul><!-- .nk-menu-sub -->
</li><!-- .nk-menu-item -->


<li class="nk-menu-item has-sub">
<a href="#" class="nk-menu-link nk-menu-toggle">
<span class="nk-menu-icon"><em class="fas fa-sitemap"></em></span>
<span class="nk-menu-text">Company Setting</span>
</a>
<ul class="nk-menu-sub">
<li class="nk-menu-item">
<a href="ac" class="nk-menu-link"><span class="nk-menu-text">Company Information</span></a>
</li>
</ul><!-- .nk-menu-sub -->
</li><!-- .nk-menu-item -->


<li class="nk-menu-item has-sub">
<a href="#" class="nk-menu-link nk-menu-toggle">
<span class="nk-menu-icon"><em class="fas fa-dollar-sign"></em></span>
<span class="nk-menu-text">Ledger Setup</span>
</a>
<ul class="nk-menu-sub">
<li class="nk-menu-item">
<a href="grouptype" class="nk-menu-link"><span class="nk-menu-text">Add Group</span></a>
</li>
<li class="nk-menu-item">
<a href="ledgergroup" class="nk-menu-link"><span class="nk-menu-text">Ledger Group</span></a>
</li>
<li class="nk-menu-item">
<a href="lsg" class="nk-menu-link"><span class="nk-menu-text">Ledger Sub Group</span></a>
</li>
<li class="nk-menu-item">
<a href="lph" class="nk-menu-link"><span class="nk-menu-text">Ledger Posting</span></a>
</li>
</ul><!-- .nk-menu-sub -->
</li><!-- .nk-menu-item -->


<li class="nk-menu-item has-sub">
<a href="#" class="nk-menu-link nk-menu-toggle">
<span class="nk-menu-icon"><em  class="fas fa-balance-scale-right"></em></span>
<span class="nk-menu-text">Budget Option</span>
</a>
<ul class="nk-menu-sub">
<li class="nk-menu-item">
<a href="bg" class="nk-menu-link"><span class="nk-menu-text">Budgets</span></a>
</li>
</ul><!-- .nk-menu-sub -->
</li><!-- .nk-menu-item -->


<li class="nk-menu-item has-sub">
<a href="#" class="nk-menu-link nk-menu-toggle">
<span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
<span class="nk-menu-text">Voucher</span>
</a>
<ul class="nk-menu-sub">
<!-- <li class="nk-menu-item">
<a href="html/transaction-basic.html" class="nk-menu-link"><span class="nk-menu-text">Voucher Type</span></a>
</li> -->
<li class="nk-menu-item">
<a href="vcl" class="nk-menu-link"><span class="nk-menu-text">Voucher List</span></a>
</li>
<!-- <li class="nk-menu-item">
<a href="html/transaction-crypto.html" class="nk-menu-link"><span class="nk-menu-text">Voucher List</span></a>
</li> -->
</ul><!-- .nk-menu-sub -->
</li><!-- .nk-menu-item -->

<li class="nk-menu-item has-sub">
<a href="#" class="nk-menu-link nk-menu-toggle">
<span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
<span class="nk-menu-text">Reports</span>
</a>
<ul class="nk-menu-sub">
	
<!-- <li class="nk-menu-item">
<a href="dr" class="nk-menu-link"><span class="nk-menu-text">Date Wise Reports</span></a>
</li> -->

<!-- <li class="nk-menu-item">
<a href="html/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Account Wise Balance</span></a>
</li> -->

<li class="nk-menu-item">
<a href="tb" class="nk-menu-link"><span class="nk-menu-text">Trial Balance</span></a>
</li>

<!-- <li class="nk-menu-item">
<a href="html/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Earn Spend Report</span></a>
</li> -->

<!-- <li class="nk-menu-item">
<a href="html/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Balance Sheet</span></a>
</li> -->

</ul><!-- .nk-menu-sub -->
</li><!-- .nk-menu-item -->


<!-- <li class="nk-menu-item has-sub">
<a href="#" class="nk-menu-link nk-menu-toggle">
<span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
<span class="nk-menu-text">Logs</span>
</a>
<ul class="nk-menu-sub">
<li class="nk-menu-item">
<a href="html/user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">Login Information</span></a>
</li>
</ul> -->
<!-- .nk-menu-sub -->
<!-- </li> -->
<!-- .nk-menu-item -->


</ul><!-- .nk-menu -->
</div><!-- .nk-sidebar-menu -->
</div><!-- .nk-sidebar-content -->
</div><!-- .nk-sidebar-element -->
</div>