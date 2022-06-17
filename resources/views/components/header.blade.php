 <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
<header class="topbar" >
             <nav class="navbar top-navbar navbar-expand-md shadow-sm">

                <div class="row">

                    <img src="{{ asset('IMAGES/esi.jpg') }}" alt="user-img" width="60"
                        class="img-circle col-md-1 offset-md-1 ">

                    <h2 class="fw-bold col-md-7 offset-md-2 "> Ecole Superieure Informatique</h2>

                    <!-- <img src="{{ asset('IMAGES/esi.jpg') }}" alt="user-img" width="50" class="img-circle col-md-1 offset-md-1"> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse col-md-1" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link bg-primary rounded text-light fw-bold me-1 "
                                    href="{{ route('login') }}">{{ __('CONNECTION') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link bg-success rounded text-light fw-bold"
                                    href="{{ route('register') }}">{{ __('INSCRIPTION') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item bg-danger rounded text-light fw-bold "
                                        href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('DECONNEXION') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>

    </div>
    </nav>
        </header>
