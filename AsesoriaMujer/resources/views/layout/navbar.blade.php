<nav class="top-nav purple">
  <a href="#" class="button-collapse top-nav full hide-on-large" data-activates="nav-mobile">
    <i class="material-icons">menu</i>
  </a>
  <div class="container">
    <div class="nav-wrapper">
      <a href="{{url('')}}" class="brand-logo right" style="width: 30px">
        <img src="{{asset('img/logo.png')}}" class="responsive-img" alt="">
      </a>
      <a class="page-title" style="text-transform: uppercase;font-weight: bold;">
        @yield('title')
      </a>
    </div>
  </div>
  @include('layout.sidebar')
</nav>
