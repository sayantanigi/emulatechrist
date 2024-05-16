@extends('layouts.app')

@section('content')
 <section class="py-4 bg-dark">
                <div class="container">
                    <h2 class="h4 text-white text-uppercase font-weight-bold">Register</h2>
                    <ul class="paginationnav">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li><a href="javascript:void(0)">Register</a></li>
                    </ul>
                </div>
            </section>
            <section class="py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card-body shadow-lg logform rounded">
                                <h3 class="card-title text-center text-uppercase">Register </h3>
                                  <div class="col-lg-12 mb-3">
                             @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show">
                                   
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    </ul>
                                </div>
                            @endif
                        </div>
                                <form action="{{url('saveuser')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                   
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label> 
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" autocomplete="off" onkeypress="only_alphabets(event)" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address <span class="text-danger">*</span></label> 
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number <span class="text-danger">*</span></label> 
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label> 
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" required> 
                                    </div>
                                    <div class="form-group">
                                        <label>Reenter Password <span class="text-danger">*</span></label> 
                                        <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Reenter Password" autocomplete="off" required> 
                                    </div>
                                     <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="error invalid-feedback">{{ $errors->first('g-recaptcha-response') }}</span>
                                        @endif
                                        <span class="error invalid-feedback" id="recaptcha-error"></span>
                                </div>
                                    <button type="submit" class="btn btn-primary mt-2 w-100">Register </button>
                                    <div class="mt-3 text-center">
                                        <p>Already have account? <a href="{{url('userlogin')}}">Login</a></p>
                                    </div>
                                    <div class="sociallogin mt-3 text-center">
                                        <div class="mb-2">
                                            <a href="javascript:void(0)" class="btn"><img src="{{asset('assets/images/facebook.png')}}"> Register with Facebook</a>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="btn"><img src="{{asset('assets/images/google.png')}}"> Register with Google</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

          <script type="text/javascript">
    $(document).ready(function() {
$("#registerForm").submit(function(e) {
e.preventDefault();
var name = $('#name').val();
var email = $('#email').val();
var phone = $('#phone').val();
var password = $('#password').val();
var cpassword = $('#cpassword').val();
if(password!=cpassword){
    alert_func(["Password does not match!", "error", "#DD6B55"]); 
    return false;
}
     $.ajax({
                    url: "{{ url('saveuser') }}",
                    type: 'POST',
                    cache: false,
                    data: {
                         name:name,email:email,phone:phone,password:password,
                        _token: '{{ csrf_token() }}',
                    },
                    dataType: 'json',
                    success:function(returndata)
                    {
                    
                       if(returndata.data.result==1)
                       {
                         setTimeout(function(){
                         alert_func(["Register Successfully!!", "success", "#A5DC86"]);
                          window.location.href="{{ url('userlogin') }}"; 
                          }, 5000);
                          
                       } 
                         if(returndata.data.result=='0')
                      {
                         if(returndata.data.data=='email'){
                      alert_func(["Email already exits!", "error", "#DD6B55"]);
                       }
                       if(returndata.data.data=='phone')
                      {
                         alert_func(["Phone already exits!", "error", "#DD6B55"]);
                      }

                    }
                 }
                });
    });
    });
</script>
@endsection
