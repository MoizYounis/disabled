    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="assets/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <div class="preloader">
        <div class="preloader-logo"><a class="brand" href="index.html"><img class="brand-logo-dark"
                    src="assets/images/pwb-hub.png" alt="" width="245" height="50" /><img class="brand-logo-light"
                    src="assets/images/pwb-hub.png" alt="" width="245" height="50" /></a>
        </div>
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
        </div>
    </div>
    <div class="page animated" style="animation-duration: 500ms">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                    data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main" style="padding: 0px 0;">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand"><a href="index.html"><img class="brand-logo-light"
                                            src="assets/images/pwb-hub.png" alt="" width="207" height="51" /></a></div>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item active"><a class="rd-nav-link"
                                                href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link"
                                                href="{{ route('about') }}">About
                                                Us</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link"
                                                href="{{ route('blog') }}">Blogs</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link"
                                                href="{{ route('contact') }}">Contacts</a>
                                        </li>
                                        {{-- <li class="rd-nav-item"><a class="rd-nav-link"
                                            href="{{ route('register') }}">Register Now</a>
                                         </li> --}}
                                    </ul>
                                </div>
                            </div>{{-- <a class="button button-primary button-sm" href="#">Donate</a> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle button-primary" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" style="background: transparent">
                                        @if (Session::has('user_auth'))
                                        {{ Session::get('user_auth')['name'] }}
                                        @endif
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @if (!Session::has('user_auth'))
                                        <a class="dropdown-item hello" href="{{ route('login') }}">Login As
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-primary">Admin</li>
                                                or
                                                <li class="list-group-item list-group-item-dark">Organization</li>
                                            </ul>
                                        </a>
                                        <a class="dropdown-item hello" href="{{ route('userLoginView') }}">Login As User</a>
                                        <a class="dropdown-item hello" href="{{ route('register') }}">Register</a>
                                        @endif
                                        @if (Session::has('user_auth'))
                                        <a class="dropdown-item hello" href="{{ route('profile') }}">Profile</a>
                                        <a class="dropdown-item" href="{{ route('userLogout') }}">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                        @endif
                                    </div>
                                </div>
                    </div>
            </div>
            </nav>
    </div>
    </header>
