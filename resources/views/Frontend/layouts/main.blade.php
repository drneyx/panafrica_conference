<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Confrence</title>

<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('fonts/line-icons.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('css/slicknav.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('css/nivo-lightbox.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('css/color-switcher.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
</head>
<style type="">
    .log{
        height: 120px;
        width: 150px;
        margin-top: 20px;
    }
    .log1{
        height: 120px;
        width: 250px;
        margin-top: 20px;
    }
</style>
<body>


<header id="header-wrap">

<nav class="navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar">
    <div class="container">
        <div class="theme-header clearfix">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
            
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="logo">
                        <img src="{{asset('img/Udsm.png')}}" class="log"/>
                        </div>
                    <ul class="navbar-nav mr-auto w-100 justify-content-center">
                        <li class="nav-item "><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/online_registration">Online Registration</a></li>
                        <li class="nav-item"><a class="nav-link" href="/sessions">Sessions</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                    </ul>

                    <div class="logo">
                        <img src="{{asset('img/pan.png')}}" class="log1"/>
                        </div>
                </div>
            </div>
        </div>
    
    <div class="mobile-menu" data-logo="{{asset('img/logo.pg')}}"></div>
</nav>

@yield('contents')
<footer>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">
                    <h2 class="subscribe-title">To Get Nearly Updates</h2>
                </div>
                <div class="footer-logo">
                   
                </div>
            
                <div class="social-icons-footer">
                    <ul>
                        <li class="facebook"><a target="_blank" href="https://web.facebook.com/?_rdc=1&_rdr"><i class="lni-facebook-filled"></i></a></li>
                        <li class="twitter"><a target="_blank" href="https://twitter.com/login?lang=en"><i class="lni-twitter-filled"></i></a></li>
                        <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/feed/"><i class="lni-linkedin-original"></i></a></li>
                        <li class="google"><a target="_blank" href="https://www.google.com/"><i class="lni-google"></i></a></li>
                        <li class="pinterest"><a target="_blank" href="https://www.google.com/"><i class="lni-pinterest"></i></a></li>
                    </ul>
                </div>
               <div class="site-info">
                    <p>Designed and Developed by <a href="#" rel="nofollow">Methew Mndeme</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>


<div id="preloader">
    <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
    </div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
</script>
<script src="{{ asset('js/jquery-min.js' )}}"></script>
<script src="{{ asset('js/popper.min.js' )}}"></script>
<script src="{{ asset('js/bootstrap.min.js' )}}"></script>


<script src="{{asset('js/jquery.countdown.min.js' )}}"></script>
<script src="{{ asset('js/waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('js/jquery.nav.js' )}}"></script>

<script src="{{ asset('js/jquery.easing.min.js')}}"></script>
<script src="{{ asset('js/wow.js')}}"></script>
<script src="{{ asset('js/jquery.slicknav.js')}}"></script>
<script src="{{ asset('js/nivo-lightbox.js')}}"></script>
<script src="{{ asset('js/video.js')}}"></script>
<script src="{{ asset('js/main.js' )}}"></script>

<script src="{{ asset('js/form-validator.min.js')}}"></script>
<script src="{{ asset('js/contact-form-script.min.js')}}"></script>
</body>
</html>
