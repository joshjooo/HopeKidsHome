

<nav class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow" style="background-color:#120a78;">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><img width="30%" height="30%" src=" {{asset('images/logo1.png')}}"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
 
  <ul class="pt-3  px-3 row">
     <li class="nav-item text-nowrap">
      <a class="nav-link"  href="#"><span class='text-white'>Hi {{auth()->user()->name}}</span></a>
    </li>
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="{{ route('logout.perform') }}"><span class='text-white'>Sign out</span></a>
    </li>
  </ul>
</nav>