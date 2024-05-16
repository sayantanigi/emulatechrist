
    @extends('layouts.app')
    @section('content')
    <!-- START SECTION BANNER -->
        <div class="banner_section slide_wrap shop_banner_slider staggered-animation-wrap">
            <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active background_bg" data-img-src="{{asset('assets/images/home-03/s-1.jpg')}}">
                    </div>
                    <div class="carousel-item background_bg" data-img-src="{{asset('assets/images/home-03/s-2.jpg')}}">
                    </div>
                    <div class="carousel-item background_bg" data-img-src="{{asset('assets/images/home-03/s-3.jpg')}}">
                    </div>
                    <div class="carousel-item background_bg" data-img-src="{{asset('assets/images/home-03/s-4.jpg')}}">
                    </div>
                </div>
                <ol class="carousel-indicators indicators_style2">
                    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="3"></li>
                </ol>
            </div>
        </div>
        <!-- END SECTION BANNER -->

        <!-- END MAIN CONTENT -->
        <div class="main_content">
            <!-- START SECTION SHIPPING INFO -->
            <div class="section pb_20 small_pt">
                <div class="container-fluid px-2">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="sale_banner">
                                <a class="hover_effect1" href="javascript:void(0)">
                                    <img src="{{asset('assets/images/home-01/img-1.jpg')}}" alt="" />
                                    <div class="text-inner">
                                        <h4>BLACK STAR PROGRAM</h4>
                                        <p>Highlighting service providers and products that are licensed and insured to protect our customers.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sale_banner">
                                <a class="hover_effect1" href="javascript:void(0)">
                                    <img src="{{asset('assets/images/home-01/img-2.jpg')}}" alt="" />
                                    <div class="text-inner">
                                        <h4>GOLD STAR PROGRAM</h4>
                                        <p>Distinguishing top-rated service providers and products.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sale_banner">
                                <a class="hover_effect1" href="javascript:void(0)">
                                    <img src="{{asset('assets/images/home-01/img-3.jpg')}}" alt="" />
                                    <div class="text-inner">
                                        <h4>GREEN STAR PROGRAM</h4>
                                        <p>Service providers and products that are On Sale.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- START SECTION SHIPPING INFO -->

            <!-- START SECTION SHOP -->
            <div class="section small_pt pb_20">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="heading_s3 text-center">
                                <h2>Exclusive YBN Businesses</h2>
                            </div>
                            <div class="small_divider clearfix"></div>
                        </div>
                    </div>
                    <div class="row shop_container">
                        <?php if(!$data['listCategory']->isEmpty()){ foreach($data['listCategory'] as $key){?>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="product_box text-center">
                                <div class="product_img">
                                    <a href="{{url('category/'.$key->categoryId)}}">
                                        <?php if(!empty($key->image) && file_exists(public_path('uploads/category/'.@$key->image))){?>
                                        <img src="{{asset('uploads/category/'.@$key->image)}}" alt="" />
                                    <?php } ?>
                                    </a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{url('category/'.$key->categoryId)}}"><?= ucwords($key->name)?></a></h6>
                                </div>
                            </div>
                        </div>
                       <?php }  }?>
                      
                    </div>
                </div>
            </div>
            <!-- END SECTION SHOP -->

            <!-- START SECTION SHOP -->
            <div class="section small_pt pb_20">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="heading_s3 text-center">
                                <h2>YBN Popular Brands</h2>
                            </div>
                            <div class="small_divider clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                       <?php if(!$data['listBrand']->isEmpty()){ foreach($data['listBrand'] as $key){?>
                        <div class="col-md-2">
                            <div class="brand-logo">
                                <a href="javascript:void(0)">
                                      <?php if(!empty($key->logo) && file_exists(public_path('uploads/brand/'.@$key->logo))){?>
                                    <img src="{{asset('uploads/brand/'.@$key->logo)}}"/>
                                <?php } ?>
                                </a>
                            </div>
                        </div>
                       <?php } } ?>
                    </div>
                </div>
            </div>
            <!-- END SECTION SHOP -->
            <div class="section small_pt pb_20">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="heading_s3 text-center">
                                <h2>Advertised YBN Businesses</h2>
                            </div>
                            <div class="small_divider clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                          <?php if(!$data['listBlog']->isEmpty()){ foreach($data['listBlog'] as $key){?>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="product_box">
                                <div class="product_img">
                                    <a href="javascript:void(0)">
                                          <?php if(!empty($key->image) && file_exists(public_path('uploads/advertised/'.@$key->image))){?>
                                        <img src="{{asset('uploads/advertised/'.@$key->image)}}" alt="">
                                    <?php } ?>
                                    </a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="javascript:void(0)"><?= ucwords($key->title) ?></a></h6>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                    <div class="pr_desc">
                                        <p><?= $key->description ?></p>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="javascript:void(0)" class="btn btn-fill-out btn-radius"><i class="icon-eye"></i> View Business</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <?php } }?>
                    </div>
                </div>
            </div>
            <div class="section small_pt pb_20">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="heading_s1 text-center">
                                <h2>YBN Business News</h2>
                            </div>
                            <p class="leads text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                         <?php if(!$data['listNews']->isEmpty()){ foreach($data['listNews'] as $key){?>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog_post blog_style1 box_shadow1">
                                <div class="blog_img">
                                    <a href="javascript:void(0)">
                                         <?php if(!empty($key->image) && file_exists(public_path('uploads/news/'.@$key->image))){?>
                                        <img src="{{asset('uploads/news/'.@$key->image)}}" alt="" />
                                    <?php } ?>
                                    </a>
                                </div>
                                <div class="blog_content bg-white">
                                    <div class="blog_text">
                                        <h5 class="blog_title"><a href="javascript:void(0)"><?= $key->title ?></a></h5>
                                        <ul class="list_none blog_meta">
                                            <li>
                                                <a href="javascript:void(0)"><i class="ti-calendar"></i> <?= date('M d,Y',strtotime($key->created_at))?></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="ti-comments"></i> 2 Comment</a>
                                            </li>
                                        </ul>
                                        <p><?= $key->description ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } } ?>
                       
                    </div>
                </div>
            </div>

           
        
@endsection
