<style>
  .nav-item.dropdown .nav-link {
    font-size: 14px; /* Atur ukuran teks yang diinginkan di sini */
}
</style>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class=""></i>
    </div>
    <div class="sidebar-brand-text mx-3"><?php echo e(auth()->user()->name); ?></div></a>
    <div class="text-xs font-weight-bold text-white text-uppercase mb-1"><center><?php echo e(auth()->user()->role); ?></center></div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-4">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('ba')); ?>">
      <i class="fas fa-book"></i>
      <span>Berita Acara</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('jenisba')); ?>">
      <i class="fas fa-building"></i>
      <span>Judul Berita Acara</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('instansi')); ?>">
      <i class="fas fa-building"></i>
      <span>Instansi</span></a>
  </li>
  

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>

<?php /**PATH C:\xampp\htdocs\beritaacara-desk\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>