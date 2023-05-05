<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SanurCycle</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.tour.index') }}">
            <i class="fas fa-fw fa-person-biking"></i>
            <span>Tours</span>
        </a>
        <a class="nav-link" href="{{ route('admin.bicycle.index') }}">
            <i class="fas fa-fw fa-bicycle"></i>
            <span>Bicycle</span>
        </a>
        <a class="nav-link" href="{{ route('admin.gallery.index') }}">
            <i class="fas fa-fw fa-image"></i>
            <span>Gallery</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
