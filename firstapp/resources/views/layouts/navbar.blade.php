<div class="topnav" id="myTopnav">
   

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript::void(0)">Ceylon Linux</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          @auth
            <li class="nav-item">
              <a class="nav-link @if (isset($page) && $page == 'home') active  @endif" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if (isset($page) && $page == 'zone') active  @endif" aria-current="page" href="{{ route('zones.index') }}">Zone</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link @if (isset($page) && $page == 'region') active  @endif" aria-current="page" href="{{ route('regions.index') }}"> Region</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link @if (isset($page) && $page == 'territory') active  @endif" aria-current="page" href="{{ route('territorys.index') }}"> Territory</a>
            </li> 

            <li class="nav-item">
              <a class="nav-link @if (isset($page) && $page == 'sku') active  @endif" aria-current="page" href="{{ route('sku') }}">Add SKU</a>
            </li>
            
          @endauth
        </ul>
      </div>
      @guest
      <form class="d-flex">
        <a class="btn btn-outline-light mx-1" href="{{ route('login') }}">Login</a>
        <a class="btn btn-outline-light mx-1" href="{{ route('register') }}">Register</a>
      </form>
      @endguest
      @auth
      <form id="logout-form" class="d-flex" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
          <button class="btn btn-outline-light mx-1" type="submit" href="{{ route('register') }}">logout</button>
      </form>
      
      @endauth
    </div>
  </nav>


      {{-- @if (Route::has('login'))
        <a href="{{ route('login') }}">{{ __('Login') }}</a>
      @endif

      @if (Route::has('register'))
        <a href="{{ route('register') }}">{{ __('Register') }}</a>
      @endif
      

      <a href="{{ route('home') }}"  class="@if ($page == 'home') active  @endif">Home</a>
      <a href="{{ route('order') }}" class="@if ($page == 'order') active @endif">Order</a>

   
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a> --}}
</div>