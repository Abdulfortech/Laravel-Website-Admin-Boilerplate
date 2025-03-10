<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{route('dashboard')}}" target="_blank">
        <!-- <img src="../assets/images/logo.jpg" class="navbar-brand-img" style="width: 50px; height:70px" alt="main_logo"> -->
        <!-- <span class="ms-1 font-weight-bold fw-bold">BAMS</span> -->
        <h3 class="fw-bolder text-center">KAID</h3>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'index') ? 'active' : ''; ?>" href="{{route('dashboard')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'admins') ? 'active' : ''; ?>" href="{{route('admins')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-users text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Admins</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'volunteers') ? 'active' : ''; ?>" href="{{route('volunteers')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-users text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Volunteers</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'sponsors') ? 'active' : ''; ?>" href="{{route('sponsors')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-users text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Sponsors</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'projects') ? 'active' : ''; ?>" href="{{route('projects')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Projects</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'donations') ? 'active' : ''; ?>" href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-piggy-bank text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Donations</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'Testimonials') ? 'active' : ''; ?>" href="{{route('testimonials')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-comments text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Testimonials</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'blog') ? 'active' : ''; ?>" href="{{route('blogs')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-newspaper text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Blog</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page == 'gallery') ? 'active' : ''; ?>" href="{{route('gallery')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-image text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Gallery</span>
          </a>
        </li>

      </ul>
    </div>
</aside>
