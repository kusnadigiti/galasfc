<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
  
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user"></i>        
            @if(Auth::check())
              <span class="hidden-xs">{{ Auth::user()->name}}</span>
              @endif
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>  @if(Auth::check())
              <span class="hidden-xs">{{ Auth::user()->email}}</span>
              @endif
          </a>
         
          <div class="dropdown-divider"></div>
          <form align="center" action="{{ route('logout') }}" method="post">
                   @csrf
          <button type="submit" class="btn btn-block btn-danger btn-xs">Logout</button>
          </form>
        </div>
      </li>
    
     
    </ul>
  </nav>