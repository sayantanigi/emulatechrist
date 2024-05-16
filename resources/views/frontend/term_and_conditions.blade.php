@extends('layouts.app')

@section('content')

     <section class="py-4 bg-dark">
                <div class="container">
                    <h2 class="h4 text-white text-uppercase font-weight-bold">Term and Conditions</h2>
                    <ul class="paginationnav">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li><a href="{{url('termandconditions')}}">Term and Conditions</a></li>
                    </ul>
                </div>
            </section>
            <section class="py-5">
                <div class="container">
                    <div class="mb-4">
                        <!-- <h3 class="text-dark h5 font-weight-bold text-uppercase">Our Story:</h3> -->
                         <p>
                           <?= html_entity_decode(@$data['cms']->description) ?>
                        </p>
                    </div>
                   
                </div>
            </section>

@endsection
