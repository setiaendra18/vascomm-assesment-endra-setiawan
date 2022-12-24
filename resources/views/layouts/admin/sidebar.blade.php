<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">JUALIN</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Produtcs</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('customer_index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Customer</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{'/logout' }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Logout</span></a>
    </li>
</ul>
<!-- End of Sidebar -->