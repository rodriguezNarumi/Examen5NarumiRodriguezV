<header class="main-header">
    <!-- Logo -->
    <a href="{{ url ('Inicio') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b class="fa fa-book" style="font-size: 30px;"></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>LIBRERIA</b>-Narumi</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
  
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

            @if(auth()->user()->foto == "")
            
              <img src="{{ url('storage/defecto.png') }}" class="user-image" alt="User Image">
              @else

              <img src="{{ url('storage/'.auth()->user()->foto) }}" class="user-image" alt="User Image">
              @endif
              <span class="hidden-xs">{{auth()->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="height: 100px;">
              
                <p>
                {{auth()->user()->name}} - {{auth()->user()->rol}}
                  
                </p>
              </li>
            
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ url('Mis-Datos') }}" class="btn btn-primary btn-flat">Mis Datos</a>
                </div>
                <div class="pull-right">

                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  class="btn btn-danger btn-flat">Cerrar Sesion</a>
                </div>

                <form method="POST" id="logout-form" action="{{ route('logout') }}">

                @csrf
                </form>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>