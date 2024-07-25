<header id="header" class="clearfix">

    <nav class="navbar navbar-default navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tr-mainmenu"
                aria-controls="tr-mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><span>Migration Sale</span></a>
            <div class="collapse navbar-collapse" id="tr-mainmenu">
                
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
