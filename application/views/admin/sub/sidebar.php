<body id="page-top">
  <div id="wrapper">
  <!-- Embed =========================== -->

  <?php  
    $nama = $this->session->userdata('nama');
    $akses = $this->session->userdata('akses');
  ?>
  
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">NotoAturan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active" style="margin-left: 10px">
        <a class="nav-link">
          <i class="fas fa-user"></i>
            <span>
              <?= $nama; ?>
            </span>
        </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
       <div class="sidebar-heading">
        Admin
      </div> 
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('AdminController'); ?>">
          <i class="fas fa-home"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('AdminController/pesanan'); ?>">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Pemesanan</span></a>
      </li>
      <?php if($akses=='admin'){ ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Manajemen user</span>
        </a>
        <div id="collapse2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub menu :</h6>
            <a class="collapse-item" href="<?= base_url('AdminController/lawyer'); ?>">Lawyer/Advokat</a>
            <a class="collapse-item" href="<?= base_url('AdminController/notaris'); ?>">Notaris</a>
            <a class="collapse-item" href="<?= base_url('AdminController/client'); ?>">Client</a>
          </div>
        </div>
      </li>
      <?php } ?>
      
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->
    <!-- Embed =========================== -->
    <div id="content-wrapper" class="d-flex flex-column">
  <div id="content">