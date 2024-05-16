@extends('layouts.app')

@section('content')

	 <div class="breadcumb-wrapper background-image" style="background-image: url('{{asset("assets/img/aboutBanner.png")}}');">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About</h1>
            </div>
        </div>
    </div>
    
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sticky-top why-img-1-1  wow img-custom-anim-left animated" data-wow-duration="1.5s" data-wow-delay="0.2s" data-right="0" >
                         <?php if(!empty($data['about']->image1) && file_exists(public_path('uploads/about/'.$data['about']->image1))){?>
            <img src="{{asset('uploads/about/'.$data['about']->image1)}}" alt="img">
        <?php } else{?>
            <img src="{{asset('assets/img/about-banner.jpg')}}" alt="img">
        <?php } ?>
                        
                    </div>
                </div>
                <div class="col-lg-7 ps-lg-5">
                    <div class="title-area mb-45">
                        <h2 class="sec-title"><?= @$data['about']->heading1 ?></h2>
                    </div>
                    <p><?= @$data['about']->description1 ?>
                    </p>
                  
                  
                </div>
            </div>

        </div>
    </div>
    <div class="why-area-1 space bg-theme">
        <div class="why-img-1-1 shape-mockup wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s" data-right="0" data-top="-100px" data-bottom="140px">
             <?php if(!empty($data['about']->image2) && file_exists(public_path('uploads/about/'.$data['about']->image2))){?>
            <img src="{{asset('uploads/about/'.$data['about']->image2)}}" alt="img">
        <?php } else{?>
            <img src="{{asset('assets/img/family.png')}}" alt="img">
        <?php } ?>
           
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="title-area mb-45">
                        <h2 class="sec-title"><?= @$data['about']->heading2 ?></h2>
                    </div>
                   <?= @$data['about']->description2 ?>
                    
                </div>
            </div>

        </div>
    </div>
    <div class="service-area-1 space homeabout bgimg" style="background-image: url('{{asset("assets/img/bg-about.png")}}');">
        <div class="service-img-1-1 shape-mockup wow img-custom-anim-left animated" data-wow-duration="1.5s" data-wow-delay="0.2s" data-left="0" data-top="-100px" data-bottom="140px">
           <a href="https://lnk.bio/disciplesprosper" target="_blank"> 
            <?php if(!empty($data['about']->image3) && file_exists(public_path('uploads/about/'.$data['about']->image3))){?>
            <img src="{{asset('uploads/about/'.$data['about']->image3)}}" alt="img">
        <?php } else{?>
             <img src="{{asset('assets/img/normal/service_2-1.jpg')}}" alt="img">
        <?php } ?>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <div class="about-content-wrap">
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-white"><?= @$data['about']->heading3 ?></h2>
                            <p class="sec-text mt-35 mb-40  text-white"><?= @$data['about']->description3 ?></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <h3><?= @$data['about']->description4 ?></h3>
                    <a class="btn style2 wow img-custom-anim-left mt-4" href="https://www.amazon.com/dp/0997605022/" target="_blank">
                        <span class="link-effect text-uppercase">
                            <span class="effect-1">Buy Now</span>
                            <span class="effect-1">Buy Now</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="https://www.amazon.com/dp/0997605022/" target="_blank">
                         <?php if(!empty($data['about']->image4) && file_exists(public_path('uploads/about/'.$data['about']->image4))){?>
            <img src="{{asset('uploads/about/'.$data['about']->image4)}}" alt="img">
        <?php } else{?>
             <img src="{{asset('assets/img/book.png')}}"/>
        <?php } ?>
                       
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
