@extends('layouts.app')

@section('content')

       <section class="py-4 bg-dark">
                <div class="container">
                    <h2 class="h4 text-white text-uppercase font-weight-bold">Login</h2>
                    <ul class="paginationnav">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li><a href="javascript:void(0)">Login</a></li>
                    </ul>
                </div>
            </section>
            <section class="py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card-body shadow-lg logform rounded">
                                <h3 class="card-title text-center text-uppercase">Login </h3>
                                <form action="{{'actionlogin'}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email Address</label> 
                                        <input type="email" class="form-control" name="email" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label> 
                                        <input type="password" class="form-control" name="password" autocomplete="off"> 
                                    </div>
                                    <div class="form-group d-flex justify-content-between">
                                        <div class="form-check">
                                            <span class="form-check-input input-check">
                                                <span class="input-check__body">
                                                <input class="input-check__input" type="checkbox" id="login-remember"> <span class="input-check__box"></span> 
                                                <svg class="input-check__icon" width="9px" height="7px">
                                                    <use xlink:href="{{asset('assets/images/sprite.svg#check-9x7')}}"></use>
                                                </svg>
                                                </span>
                                            </span>
                                            <label class="form-check-label" for="login-remember">Remember Me</label>
                                        </div>
                                        <a href="javascript:void(0)">Forgot Password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4 w-100">Login</button>
                                    <div class="mt-3 text-center">
                                        <p>Don't have account? <a href="{{url('register')}}">Register</a></p>
                                    </div>
                                    <div class="sociallogin mt-3 text-center">
                                        <div class="mb-2">
                                            <a href="javascript:void(0)" class="btn"><img src="{{asset('assets/images/facebook.png')}}"> Login with Facebook</a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="btn"><img src="{{asset('assets/images/google.png')}}"> Login with Google</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

     
@endsection
