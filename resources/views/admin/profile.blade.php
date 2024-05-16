@extends('layouts.admin')
@section('title', 'Profile')
@section('content');
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0"><?= @$data['heading'] ?></h4>
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
                            <h4 class="card-title mb-4">Update Profile</h4>
                            <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                <form action="{{url('admin_update_profile')}}" method="post" enctype="multipart/form-data">
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
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="name" required value="<?= @$data['adminData']->name ?>" onkeypress="only_alphabets(event)">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="email" name="email" required value="<?= @$data['adminData']->email ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label" >Profile <span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="file" name="profile">
                                                <br>
                                                <?php if(!empty($data['adminData']->profile)){?>
                                                    <img src="{{asset('uploads/profile/'.$data['adminData']->profile)}}" class="img-thumbnail rounded-circle avatar-xl">
                                                <?php } else{?>
                                                    <img src="{{asset('uploads/adminprofile.png')}}" class="img-thumbnail rounded-circle avatar-xl">
                                                <?php } ?>
                                                <input type="hidden" name="oldprofile" value="<?= @$data['adminData']->profile ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary text-center">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection