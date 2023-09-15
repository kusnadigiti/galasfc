<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/dashboard') }}" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Uduk Apps</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        @if(Auth::check())
              <span class="hidden-xs">{{ Auth::user()->email}}</span>
              @endif
        </div>

      </div>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('dashboard')}}" class="nav-link">
                  <i class="fas fa-home nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>

               
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.index')}}" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('pelanggan.index')}}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('barang.index')}}"class="nav-link">
                  <i class="nav-icon fas fa-box"></i>
                  <p>Barang</p>
                </a>
              </li>


            </ul>
          </li>



<!-- menu transaksi -->
<li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-money-bill-alt"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('penjualan.index')}}" class="nav-link">
                  <i class="fas fa-industry nav-icon"></i>
                  <p>Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Penjualan Detail</p>
                </a>
              </li>
              
            </ul>
          </li>


<!-- menu transaksi -->
<li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-file"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('reportuser.index')}}" class="nav-link">
                  <i class="nav-icon far fa-file"></i>
                  <i class="far fa-user nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <i class="fas fa-users nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('reportbarang.index')}}" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <i class="fas fa-calendar-check nav-icon"></i>
                 <p>Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <i class="nav-icon far fa-money-bill-alt"></i>
                  <p>Transaksi</p>
                </a>
              </li>




              
            </ul>
          </li>

    </div>
    <!-- /.sidebar -->
  </aside>