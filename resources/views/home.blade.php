@extends('layouts.app')
@section('content')
<div class="hero-wrapper hero-2" id="hero">
    <div class="hero-2-thumb wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
        <?php if(!empty($data['banners']->image)){?>
        <img src="{{asset('uploads/banner/'.@$data['banners']->image)}}" alt="img">
        <?php } else{ ?>
        <img src="{{asset('assets/img/banner-01.jpg')}}" alt="img">
        <?php } ?>
    </div>
    <div class="container">
        <div class="hero-style2">
            <div class="row">
                <div class="col-lg-9">
                    <h1 class="hero-title wow img-custom-anim-right animated text-white"><?= @$data['banners']->heading1 ?></h1>
                    <h1 class="hero-title wow img-custom-anim-left animated text-white"><?= @$data['banners']->heading2 ?> </h1>
                    <h1 class="hero-title wow img-custom-anim-left animated text-white"><?= @$data['banners']->heading3 ?></h1>
                    <div class="hero-title wow img-custom-anim-left animated text-white  color-theme"><?= @$data['banners']->heading4 ?> <span class="text"></span></div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 mt-5">
                    <!-- <p class="hero-text wow img-custom-anim-left animated text-white">EMULATE CHRIST PODCAST is dedicated to sharing Kent's journey, as He turns to the Lord and makes Jesus the focal point in every area of his life.</p> -->
                    <div class="btn-group fade_left">
                        <a href="{{url('podcast')}}" class="btn style2 wow img-custom-anim-left animated">
                            <span class="link-effect text-uppercase">
                                <span class="effect-1">Discover Podcasts</span>
                                <span class="effect-1">Discover Podcasts</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slider__marquee clearfix marquee-wrap">
        <div class="container-fluid p-0 overflow-hidden">
            <div class="marquee_mode marquee__group">
                <h6 class="item m-item"><a href="javascript:void(0)"><i class="fas fa-star-of-life"></i> <?= @$data['banners']->heading5 ?></a></h6>
                <h6 class="item m-item"><a href="javascript:void(0)"><i class="fas fa-star-of-life"></i> <?= @$data['banners']->heading5 ?></a></h6>
            </div>
        </div>
    </div>
    <div class="service-details-page-area space bgimg" style="background-image: url('{{asset("assets/img/bg-video.jpg")}}');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!-- <div class="col-xl-10">
                    <div class="service-inner-thumb mb-80 wow img-custom-anim-top animated">
                        <iframe width="560" height="550" src="https://www.youtube.com/embed/7MkmJhXMCQ0?si=SHna_YJmuK0ynRRO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div> -->
                <div class="col-xl-8">
                    <div class="title-area mb-35">
                        <h2 class="sec-title animate__animated animate__fadeInLeft"><?= ucwords(@$data['home']->heading1)?></h2>
                        <p class="sec-text mt-30">
                            <?= html_entity_decode(@$data['home']->description1) ?>
                        </p>
                        <a href="{{url('about')}}" class="btn style2 wow img-custom-anim-left  animated text-uppercase">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-area-1 space homeabout bgimg" style="background-image: url('{{asset("assets/img/bg-about.png")}}');">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6 pe-lg-5 mb-4 img-custom-anim-right"  data-wow-duration="1.5s" data-wow-delay="0.2s" data-right="0" data-top="-100px" data-bottom="140px">
                    <?php if(!empty($data['home']->image2)){?>
                    <img src="{{asset('uploads/home/'.$data['home']->image2)}}" alt="img">
                    <?php } else{?>
                    <img src="{{asset('assets/img/normal/service_2-1.jpg')}}" alt="img">
                    <?php } ?>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-wrap">
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-white"><?= @$data['home']->heading2 ?></h2>
                            <p class="sec-text mt-35 mb-40 text-white" style="color:white;"><?= html_entity_decode(@$data['home']->description2) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="portfolio-area-1 space overflow-hidden bgimg" style="background-image: url('{{asset("assets/img/bg3.png")}}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Latest Podcast Episodes</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gy-40 gx-60 justify-content-center">
                 <?php  if(!$data['podcast']->isEmpty()){ foreach($data['podcast'] as $key){ ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="portfolio-wrap img-custom-anim-left">
                        <div class="portfolio-thumb" style="display: block;">
                           <a href="{{$key->podcast_url}}" target="_blank">
                                <?php if(!empty($key->image)){?>
                                <img src="{{asset('uploads/podcast/'.$key->image)}}" alt="portfolio" style="width: 100%; height: 270px;">
                                <?php } else{?>
                                <img src="{{asset('assets/img/pod1.jpg')}}" alt="portfolio">
                                <?php } ?>
                            </a>
                        </div>
                        <div class="portfolio-details">
                           <h3 class="portfolio-title mb-3 h5"><a href="{{$key->podcast_url}}" target="_blank"><?= substr($key->title, 0,40); ?></a></h3>
                            <p>
                                <?php if(strlen($key->description)>60){
                                    echo substr($key->description, 0,60).'...';
                                }
                                else{
                                    echo $key->description;
                                }
                                    ?>
                            </p>
                            <a class="btn style2 wow img-custom-anim-left" href="{{$key->podcast_url}}" target="_blank">
                                <span class="link-effect text-uppercase">
                                    <span class="effect-1">View Details</span>
                                    <span class="effect-1">View Details</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
               <?php } } ?>
            </div>
            <div class="btn-wrap justify-content-center mt-60">
                <a class="btn" href="{{url('podcast')}}" target="_blank">
                    <span class="link-effect text-uppercase">
                        <span class="effect-1">View All</span>
                        <span class="effect-1">View All</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="video-area-1 overflow-hidden">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-wrap">
                        <div class="jarallax" data-bg-src="{{asset('assets/img/galaxy-bg.jpg')}}">
                        </div>
                        <!-- https://www.youtube.com/watch?v=m8vq_tveeSM -->
                         <a href="javascript:void(0)" class="play-btn circle-btn btn gsap-magnetic" data-bs-toggle="modal" data-bs-target="#videoModal">PLAY VIDEO
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="blog-area space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-6 col-lg-8">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Latest Blog Posts</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-40 gx-60 justify-content-center">
                <?php  if(!$data['blog']->isEmpty()){ foreach($data['blog'] as $key){ ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="portfolio-wrap img-custom-anim-left">
                        <div class="portfolio-thumb">
                            <a href="{{url('blogdetail/'.$key->slug_url)}}">
                                <?php if(!empty($key->image)){?>
                                <img src="{{asset('uploads/blog/'.$key->image)}}" alt="portfolio" style="width: 100%; height: 270px;">
                                <?php } else{?>
                                    <img src="{{asset('assets/img/pod1.jpg')}}" alt="portfolio">
                                <?php } ?>
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <h3 class="portfolio-title mb-3 h5"><a href="{{url('blogdetail/'.$key->slug_url)}}"><?= substr($key->title, 0,35); ?></a></h3>
                                    <p> <?php if(strlen($key->description)>100){
                                            echo substr($key->description, 0,100).'...';
                                        }
                                        else{
                                            echo $key->description;
                                        }
                                         ?></p>
                            <a class="btn style2 wow img-custom-anim-left" href="{{url('blogdetail/'.$key->slug_url)}}">
                                <span class="link-effect text-uppercase">
                                    <span class="effect-1">View Details</span>
                                    <span class="effect-1">View Details</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } } ?>
            </div>
        </div>
    </section>
    <!--==============================
    CTA Area
    ==============================-->
     <div class="cta-area-1 overflow-hidden bg-theme space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-11">
                    <div class="title-area text-center mb-0">
                        <h2 class=" h2 mb-5">Listen to <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contactModal" style="color: #0047ab;"> Emulate Christ </a>in your favorite apps.</h2>
                        <div class="btn-group justify-content-center">
                             <?php  if(!$data['company']->isEmpty()){ foreach($data['company'] as $key){ ?>
                            <a href="<?= @$key->link ?>" class="btn mt-0 bg-white podcastbtn">
                                <span class="link-effect text-dark">
                                    <span class="effect-1">
                                        <?php if(!empty($key->logo)){ ?>
                                        <img src="{{asset('uploads/company/'.$key->logo)}}" alt="logo">
                                        <?php } ?>
                                        <?= ucwords($key->company_name)?></span>
                                        <span class="effect-1">
                                        <?php if(!empty($key->logo)){ ?>
                                        <img src="{{asset('uploads/company/'.$key->logo)}}" alt="logo">
                                        <?php } ?>
                                        <?= ucwords($key->company_name)?></span>
                                </span>
                            </a>
                           <?php } }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="modal fade" id="videoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog  modalcontactForm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            <div class="text-center">
                <h2 class="h4 mb-3 text-primary">Play Video</h2>
             </div>
            <form action="#" method="post">
                <div class="mb-3">
                   <?php if(!empty($data['home']->type==1)){?>
                        <iframe width="560" height="315" src="{{ @$data['home']->url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php }  if((@$data['home']->type==2)){ ?>
                         <video class="lazy" src="{{asset('uploads/home/'.@$data['home']->url)}}" controls width="560" height="315" style="background:#000;" ></video>
                    <?php } ?>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection
