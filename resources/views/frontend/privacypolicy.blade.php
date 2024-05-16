@extends('layouts.app')

@section('content')
        <style type="text/css">
           p a{color: #0047ab}
        </style>
     <div class="breadcumb-wrapper background-image" style="background-image: url('{{asset("assets/img/aboutBanner.png")}}');">

        <div class="container">

            <div class="breadcumb-content">

                <h1 class="breadcumb-title">Privacy Policy</h1>

            </div>

        </div>

    </div>

     <div class="space">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 ps-lg-5">

                    <p> <?= html_entity_decode(@$data['cms']->description) ?>

                    </p>

                </div>

            </div>



        </div>

    </div>
    
           

@endsection
