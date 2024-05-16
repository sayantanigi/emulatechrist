@extends('layouts.admin')
@section('title', 'Settings')
@section('content');
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">
                            <?= @$data['heading'] ?>
                        </h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard/</a></li>
                                <li class="active">
                                    <?= @$data['title'] ?>
                                </li>
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
                            <h4 class="card-title mb-4">Settings</h4>
                            <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav">
                                    <li class="nav-item">
                                        <a href="#seller-details" class="nav-link" data-toggle="tab">
                                            <span class="step-number">01</span>
                                            <span class="step-title">Logo Setting</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#company-document" class="nav-link" data-toggle="tab">
                                            <span class="step-number">02</span>
                                            <span class="step-title">Site Setting</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content twitter-bs-wizard-tab-content">
                                    <div class="tab-pane" id="seller-details">
                                        <form action="{{url('logosave')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Website <span class="text-danger">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="website" required value="<?= @$data['setting']->website ?>" autocompleted="off">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Logo
                                                        <span class="text-danger">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="logo" accept="image/*" onchange="preview_image(event)">
                                                        <br>
                                                        <?php if (!empty($data['setting']->logo)) {?>
                                                        <img src="{{asset('uploads/logo/'.$data['setting']->logo)}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image">
                                                        <?php } else {?>
                                                        <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image">
                                                        <?php } ?>
                                                        <input type="hidden" name="oldlogo" value="<?= @$data['setting']->logo ?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Footer Logo <span class="text-danger">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="footer_logo" accept="image/*" onchange="preview_image2(event)">
                                                        <br>
                                                        <?php if (!empty($data['setting']->footer_logo)) {?>
                                                        <img src="{{asset('uploads/logo/'.$data['setting']->footer_logo)}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image2">
                                                        <?php } else {?>
                                                        <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image2">
                                                        <?php } ?>
                                                        <input type="hidden" name="oldfooter_logo" value="<?= @$data['setting']->footer_logo ?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Favicon <span class="text-danger">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="favicon" accept="image/*" onchange="preview_image3(event)">
                                                        <br>
                                                        <?php if (!empty($data['setting']->favicon)) {?>
                                                        <img src="{{asset('uploads/logo/'.$data['setting']->favicon)}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image3">
                                                        <?php } else {?>
                                                        <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image3">
                                                        <?php } ?>
                                                        <input type="hidden" name="oldfavicon" value="<?= @$data['setting']->favicon ?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">
                                                    </label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary text-center">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="company-document">
                                        <div>
                                            <form action="{{url('settingsave')}}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="row mb-3">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="address" value="<?= @$data['setting']->address ?>" autocompleted="off">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="email" required value="<?= @$data['setting']->email ?>" autocompleted="off">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Phone <span class="text-danger">*</span></label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="phone" required value="<?= @$data['setting']->phone ?>" autocompleted="off">
                                                        </div>
                                                    </div>
                                                    <!--  <div class="row mb-3">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Facebook <span class="text-danger">*</span></label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="facebook" required value="<?= @$data['setting']->facebook ?>" autocompleted="off">
                                                        </div>
                                                    </div> -->
                                                    <div class="row mb-3">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Instagram <span class="text-danger">*</span></label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="instagram" required value="<?= @$data['setting']->instagram ?>" autocompleted="off">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">YouTube <span class="text-danger">*</span></label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="youtube" required value="<?= @$data['setting']->youtube ?>" autocompleted="off">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Link <span class="text-danger">*</span></label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="link" required value="<?= @$data['setting']->link ?>" autocompleted="off">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Threads<span class="text-danger">*</span></label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="threads" required value="<?= @$data['setting']->threads ?>" autocompleted="off">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Facebook<span class="text-danger">*</span></label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="facebook" required value="<?= @$data['setting']->facebook ?>" autocompleted="off">
                                                        </div>
                                                    </div>
                                                    <!--  <div class="row mb-3">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Skool <span class="text-danger">*</span></label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="skool" required value="<?= @$data['setting']->skool ?>" autocompleted="off">
                                                        </div>
                                                    </div>  -->
                                                    <div class="row mb-3">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">
                                                        </label>
                                                        <div class="col-sm-10">
                                                            <button type="submit" class="btn btn-primary text-center">Submit</button>
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
        </div>
    </div>
</div>
@endsection