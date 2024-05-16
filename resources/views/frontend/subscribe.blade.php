@extends('layouts.app')

@section('content')

    <div class="breadcumb-wrapper background-image" style="background-image: url(./assets/img/portfolio3_3.jpg);">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Subscribe</h1>
            </div>
        </div>
    </div>
    
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
                                        <img src="{{s3_asset($key->logo)}}"> 
                                        <?php } ?>
                                        <?= ucwords($key->company_name)?></span>
                                    <span class="effect-1">
                                        <?php if(!empty($key->logo)){ ?>
                                        <img src="{{s3_asset($key->logo)}}"> 
                                        <?php } ?>
                                        <?= ucwords($key->company_name)?></span>
                                </span>
                            </a>
                           <?php } }?>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-10">
                    <div class="title-area text-center mb-0 mt-5">
                        <h2 class=" h3 mb-5">Subscribe</h2>
                        <form class="subscribe-form"  id="subscribeForm" method="POST">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" id="name" placeholder="Your Name" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <input type="email" class="form-control style-border" id="email" placeholder="Your Email" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <button  type="submit" class="btn mt-0 w-100">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
   
    $(document).ready(function() {
$("#subscribeForm").submit(function(e) {
e.preventDefault();
var name =$('#name').val();
var email =$('#email').val();

     $.ajax({
                    url: "{{ url('savenewsletter') }}",
                    type: 'POST',
                    cache:false,
                    data: {
                         name:name,email:email,
                        _token: '{{ csrf_token() }}',
                    },
                    dataType: 'json',
                    success:function(result)
                    {
                       if(result==1)
                       {
                       
                        $('#name').val('');
                        $('#email').val('');
                         alert_func(["Subscribe successfully!!", "success", "#A5DC86"]);

                       } else{
                        
                        $('#name').val('');
                        $('#email').val('');
                         alert_func(["Email already exits!", "error", "#DD6B55"]);
                       }

                    }
                });
    });
    });

</script>

@endsection

