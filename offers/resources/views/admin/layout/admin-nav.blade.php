
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
      <!-- Notifications Dropdown Menu -->
     
    
    </ul>
  </nav>
  <!-- /.navbar -->
<section id="aside">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
       <div id="nav">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('/admin/dash')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="/admin/propcat" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Property Categories
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/table')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Properties
              </p>
            </a>
          </li>

        
          <li class="nav-item">
            <a href="/admin/buscat" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Business Categories
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/business')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                
                Business
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/offers')}}" class="nav-link">
              <i class="nav-icon fas fa-gift"></i>
              <p>
                Offers
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{url('/admin/slider')}}" class="nav-link">
<i class="nav-icon fas fa-image">        </i>      <p>
               slider
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/contact" class="nav-link">
            <i class="fa fa-phone" aria-hidden="true"></i>     <p>
               Contact
              </p>
            </a>
          </li>
        
        
        </ul></div>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</section>