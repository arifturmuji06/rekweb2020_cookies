<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-cookie-bite"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Cookies<sup>2</sup></div>
    </a>


    <?php if (in_groups('admin')) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Website Management
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>/user">
                <i class="fas fa-users"></i>
                <span>User List</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>/resep">
                <i class="fas fa-list"></i>
                <span>Resep List</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Management
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-user"></i>
            <span>My Profile</span></a>
    </li>

    <!-- Nav Item - Edit Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>/edit/<?= user()->id; ?>">
            <i class="fas fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li>

    <!-- Nav Item - List Resep -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>/resep">
            <i class="fas fa-list"></i>
            <span>My Recipe</span></a>
    </li>

    <!-- Nav Item - Buat Resep -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('recipe'); ?>/create">
            <i class="fas fa-plus"></i>
            <span>Create Recipe</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>