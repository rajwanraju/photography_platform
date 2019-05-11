<header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
                <div class="logo text-center">
                    <h1 class="logo">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <span class="sub"></span>Shoot</a>
                    </h1>
                </div>
                <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link ml-lg-0" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#services">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item text-center scroll" href="#team">Team</a>
                                <a class="dropdown-item text-center scroll" href="#gallery">Photo Gallery</a>
                                <a class="dropdown-item text-center scroll" href="#testimonials">Testimonials</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contact">Contact</a>
                        </li>
                        <li class="search">
                            <a class="play-icon popup-with-zoom-anim" href="#small-dialog">
                                <i class="fas fa-search"></i>
                            </a>
                            <div id="small-dialog" class="mfp-hide">
                                <div class="search-top">
                                    <div class="search-inn">
                                        <form action="#" method="post" class="disply-flex">
                                            <input class="form-control" type="search" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                                            <button class="btn2">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <p>Shoot</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="phone-inline my-2 my-lg-0">

                       <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    @role('admin')
                      
                                <a class="nav-link" href="{{url('/adminPage')}}">{{ __('Dashboard') }}</a>
                            
                                    @endrole

                                     @role('photographer')
                      
                                <a class="nav-link" href="{{url('/photographerPage')}}">{{ __('Dashboard') }}</a>
                            
                                    @endrole

                                     @role('general-user')
                      
                                <a class="nav-link" href="{{url('/myDashboard')}}">{{ __('Dashboard') }}</a>
                            
                                    @endrole

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

            </nav>
        </header>