@extends('layouts.app')
@section('content')
<div class="breadcumb-wrapper background-image"
    style="background-image: url('{{asset("assets/img/portfolio3_3.jpg")}}');">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Podcasts</h1>
        </div>
    </div>
</div>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row gy-40 gx-60 justify-content-center" id="hidepodcastlist">
                    <?php  if (!$data['podcast']->isEmpty()) {
                    foreach ($data['podcast'] as $key) { ?>
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-3">
                                        <div class="portfolio-thumb">
                                            <a href="{{$key->podcast_url}}" target="_blank">
                                                <?php if (!empty($key->image)) {?>
                                                <img src="{{asset('uploads/podcast/'.$key->image)}}" alt="portfolio" style="width: 100%;height: 128px;">
                                                <?php } else {?>
                                                <img src="{{asset('assets/img/pod1.jpg')}}" alt="portfolio">
                                                <?php } ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="portfolio-wrap img-custom-anim-left">
                                            <!-- <h3 class="portfolio-title mb-4 mt-3 mt-lg-0 h4"><a class=" text-dark" href="{{url('episode/' . $key->slug_url)}}"><?= substr($key->title, 0,60); ?></a></h3>
                                            <a class="btn style2 wow img-custom-anim-left" href="{{url('episode/' . $key->slug_url)}}"> -->
                                            <?php  if (!empty($key->podcast_url)) { ?>
                                            <h3 class="portfolio-title mb-4 mt-3 mt-lg-0 h4"><a class=" text-dark" href="{{$key->podcast_url}}" target="_blank"><?= substr($key->title, 0,60); ?></a></h3>
                                            <a class="btn style2 wow img-custom-anim-left" href="{{$key->podcast_url}}" target="_blank">
                                            <?php } else { ?>
                                            <h3 class="portfolio-title mb-4 mt-3 mt-lg-0 h4"><a class=" text-dark" href="javascript:void(0)"><?= substr($key->title, 0,60); ?></a></h3>
                                            <a class="btn style2 wow img-custom-anim-left" href="javascript:void(0)">
                                            <?php } ?>
                                                <span class="link-effect text-uppercase">
                                                    <span class="effect-1">View Details</span>
                                                    <span class="effect-1">View Details</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } } else { ?>
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center">No Data Found</h3>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row gy-40 gx-60 justify-content-center" id="podcastlist"> </div>
            </div>
            <div class="col-lg-4 ps-lg-5">
                <div class="sidebar__widget sidebar__widget-two">
                    <div class="sidebar__search">
                        <form action="#" method="POST">
                            <input type="text" placeholder="Search . . ." id="podcastsearch" onkeyup="podcastlist()">
                            <button type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M19.0002 19.0002L14.6572 14.6572M14.6572 14.6572C15.4001 13.9143 15.9894 13.0324 16.3914 12.0618C16.7935 11.0911 17.0004 10.0508 17.0004 9.00021C17.0004 7.9496 16.7935 6.90929 16.3914 5.93866C15.9894 4.96803 15.4001 4.08609 14.6572 3.34321C13.9143 2.60032 13.0324 2.01103 12.0618 1.60898C11.0911 1.20693 10.0508 1 9.00021 1C7.9496 1 6.90929 1.20693 5.93866 1.60898C4.96803 2.01103 4.08609 2.60032 3.34321 3.34321C1.84288 4.84354 1 6.87842 1 9.00021C1 11.122 1.84288 13.1569 3.34321 14.6572C4.84354 16.1575 6.87842 17.0004 9.00021 17.0004C11.122 17.0004 13.1569 16.1575 14.6572 14.6572Z"
                                        stroke="currentcolor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="sidebar__widget mb-2 stickyPodcast">
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function podcastlist() {
        var search = $('#podcastsearch').val();
        $.ajax({
            url: "{{ url('ajaxpodcastlist') }}",
            type: 'POST',
            cache: false,
            data: {
                search: search,
                _token: '{{ csrf_token() }}'
            },
            success: function (result) {
                $('#hidepodcastlist').hide();
                $('#podcastlist').html(result);
            }
        });
    }
</script>