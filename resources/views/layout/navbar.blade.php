<header id="header" class="clearfix">

    <nav class="navbar navbar-default navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tr-mainmenu"
                aria-controls="tr-mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><span>Migration Sale</span></a>
            <div class="collapse navbar-collapse" id="tr-mainmenu">
                <ul class="lang-btn">
                    <li class="active"><a href="">සිංහල</a></li>
                    <li><a href="">தமிழ்</a></li>
                    <li><a href="">English</a></li>
                </ul>
                {{-- <ul class="nav navbar-nav">
                        <li class="active dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">  English <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="index.html">සිංහල</a></li>
                                <li><a href="index-one.html">தமிழ்</a></li>
                                <li><a href="index-two.html">English</a></li>
                            </ul>
                        </li>
                       
                    </ul> --}}
            </div>
            <div class="nav-right">


                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    {{ __('profile') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('ads.myads') }}">
                                    {{ __('My Ads') }}
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
                        <li></li>
                    @endguest
                </ul>

            </div>
            <div>
                <a href="{{ route('ads.register') }}" class="btn">Post Your Ad</a>
            </div>
        </div>
    </nav>
</header>
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="index.html" class="navbar-brand logo">
                    <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.html" class="menu-logo">
                        <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu active">
                        <a href="index.html">Home <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu mega-submenu">
                            <li>
                                <div class="megamenu-wrapper">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="single-demo active">
                                                <div class="demo-img">
                                                    <a href="index.html"><img src="assets/img/home-01.jpg"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index.html">Classified Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="index-2.html"><img src="assets/img/home-02.jpg"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index-2.html">Wedding Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="index-3.html"><img src="assets/img/home-03.jpg"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index-3.html">Tour Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="index-4.html"><img src="assets/img/home-04.jpg"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index-4.html">Workspace Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="index-5.html"><img src="assets/img/home-05.jpg"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index-5.html">Business Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="index-6.html"><img src="assets/img/home-06.jpg"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index-6.html">Car Rentals Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="index-7.html"><img src="assets/img/home-07.jpg"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index-7.html">Restaurant Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="index-8.html"><img src="assets/img/home-08.jpg"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index-8.html">Job Listing Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo">
                                                <div class="demo-img">
                                                    <a href="index-9.html"><img src="assets/img/home-09.jpg"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="index-9.html">Realestate Home</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-reg" href="signup.html">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-login" href="login.html"> Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link add-listing" href="add-listing.html"><i class="fa-solid fa-plus"></i>Add
                        Listing</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
