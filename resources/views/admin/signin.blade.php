<?php $setting = DB::table('settings')->where('settingId', '1')->first(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Emulatechrist | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin Dashboard" name="description" />
    <meta content="Dashboard" name="author" />
    <!-- App favicon -->
    <?php if (!empty($setting->favicon)) {?>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('uploads/logo/'.$setting->favicon)}}" />
    <?php } else {?>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png')}}" />
    <?php } ?>
    <!-- Bootstrap Css -->
    <link href="{{asset('adminassets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('adminassets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('adminassets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body class="authentication-bg d-flex align-items-center min-vh-100 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <a href="javascript:void(0)" class="d-block auth-logo"></a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="p-4">
                    <div class="card overflow-hidden mt-2">
                        <div class="auth-logo text-center bg-primary position-relative">
                            <div class="img-overlay"></div>
                            <div class="position-relative pt-4 py-5 mb-1">
                                <h5 class="text-white">
                                    <?php if (!empty($setting->logo)) {?>
                                    <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="" height="24" class="logo logo-dark mx-auto" />
                                    <?php } ?>
                                </h5>
                                <p class="text-white-50 mb-0">Sign in </p>
                            </div>
                        </div>
                        <div class="card-body position-relative">
                            <div class="p-4 mt-n5 card rounded">
                                <?php if ($errors->any()) { ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php foreach ($errors->all() as $error) { ?>
                                        <li><?php echo $error; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <?php }
                                if (Session::has('login-error-message')) { ?>
                                <div class="alert alert-danger"><?php echo Session::get('login-error-message'); ?></div>
                                <?php } ?>
                                <form method="POST" class="form-horizontal" action="{{ url('adminLogin') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="userpassword">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <!--  <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                    </div> -->
                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log IN</button>
                                    </div>
                                    <!--  <div class="mt-4 text-center">
                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <!-- <p>Don't have an account ?<a href="auth-register.html" class="fw-bold"> Register</a> </p> -->
                        <p>© <script>document.write(new Date().getFullYear())</script> Emulatechrist.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="{{asset('adminassets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('adminassets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('adminassets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('adminassets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('adminassets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('adminassets/js/app.js')}}"></script>
</body>
</html>