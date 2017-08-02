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
                @yield('content')
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