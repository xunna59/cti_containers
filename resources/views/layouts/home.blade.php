<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CTI Containers</title>
    <meta name="description" content="Multipurpose HTML template.">
    <link rel="stylesheet" href="../HTWF/scripts/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../HTWF/style.css">
    <link rel="stylesheet" href="../HTWF/css/content-box.css">
    <link rel="stylesheet" href="../HTWF/scripts/flexslider/flexslider.css">
    <link rel="stylesheet" href="../HTWF/scripts/magnific-popup.css">
    <link rel="stylesheet" href="../HTWF/css/animations.css">
    <link rel="stylesheet" href="../HTWF/css/components.css">
    <link rel="stylesheet" href="../HTWF/scripts/php/contact-form.css">
    <link rel="icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../skin.css">
</head>

<body>
    <div id="preloader"></div>
    <header class="fixed-top scroll-change bg-transparent menu-transparent" data-menu-anima="fade-bottom">
        <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
            <div class="navbar navbar-main">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img class="scroll-hide" src="../images/logo-white.png" alt="logo" />
                            <img class=" scroll-show" src="../images/logo.png" alt="logo" />
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <div class="nav navbar-nav navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li><a href="{{ route('about.about-us') }}">About us</a></li>
                                <li><a href="{{ route('about.our-history') }}">History</a></li>
                                <li><a href="{{ route('services.home') }}">Services</a></li>

                                <li><a href="{{ route('about.careers') }}">Careers</a></li>
                                {{-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button">About Us <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        
                                    </ul>
                                </li> --}}



                            </ul>
                            <div class="custom-area">
                                <a href="{{ route('get-quote') }}" class="btn btn-border btn-sm">Get Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>









    @yield('content')




















    <div class="section-empty bg-white">
        <div class="container content">
            <div class="social-feed-tw flexslider carousel outer-navs" data-social-id="YellBusiness"
                data-options="minWidth:250,itemMargin:60,show_media:false,limit: 10"></div>
        </div>
    </div>
    <i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>
    <footer class="footer-base">
        <div class="container content">
            <div class="row">
                <div class="col-md-4">
                    <img class="logo" src="../images/logo.png" alt="logo" />
                    <hr class="space s" />
                    <p class="text-s">
                        we are passionate about revolutionizing the construction industry with innovative
                        and sustainable container homes.
                    </p>
                    <hr class="space s" />
                    <div class="btn-group social-group btn-group-icons">
                        <a target="_blank" href="#" data-social="share-facebook" data-toggle="tooltip"
                            data-placement="top" title="Facebook">
                            <i class="fa fa-facebook text-s circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-twitter" data-toggle="tooltip"
                            data-placement="top" title="Twitter">
                            <i class="fa fa-twitter text-s circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-google" data-toggle="tooltip"
                            data-placement="top" title="Google+">
                            <i class="fa fa-google-plus text-s circle"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-linkedin" data-toggle="tooltip"
                            data-placement="top" title="LinkedIn">
                            <i class="fa fa-linkedin text-s circle"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="text-black text-uppercase">Contact Info</h3>
                    <hr class="space space-30" />
                    <ul class="fa-ul text-s ul-squares">
                        <li>201 Liverpool Street, Suite 721, London</li>
                        <li>London, United Kingdom</li>
                        <li>youremail@yourdomain.com</li>
                        <li>+88 (0) 101 0000 000</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="text-black text-uppercase">Useful resources</h3>
                    <hr class="space space-30" />
                    <div class="footer-menu text-s">
                        <a href="#">NEWSLETTER</a>
                        <a href="{{ route('about.about-us') }}">ABOUT US</a>
                        <a href="{{ route('about.our-history') }}">History</a>
                        <a href="{{ route('get-quote') }}">Get Quote</a>
                    </div>
                </div>
            </div>
            <hr class="space hidden-sm" />
            <div class="row copy-row">
                <div class="col-md-12 copy-text">
                    © 2024 All Rights Reserved | <a href="{{ route('home') }}">CTI Containers</a>
                </div>
            </div>
        </div>
        <script src="../HTWF/scripts/jquery.min.js"></script>
        <script src="../HTWF/scripts/parallax.min.js"></script>
        <script src="../HTWF/scripts/script.js"></script>
        <link rel="stylesheet" href="../HTWF/scripts/iconsmind/line-icons.min.css">
        <script src="../HTWF/scripts/bootstrap/js/bootstrap.min.js"></script>
        <script src="../HTWF/scripts/imagesloaded.min.js"></script>
        <script src="../HTWF/scripts/jquery.magnific-popup.min.js"></script>
        <script src="../HTWF/scripts/flexslider/jquery.flexslider-min.js"></script>
        <script src="../HTWF/scripts/jquery.tab-accordion.js"></script>
        <script src="../HTWF/scripts/isotope.min.js"></script>
        <script src="../HTWF/scripts/social.stream.min.js"></script>
        <script src="../HTWF/scripts/bootstrap/js/bootstrap.popover.min.js"></script>
        <script src='../HTWF/scripts/php/contact-form.js'></script>
        <script src='../HTWF/scripts/jquery.progress-counter.js'></script>

    </footer>
</body>

</html>
