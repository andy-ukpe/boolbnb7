<!-- Header Start  -->
<header>
  <nav id="navigator_my" class="navbar navbar-expand-md navbar-dark my_nav_color">
    <!-- Navbar left-side -->
    <div class="container-fluid">
      <a href="{{ route('index') }}" class="navbar-brand mr-3">7BnB</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar right-side -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ml-auto">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('search') }}">Ricerca</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->firstname }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.apartments.index') }}">
                                La tua bacheca
                            </a>
                            <a class="dropdown-item" href="{{ route('admin.apartments.create') }}">
                                Inserisci appartamento
                            </a>
                            <a class="dropdown-item" href="{{ route('admin.message') }}">
                                I tuoi messaggi
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

          {{-- <a href="#" class="nav-item nav-link">Register</a>
          <a href="#" class="nav-item nav-link">Login</a> --}}
          <a href="#" class="nav-item nav-link d-none d-block d-sm-block d-md-none">
            <input class="form-control mr-sm-2" type="text" placeholder="Dove andiamo?" aria-label="Dove andiamo?">
            <button class="btn btn-warning" type="submit">Go!</button>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- STICKY Return button -->
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
</header>
<!-- Header End -->