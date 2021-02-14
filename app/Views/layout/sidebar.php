    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
          <i class="fas fa-book-open"></i>
        <div class="sidebar-brand-text mx-1">Perpustakaan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/myprofile">
          <i class="fas fa-fw fa-user-alt"></i>
          <span>My Profile</span></a>
      </li>

      <?php if( session()->get('role') <> 2 ): ?>
         <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Master Data
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsebuku" aria-expanded="true" aria-controls="collapsebuku">
          <i class="fas fa-fw fa-book"></i>
          <span>Data Buku</span>
        </a>
        <div id="collapsebuku" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/books">Data Buku</a>
            <a class="collapse-item" href="/byisbn">Data Judul Buku</a>
            <a class="collapse-item" href="/bylost">Data Buku Hilang</a>
            <a class="collapse-item" href="/byscrap">Data Buku Rusak</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/users">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Anggota</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/peminjaman">
          <i class="fas fa-fw fa-handshake"></i>
          <span>Data Peminjaman</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/pengembalian">
          <i class="fas fa-fw fa-exchange-alt"></i>
          <span>Data pengembalian</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/denda">
          <i class="fas fa-fw fa-money-bill-alt"></i>
          <span>Data Denda</span></a>
      </li>
      <?php endif; ?>
     
      <!-- jika admin -->
      <?php if( !session()->get('role') <> 0 ): ?>
        <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Admin
      </div>

      <li class="nav-item">
        <a class="nav-link" href="/staff">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Staff</span></a>
      </li>

      <?php endif; ?>
      

      <!-- Logout -->
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="/login/logout">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

     <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">
