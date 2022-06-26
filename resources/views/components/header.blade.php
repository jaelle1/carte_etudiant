<header class="topbar" data-navbarbg="skin5">
    <div id="app">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin6">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="dashboard.html">
                    <!-- Logo icon -->
                    <b class="logo-icon">

                        <img src="{{asset('IMAGES/esi.jpg')}}" alt="logo de esi" class="logoesi" width="60" />

                    </b>
                    <span class="text-dark text-center ms-4 fs-5 fw-bold">
                        ESI/UNB
                    </span>
                    <!--End Logo icon -->
                    <!-- Logo text -->

                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->

                <ul class="navbar-nav ms-auto d-flex align-items-center">
                    <li class=" in">
                        <form role="search" class="app-search d-none d-md-block me-3">
                            <input type="text" placeholder="Search..." class="form-control mt-0">
                            <a href="" class="active">
                                <i class="fa fa-search"></i>
                            </a>
                        </form>
                    </li>
                    <!-- Authentication Links -->


                    
                    <li class="nav-item dropdown">
                       
                        <a class="dropdown-item bg-danger rounded text-light fw-bold " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            {{ __('DECONNEXION') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <!-- </div> -->
                    </li>
                  
                </ul>
            </div>
        </nav>
    </div>
</header>