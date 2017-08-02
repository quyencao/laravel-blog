<!DOCTYPE html>
<html>
<head>
    <title>ColorMag</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/font.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('css/structure.css') }}">
    <!--[if lt IE 9]>
    <script src="{{ url('js/html5shiv.min.js') }}"></script>
    <script src="{{ url('js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<header id="header">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="{{ route('blog.post.index') }}"><span>Color</span>Mag</a> </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav custom_nav">
                        <li class=""><a href="{{ route('blog.post.index') }}">Home</a></li>
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <form id="searchForm">
            <input type="text" placeholder="Search...">
            <input type="submit" value="">
        </form>
    </div>
</header>
<section id="contentbody">
    <div class="container">
        <div class="row">
            <div class=" col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="leftbar_content">
                        @yield('leftbar_content')
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 col-lg-2">
                <div class="row">
                    <div class="middlebar_content">
                        <h2 class="yellow_bg">What's Hot</h2>
                        <div class="middlebar_content_inner wow fadeInUp">
                            <ul class="middlebar_nav">
                                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img2.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                            </ul>
                        </div>
                        <div class="popular_categori  wow fadeInUp">
                            <h2 class="limeblue_bg">Most Popular Categories</h2>
                            @yield('categories')
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="row">
                    <div class="rightbar_content">
                        <div class="single_blog_sidebar wow fadeInUp">
                            <h2>The Featured Stuff</h2>
                            <ul class="featured_nav">
                                <li> <a class="featured_img" href="#"><img src="images/featured_img1.jpg" alt=""></a>
                                    <div class="featured_title"> <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a> </div>
                                </li>
                                <li> <a class="featured_img" href="#"><img src="images/featured_img1.jpg" alt=""></a>
                                    <div class="featured_title"> <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a> </div>
                                </li>
                                <li> <a class="featured_img" href="#"><img src="images/featured_img1.jpg" alt=""></a>
                                    <div class="featured_title"> <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a> </div>
                                </li>
                            </ul>
                        </div>
                        <div class="single_blog_sidebar wow fadeInUp">
                            <h2>Popular Posts</h2>
                            <ul class="middlebar_nav wow">
                                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img2.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                            </ul>
                        </div>
                        <div class="single_blog_sidebar wow fadeInUp">
                            <h2>Popular Tags</h2>
                            @yield('tags')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer_inner">
                    <p class="pull-left">Copyright &copy; 2014 ColorMag</p>
                    <p class="pull-right">Developed By WpFreeware</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/wow.min.js') }}"></script>
<script src="{{ url('js/custom.js') }}"></script>
</body>
</html>