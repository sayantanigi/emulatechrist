@extends('layouts.app')

@section('content')
    <div class="breadcumb-wrapper background-image"
        style="background-image: url('{{ asset('assets/img/portfolio3_3.jpg') }}');">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Episode Detail</h1>
            </div>
        </div>
    </div>

    <section class="py-5 bg-light postcontent">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">

                        </div>
                    </div>

                    <h2 class="mb-1 h3"><?= @$data['episodedetail']->title ?></h2>
                    <p class="text-light mb-4"><small><a href="javascript:void(0)"
                                class="text-primary"><?= @$data['podcastname=']->title ?></a> •
                            <?= date('M d,Y', strtotime(@$data['episodedetail']->created_at)) ?> •
                            <?= date('H:i A', strtotime(@$data['episodedetail']->created_at)) ?></small></p>
                    <div class="podcastvideo mb-4">
                        <?php if(!empty($data['episodedetail']->attachment)){
                             $extension = pathinfo(@$data['episodedetail']->attachment, PATHINFO_EXTENSION); 
                            ?>  

                        <video src="{{ s3_asset(@$data['episodedetail']->attachment) }}" controls width="300"
                            height="100" style="background:#000;width:100%;"></video>

                        <?php } else{?>
                            <img src="{{ asset('assets/img/pod1.jpg') }}" style="width:100%;">
                        <?php } ?>


                    </div>
                    <p class="fw-bold"><?= @$data['episodedetail']->description ?></p>

                </div>
                <div class="col-lg-4">
                    <aside class="blog__sidebar sticky-top">
                        <!-- <div class="sidebar__widget sidebar__widget-two">
                                <div class="sidebar__search">
                                    <form action="#">
                                        <input type="text" placeholder="Search . . .">
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                                                <path d="M19.0002 19.0002L14.6572 14.6572M14.6572 14.6572C15.4001 13.9143 15.9894 13.0324 16.3914 12.0618C16.7935 11.0911 17.0004 10.0508 17.0004 9.00021C17.0004 7.9496 16.7935 6.90929 16.3914 5.93866C15.9894 4.96803 15.4001 4.08609 14.6572 3.34321C13.9143 2.60032 13.0324 2.01103 12.0618 1.60898C11.0911 1.20693 10.0508 1 9.00021 1C7.9496 1 6.90929 1.20693 5.93866 1.60898C4.96803 2.01103 4.08609 2.60032 3.34321 3.34321C1.84288 4.84354 1 6.87842 1 9.00021C1 11.122 1.84288 13.1569 3.34321 14.6572C4.84354 16.1575 6.87842 17.0004 9.00021 17.0004C11.122 17.0004 13.1569 16.1575 14.6572 14.6572Z" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div> -->
                        <!--  <div class="sidebar__widget">
                                <h4 class="sidebar__widget-title">Select Date</h4>
                                 <div class="calendar border">
                                <div class="calheader w-100">
                                  <pre class="left">◀</pre>
                                  
                                  <div class="header-display">
                                    <p class="display">""</p>
                                  </div>
                            
                                  <pre class="right">▶</pre>
                            
                                </div>
                            
                                <div class="week">
                                  <div>Su</div>
                                  <div>Mo</div>
                                  <div>Tu</div>
                                  <div>We</div>
                                  <div>Th</div>
                                  <div>Fr</div>
                                  <div>Sa</div>
                                </div>
                                <div class="days"></div>
                              </div>
                              <div class="display-selected">
                                <p class="selected"></p>
                              </div>
                               
                            </div> -->
                        <?php  if(!$data['episodelist']->isEmpty()){ ?>
                        <div class="sidebar__widget">
                            <h4 class="sidebar__widget-title">Other Episodes</h4>
                            <div class="sidebar__post-list">
                                <?php foreach($data['episodelist'] as $key){ ?>
                                <div class="sidebar__post-item">
                                    <div class="sidebar__post-thumb">
                                        <a href="{{ url('episodedetail/' . $key->slug_url) }}">
                                            <?php if(!empty($key->image)){?>
                                                <img src="{{ s3_asset($key->image) }}" alt="portfolio">
                                            <?php } else{?>
                                                <img src="{{ asset('assets/img/pod1.jpg') }}" alt="portfolio">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h5 class="title"><a
                                                href="{{ url('episodedetail/' . $key->slug_url) }}"><?= substr($key->title, 0, 30) ?></a>
                                        </h5>
                                        <span class="date"><i
                                                class="flaticon-time"></i><?= date('M d,Y', strtotime($key->created_at)) ?></span>
                                    </div>
                                </div>
                                <?php  } ?>
                            </div>
                        </div>
                        <?php }  ?>
                        <?php  if(!$data['podcastlist']->isEmpty()){  ?>
                        <div class="sidebar__widget">

                            <h4 class="sidebar__widget-title">Previous Video Podcasts</h4>

                            <div class="sidebar__post-list">

                                <?php foreach($data['podcastlist'] as $key){ ?>

                                <div class="sidebar__post-item">

                                    <div class="sidebar__post-thumb">

                                        <a href="{{ url('episode/' . $key->slug_url) }}">

                                            <?php if(!empty($key->image)){?>

                                            <img src="{{ s3_asset($key->image) }}" alt="portfolio">

                                            <?php } else{?>

                                            <img src="{{ asset('assets/img/pod1.jpg') }}" alt="portfolio">

                                            <?php } ?>

                                        </a>

                                    </div>

                                    <div class="sidebar__post-content">

                                        <h5 class="title"><a
                                                href="{{ url('episode/' . $key->slug_url) }}"><?= substr($key->title, 0, 30) ?></a>
                                        </h5>

                                        <span class="date"><i
                                                class="flaticon-time"></i><?= date('M d,Y', strtotime($key->created_at)) ?></span>

                                    </div>

                                </div>

                                <?php  } ?>

                            </div>

                        </div>
                        <?php  } ?>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
