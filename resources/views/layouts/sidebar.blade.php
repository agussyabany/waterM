<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{asset('/img/logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-info">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/img/logo.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Dashboard
                <span class="right badge badge-danger"></span>
              </p>
            </a>
        </li>
          
          
          
          <li class="nav-header">MASTER</li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="fas fa-box-open"></i>
              <p>
                Data User
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="fas fa-boxes"></i>
              <p>
                Data Logger
                <span class="badge badge-danger right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="far fa-address-card"></i>
              <p>
                Sub Menu 1
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="fas fa-truck-moving"></i>
              <p>
                Sub Menu 2
              </p>
            </a>
          </li>

          <li class="nav-header">MENU 2</li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="far fa-money-bill-alt"></i>
              <p>
                Submenu 3
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="fas fa-download"></i>
              <p>
              Submenu 4
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="fas fa-upload"></i>
              <p>
              Submenu 5
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="fas fa-cart-plus"></i>
              <p>
              Submenu 6
              </p>
            </a>
          </li>

          <li class="nav-header">MENU 3</li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="far fa-sticky-note"></i>
              <p>
              Submenu 7
                
              </p>
            </a>
          </li>
          
          

          <li class="nav-header">PENGATURAN</li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="far fa-user"></i>
              <p>
                User
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="fas fa-cogs"></i>
              <p>
                Setting
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
         
          
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>