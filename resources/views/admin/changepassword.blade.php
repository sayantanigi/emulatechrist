 @extends('layouts.admin')

  @section('title', 'Change Password')

       @section('content');
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0"><?= @$data['title'] ?></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard/</a></li>
                                            <li class="active"><?= @$data['title'] ?></li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Change Password</h4>
                                         
                                        <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                            
                                           
                                            <form action="{{url('admin_update_password')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                        <div class="row">
                                                    <div class="row">
                                                         <?php if ($errors->any()){ ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors->all() as $error){ ?>
                        <li><?php echo $error; ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <?php } ?>
                <?php if(Session::has('message')) { ?>
                <div class="alert alert-success"> <?php echo Session::get('message'); ?> </div>
                <?php } ?>
                                                    </div>
                                                           <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Current Password <span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password" name="currentpassword" required autocomplete="off" >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">New Password <span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password" name="newpassword" required autocomplete="off" >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password <span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password" name="confirmpassword" required autocomplete="off" >
                                            </div>
                                        </div>
                                       
                                         <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary text-center">Change Password</button> 
                                            </div>
                                        </div>
                                                     
                                                 
                                                        </div>
                                                       
                                                    </form>
                                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


    @endsection