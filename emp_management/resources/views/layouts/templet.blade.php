<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title> Human Resource Management </title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <!--//tags -->
    <link href="{{ url('Assest/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ url('Assest/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />

    <link href="{{ url('Assest/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
    <link
        href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
        rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- header -->
    <div class="header" id="home">
        <div class="content white agile-info">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <h1><span class="fa fa-signal" aria-hidden="true"></span> EMPLOYEE <label>MANAGEMENT</label>
                            </h1>
                        </a>
                    </div>
                    <!--/.navbar-header-->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <nav class="link-effect-2" id="link-effect-2">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/" class="effect-3">Home page</a></li>
                                <li><a href="about" class="effect-3">About us</a></li>
                                <li><a href="contact" class="effect-3">Contact us</a></li>
                                <li><a href="gallery" class="effect-3">Gallery</a></li>
                                @guest
                                    @if (Route::has('login'))
                                        <li><a href="{{ route('login') }}" class="effect-3">{{ __('Login') }}</a></li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}" class="effect-3">{{ __('Register') }}</a></li>
                                    @endif
                                @else
                                    <li class="dropdown">
                                        <a href="services.html" class="dropdown-toggle effect-3"
                                            data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </li>

                                        </ul>
                                    </li>
                                @endguest


                            </ul>
                        </nav>
                    </div>
                    <!--/.navbar-collapse-->
                    <!--/.navbar-->
                </div>
            </nav>
        </div>
    </div>

    @yield('main')


    <!-- footer -->
    <div class="footer_top_agileits">
        <div class="container">
            <div class="col-md-4 footer_grid">
                <h3>About Us</h3>
                <p>Nam libero tempore cum vulputate id est id, pretium semper enim. Morbi viverra congue nisi vel
                    pulvinar posuere sapien
                    eros.
                </p>
            </div>
            <div class="col-md-4 footer_grid">
                <h3>Latest News</h3>
                <ul class="footer_grid_list">
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <a href="single.html">Lorem ipsum neque vulputate </a>
                    </li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <a href="single.html">Dolor amet sed quam vitae</a>
                    </li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <a href="single.html">Lorem ipsum neque, vulputate </a>
                    </li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <a href="single.html">Dolor amet sed quam vitae</a>
                    </li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <a href="single.html">Lorem ipsum neque, vulputate </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 footer_grid">
                <h3>Contact Info</h3>
                <ul class="address">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>thaltej ,ahemedabad 380054. <span>ahemedabd city.</span></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a
                            href="mailto:info@example.com">info@example.com</a></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+09187 8088 9436</li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <div class="footer_grids">
                <div class="col-md-4 footer_grid_left">
                    <h3>Sign up for our Newsletter</h3>
                </div>
                <div class="col-md-8 footer_grid_right">

                    <form action="#" method="post">
                        <input type="email" name="Email" placeholder="Enter Email Address..." required="">
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="footer_w3ls">
        <div class="container">
            <div class="footer_bottom">
                <div class="col-md-9 footer_bottom_grid">
                    <div class="footer_bottom1">
                        <a href="index.html">
                            <h2><span class="fa fa-signal" aria-hidden="true"></span> Soft <label>Hr Agency</label>
                            </h2>
                        </a>
                        <p>© 2017 Soft. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 footer_bottom_grid">
                    <h6>Follow Us</h6>
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <!-- //footer -->

    <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover"
            style="opacity: 1;"> </span></a>
    <!-- js -->
    <script type="text/javascript" src="{{ url('Assest/js/jquery-2.1.4.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('Assest/js/bootstrap.js') }}"></script>
</body>

</html>
