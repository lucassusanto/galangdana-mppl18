<!-- header start -->
    <!-- ================ --> 
    <!--header class="header fixed clearfix navbar navbar-fixed-top"-->
        <header class="header fixed clearfix navbar navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <!-- header-left start -->
                    <!-- ================ -->
                    <div class="header-left clearfix">

                        <!-- logo -->
                        <div class="logo smooth-scroll">
                            <a href="{{ url('/') }}"><img id="logo" src="{{ asset('images/gd.png') }}" alt="Worthy"></a>
                        </div>

                        <!-- name-and-slogan -->
                        <div class="site-name-and-slogan smooth-scroll">
                            <div class="site-name"><a href="{{ url('/') }}">GalangDana</a></div>
                            <div class="site-slogan">Peduli sesama!</div>
                        </div>

                    </div>
                    <!-- header-left end -->

                </div>
                <div class="col-md-8">

                    <!-- header-right start -->
                    <!-- ================ -->
                    <div class="header-right clearfix">

                        <!-- main-navigation start -->
                        <!-- ================ -->
                        <div class="main-navigation animated">

                            <!-- navbar start -->
                            <!-- ================ -->
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="container-fluid">

                                    <!-- Toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">


                                            

                                            <li><a href="{{ url('/termgalang') }}">Galang Dana</a></li>
                                            <li><a href="{{ url('/donasi') }}">Donasi</a></li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                    <span class="glyphicon glyphicon-menu-hamburger"></span>
                                                </a>
                                                <ul class="dropdown-menu" style="width: 300px; padding: 10px">
                                                    @if(!Auth::check())
                                                    <li><a href="{{ url('/register') }}">Daftar</a></li>
                                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                                    @else
                                                    <li style="color: black;"> {{ Auth::user()['name'] }} </li>
                                                    <li style="color: black; opacity: 0.5;"> {{ Auth::user()['email'] }} </li>
                                                    <li>
                                                        @if(Auth::user()['foto_user'] == NULL)
                                                        <img src="{{ asset('images/profile_default.jpg') }}" width="80px" height="120px" style="margin: 20px auto" class="avatar img-circle" alt="avatar"/>
                                                        @else
                                                        <?php 
                                                            $content = Auth::user()['foto_user'];
                                                            echo '<img src="data:image/jpeg;base64,'.base64_encode($content).'"';
                                                            echo 'width="160px" height="240px" style="margin: 20px auto" class="avatar img-circle" alt="avatar"/>';
                                                        ?>
                                                        @endif
                                                    </li>
                                                    @if(Auth::user()->tipe_user == 2)
                                                    <li style="border-top: 1px solid black"><a href="{{ url('/admin') }}">Admin</a></li>
                                                    <li><a href="{{ url('/user/'.Auth::user()->id.'/profil') }}">Profil</a></li>
                                                    @else
                                                    <li style="border-top: 1px solid black"><a href="{{ url('/user/'.Auth::user()->id.'/profil') }}">Profil</a></li>
                                                    @endif
                                                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                                                    @endif
                                              </ul>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </nav>
                            <!-- navbar end -->

                        </div>
                        <!-- main-navigation end -->

                    </div>
                    <!-- header-right end -->

                </div>
            </div>
        </div>
    </header>
    <!-- header end -->