<?php $setting = DB::table('settings')->first();
$data["editData"] = DB::table('banners')->where('bannerId', '1')->first();
$edu = explode(',', @$data["editData"]->type);
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Emulate Christ || Home</title>
    <meta name="description" content="">
    <meta name="robots" content="INDEX,FOLLOW">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if (!empty($setting->favicon)) {?>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('uploads/logo/'.$setting->favicon)}}">
    <?php } else {?>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon.png')}}">
    <?php } ?>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/imageRevealHover.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <style>
        .header-logo img {width: 90px !important;}
    </style>
</head>
<body>
    {{-- @php
        $pageName = Request::segment(count(Request::segments()));
        $episodeName = Request::segment(1);
    @endphp
    @if ($pageName != "podcast" && $episodeName != "episode" && $episodeName != "episodedetail")
        <div class="preloader">
            <div class="preloader-inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    @endif --}}
    <div class="popup-search-box">
        <button class="searchClose"><img src="{{asset('assets/img/icon/close.svg')}}" alt="img"></button>
        <form action="{{url('searchpodcast')}}" method="post">
            @csrf
            <input type="text" placeholder="Search Here.." name="search">
            <button type="submit"><img src="{{asset('assets/img/icon/search-white.svg')}}" alt="img"></button>
        </form>
    </div>
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area">
            <button class="menu-toggle"><i class="fas fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{url('')}}">
                    <?php if (!empty($setting->logo)) {?>
                    <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="Ovation">
                    <?php } else {?>
                    <img src="{{asset('assets/img/logo.svg')}}" alt="Ovation">
                    <?php } ?>
                </a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="{{url('')}}">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{url('about')}}">About</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{url('podcast')}}">Podcast</a>
                    </li>
                    <!--  <li class="menu-item-has-children">
                        <a href="{{url('subscribe')}}">Subscribe</a>
                    </li> -->
                    <li class="menu-item-has-children">
                        <a href="{{url('blog')}}">Blog</a>
                    </li>
                    <!--   <li>
                        <a href="{{url('contact')}}">Contact</a>
                    </li> -->
                    <li>
                        <a href="#">Gratuity</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
   Header Area
    ==============================-->
    <header class="nav-header header-layout2">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{url('')}}">
                                    <?php if (!empty($setting->logo)) {?>
                                    <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="Ovation">
                                    <?php } else {?>
                                    <img src="{{asset('assets/img/logo.svg')}}" alt="Ovation">
                                    <?php } ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="active">
                                        <a href="{{url('')}}">
                                            <span class="link-effect">
                                                <span class="effect-1">HOME</span>
                                                <span class="effect-1">HOME</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('about')}}">
                                            <span class="link-effect">
                                                <span class="effect-1">ABOUT</span>
                                                <span class="effect-1">ABOUT</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('podcast')}}">
                                            <span class="link-effect">
                                                <span class="effect-1">Podcast</span>
                                                <span class="effect-1">Podcast</span>
                                            </span>
                                        </a>
                                    </li>
                                    <!--  <li>
                                        <a href="{{url('subscribe')}}">
                                            <span class="link-effect">
                                                <span class="effect-1">Subscribe</span>
                                                <span class="effect-1">Subscribe</span>
                                            </span>
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="{{url('blog')}}">
                                            <span class="link-effect">
                                                <span class="effect-1">BLOG</span>
                                                <span class="effect-1">BLOG</span>
                                            </span>
                                        </a>
                                    </li>
                                    <!--  <li>
                                        <a href="{{url('contact')}}">
                                            <span class="link-effect">
                                                <span class="effect-1">Contact</span>
                                                <span class="effect-1">Contact</span>
                                            </span>
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">Gratuity</span>
                                                <span class="effect-1">Gratuity</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <button type="button" class="search-btn searchBoxToggler"><img
                                        src="{{asset('assets/img/icon/search-white.svg')}}" alt="icon">
                                    <span class="link-effect">
                                        <span class="effect-1">SEARCH</span>
                                        <span class="effect-1">SEARCH</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <!--==============================
        Footer Area
    ==============================-->
    <section class="py-4 bg-dark downloadebook">
        <div class="container">
            <div class="d-lg-flex justify-content-center align-items-center">
                <div>
                    <img src="{{asset('assets/img/book-transparent.png')}}" class="ebookImg">
                </div>
                <div class="ms-lg-5">
                    <h2 class="h4 text-white mb-3 "> Download Free eBook</h2>
                    <div><a href="javascript:void(0);" class="btn style2 wow img-custom-anim-left"
                            data-bs-toggle="modal" data-bs-target="#eBookModal">Free eBook</a></div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-wrapper footer-layout2 bg-primary overflow-hidden">
        <div class="container">
            <div class="widget-area space-top">
                <div class="row justify-content-center">
                    <div class="col-lg-4 text-lg-start text-center">
                        <?php if (!empty($setting->footer_logo)) {?>
                        <img src="{{asset('uploads/logo/'.$setting->footer_logo)}}" width="160" class="rounded">
                        <?php } else {?>
                        <img src="{{asset('assets/img/logo-bg.png')}}" width="160" class="rounded">
                        <?php } ?>
                        <div class="social-btn style3  mt-lg-5">
                            <a href="<?= @$setting->instagram ?>">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                    <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                </span>
                            </a>
                            <a href="<?= @$setting->youtube ?>">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-youtube"></i></span>
                                    <span class="effect-1"><i class="fab fa-youtube"></i></span>
                                </span>
                            </a>
                            <a href="<?= @$setting->link ?>">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fas fa-link"></i></span>
                                    <span class="effect-1"><i class="fas fa-link"></i></span>
                                </span>
                            </a>
                            <a href="<?= @$setting->threads ?>">
                                <span class="link-effect">
                                    <span class="effect-1"><img src="{{asset('assets/img/threads.png')}}"></span>
                                    <span class="effect-1"><img src="{{asset('assets/img/threads.png')}}"></span>
                                </span>
                            </a>
                            <a href="<?= @$setting->facebook ?>">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-facebook-f"></i></span>
                                    <span class="effect-1"><i class="fab fa-facebook-f"></i></span>
                                </span>
                            </a>
                            <!--  <a href="<?= @$setting->skool ?>">
                                <span class="link-effect">
                                    <span class="effect-1"><img src="{{asset('assets/img/podcastlogo/skool.png')}}"></span>
                                    <span class="effect-1"><img src="{{asset('assets/img/podcastlogo/skool.png')}}"></span>
                                </span>
                            </a> -->
                        </div>
                    </div>
                    <div class="col-md-12  col-xl-4 col-lg-4">
                        <div class="widget widget_nav_menu footer-widget">
                            <div class="menu-all-pages-container list-column2">
                                <ul class="menu">
                                    <li><a href="{{url('about')}}"> About</a></li>
                                    <li><a href="{{url('podcast')}}">Podcast</a></li>
                                    <!-- <li><a href="{{url('subscribe')}}">Subscribe</a></li> -->
                                    <li><a href="{{url('blog')}}">Blog</a></li>
                                    <!--  <li>
                                        <a href="{{url('contact')}}">Contact</a>
                                    </li> -->
                                    <li>
                                        <a href="#">Gratuity</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12  col-xl-4 col-lg-4">
                        <form action="{{url('getintouch')}}" method="post">
                            @csrf
                            <div class="widget footer-widget footerform">
                                <h3 class="h5">Connect with Kent</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="touchname"
                                        autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter Email" name="touchemail"
                                        autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message" name="touchmessage"
                                        required></textarea>
                                </div>
                                <input type="checkbox" id="privacy" name="terms" value="1" required> <label
                                    for="privacy" class="h5">I accept the <a href="{{url('privacypolicy')}}">Privacy
                                        Policy</a>. </label>
                                <div class="form-group">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright-wrap">
                <div class="row gy-3 ">
                    <div class="col-lg-12">
                        <p class="copyright-text ">
                            <?php if (!empty($setting->footer_logo)) {?>
                            <img src="{{asset('uploads/logo/'.$setting->footer_logo)}}" class="copyrightlogo">
                            <?php } else {?>
                            <img src="{{asset('assets/img/logo-bg.png')}}" class="copyrightlogo">
                            <?php } ?>
                            Copyright ©
                            <?= date('Y') ?>
                            <a href="https://emulatechrist.com">Emulate Christ</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--********************************
            Code End  Here
    ******************************** -->
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="contactModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modalcontactForm">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times"></i></button>
                    <div class="text-center">
                        <h2 class="h3 mb-2 text-primary">Get in touch</h2>
                        <h5 class="mb-4">Kent Eyner Nielsen looks forward to hearing from you</h5>
                    </div>
                    <form action="{{url('getintouch')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" placeholder="Your Name" class="form-control" name="touchname"
                                autocomplete="off" required />
                        </div>
                        <div class="mb-3">
                            <input type="email" placeholder="Your Email" class="form-control" name="touchemail"
                                autocomplete="off" required />
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Your Message" name="touchmessage"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="checkbox" id="privacy" name="terms" value="1" required> <label for="privacy">I
                                agree that my data will be processed by Kent Eyner Nielsen in accordance with their <a
                                    href="{{url('privacypolicy')}}">Privacy Policy</a> in order to reply to my request.
                            </label>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="eBookModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="eBookModalLabel" aria-hidden="true">
        <div class="modal-dialog  modalcontactForm">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times"></i></button>
                    <div class="text-center">
                        <h2 class="h4 mb-3 text-primary">Download Free eBook</h2>
                    </div>
                    <form action="{{url('downloadebook')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" placeholder="Your Name" class="form-control" name="ebookname"
                                autocomplete="off" required />
                        </div>
                        <div class="mb-3">
                            <input type="email" placeholder="Your Email" class="form-control" name="ebookemail"
                                autocomplete="off" required />
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary w-100">Download Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="base_url" id="base_url" value="{{url('')}}">
    <input type="hidden" name="csrf_token" id="csrf_token" value="{{ csrf_token() }}">
    <input type="hidden" id="segment" value="{{ Request::segment(1) }}">
    <!-- Jquery -->
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/typed.min.js')}}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js" integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg==" crossorigin="anonymous"></script> -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/gsap.min.js')}}"></script>
    <script src="{{asset('assets/js/ScrollSmoother.min.js')}}"></script>
    <script src="{{asset('assets/js/ScrollTrigger.min.js')}}"></script>
    <script src="{{asset('assets/js/SplitText.min.js')}}"></script>
    <script src="{{asset('assets/js/twinmax.js')}}"></script>
    <script src="{{asset('assets/js/imageRevealHover.js')}}"></script>
    <script src="{{asset('assets/js/jarallax.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.marquee.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.js')}}"></script>
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/custom_js/validation.js')}}"></script>
    <!-- Main Js File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <?php if (!empty($edu)) {
    $str = array();
    foreach ($edu as $key => $value) {
        if (!empty($value)) {
            $str[] = $value;
        ?>
    <?php        }
    }
} ?>
    <script>
        var typing = new Typed(".text", {
            strings: <?php echo json_encode($str); ?>,
            typeSpeed: 100,
            backSpeed: 40,
            loop: true,
        });
    </script>
    <!-- sweetalert -->
    <link href="{{ asset('adminassets/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('adminassets/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('adminassets/sweetalert/jquery.sweet-alert.custom.js') }}"></script>
    <?php if (!empty(Session::get('msg'))): ?>
    <?php    if (Session::get('msg') == 'error') { ?>
    <script>
        alert_func(["Some error occured, Please try again!", "error", "#DD6B55"]);
    </script>
    <?php    } else { ?>
    <script>
        alert_func(<?= Session :: get('msg') ?>);
    </script>
    <?php    } ?>
    <?php endif ?>
</body>
</html>