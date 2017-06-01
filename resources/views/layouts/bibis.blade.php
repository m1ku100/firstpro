<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('judul')</title>
    <meta name="description" content="company is a free job board template">
    <meta name="author" content="Ohidul">
    <meta name="keyword" content="html, css, bootstrap, job-board">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/logo.png') }}">


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->


    <link rel="stylesheet"  href="/users/css/normalize.css">
    <link rel="stylesheet" href="/users/css/font-awesome.min.css">
    <link rel="stylesheet" href="/users/css/fontello.css">
    <link rel="stylesheet" href="/users/css/animate.css">
    <link rel="stylesheet" href="/users/css/bootstrap.min.css">
    <link rel="stylesheet" href="/users/css/owl.carousel.css">
    <link rel="stylesheet" href="/users/css/owl.theme.css">
    <link rel="stylesheet" href="/users/css/owl.transitions.css">
    <link rel="stylesheet" href="/users/css/style.css">
    <link rel="stylesheet" href="/users/css/responsive.css">
    <script src="/users/js/vendor/modernizr-2.6.2.min.js"></script>

    <style>
        #map {
            height: 300px;
            width: 100%;
        }
    </style>
</head>
<body>

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Body content -->

<div class="header-connect">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-8 col-xs-8">
                <div class="header-half header-call">
                    <p>
                        <span><i class="icon-cloud"></i>+xx xxxx xxx</span>
                        <span><i class="icon-mail"></i>bibis.room@mhs.unesa.ac.id</span>
                    </p>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-3  col-xs-offset-1">
                <div class="header-half header-social">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-vine"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="button navbar-right">
                @if (Auth::guest())
                    <a href="{{route('Login')}}"  > <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.8s">Login</button></a>

                @else

                    <div class="button  dropdown">
                        <button href="#" class="navbar-btn nav-button wow bounceInRight login" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{url('Profile/'.Auth::user()->id.'/edit')}}">Edit Profile</a>
                            </li>

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
                    </div>
                    @endif


            </div>
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0s"><a href="{{route('Home')}}">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="{{route('Kosan')}}">Kosan</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="{{route('About')}}">About us</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
@yield('content')

<div class="footer-area">
    <div class="container">
        <div class="row footer">
            <div class="col-md-4">
                <div class="single-footer">
                    <img src="/users/img/footer-logo.png" alt="" class="wow pulse" data-wow-delay="1s">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati architecto quaerat facere blanditiis tempora sequi nulla accusamus, possimus cum necessitatibus suscipit quia autem mollitia, similique quisquam molestias. Vel unde, blanditiis.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-footer">
                    <h4>Twitter update</h4>
                    <div class="twitter-updates">
                        <div class="single-tweets">
                            <h5>ABOUT 9 HOURS</h5>
                            <p><strong>AGOMeet Aldous</strong> - a Brave New World for #rails with more cohesion, less coupling and greater dev speed <a href="http://t.co/rsekglotzs">http://t.co/rsekglotzs</a></p>
                        </div>
                        <div class="single-tweets">
                            <h5>ABOUT 9 HOURS</h5>
                            <p><strong>AGOMeet Aldous</strong> - a Brave New World for #rails with more cohesion, less coupling and greater dev speed <a href="http://t.co/rsekglotzs">http://t.co/rsekglotzs</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-footer">
                    <h4>Useful lnks</h4>
                    <div class="footer-links">
                        <ul class="list-unstyled">
                            <li><a href="">About Us</a></li>
                            <li><a href="" class="active">Services</a></li>
                            <li><a href="">Work</a></li>
                            <li><a href="">Our Blog</a></li>
                            <li><a href="">Customers Testimonials</a></li>
                            <li><a href="">Affliate</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-copy">
            <p><span>(C) webstie, All rights reserved</span> | <span>Graphic Designed by <a href="https://dribbble.com/siblu">Eftakher Alam</a></span> | <span> Web Designed by <a href="http://ohidul.me">Ohidul Islam</a></span> </p>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/users/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="/users/js/bootstrap.min.js"></script>
<script src="/users/js/owl.carousel.min.js"></script>
<script src="/users/js/wow.js"></script>
<script src="/users/js/main.js"></script>
</body>
</html>
