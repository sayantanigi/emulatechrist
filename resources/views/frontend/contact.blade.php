@extends('layouts.app')
@section('content')

  <div class="breadcumb-wrapper background-image" style="background-image: url('{{asset("assets/img/portfolio3_3.jpg")}}');">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact</h1>
            </div>
        </div>
    </div>
    
   

    <!--==============================
    Contact Area
    ==============================-->
    <div class="contact-area-1 space bg-theme mt-0 ">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="contact-form-wrap">
                        <div class="title-area mb-30 text-center">
                            <h2 class="sec-title">Get in Touch </h2>
                            <h6>Kent Eyner Nielsen looks forward to hearing from you
                            </h6>
                        </div>
                        <form action="#" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="name" id="name" placeholder="Full name*">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control style-border" name="email" id="email" placeholder="Email address*">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message" id="contactForm" class="form-control style-border"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="checkbox" id="privacy" name="privacy"> <label for="privacy">I agree that my data will be processed by Kent Eyner Nielsen in accordance with their <a href="#" style="color: #0047ab;">Privacy Policy</a> in order to reply to my request. </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn col-12 text-center">
                                <button type="submit" class="btn mt-20">
                                    <span class="link-effect">
                                        <span class="effect-1">SEND MESSAGE</span>
                                        <span class="effect-1">SEND MESSAGE</span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

          
@endsection

