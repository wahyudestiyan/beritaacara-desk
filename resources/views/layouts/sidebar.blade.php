<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class=""></i>
    </div>
    <div class="sidebar-brand-text mx-3">{{ auth()->user()->name }}</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <li class=""><center>{{ auth()->user()->role }}</center></li>
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('ba') }}">
      <i class="fas fa-book"></i>
      <span>Berita Acara</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('instansi') }}">
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