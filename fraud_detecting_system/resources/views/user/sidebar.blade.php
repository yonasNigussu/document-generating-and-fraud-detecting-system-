<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon">
          <img src="{{asset('registrar/img/logo/logo2.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">Alumni</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="/home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      
      <li class="nav-item">
        <a class="nav-link" href="{{url('service_list')}}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Almuni service</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/trauck_requiest',['id' => auth()->user()->id])}}">
          <i class="fas fa-fw fa-columns"></i>
          <span>Trauck requiest</span>
        </a>
      </li>
       
      
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->