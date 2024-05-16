@extends('layouts.admin')
@section('title', 'CMS')
@section('content');
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0"> <?= @$data['heading'] ?> </h4>
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
                            <form action="{{url('updateabout')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php if ($errors->any()) { ?>
                                        <div class="alert alert-danger">
                                            <ul>
                                                <?php foreach ($errors->all() as $error) { ?>
                                                <li><?php echo $error; ?></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <?php } ?>
                                        <?php if (Session::has('message')) { ?>
                                        <div class="alert alert-success"> <?php    echo Session::get('message'); ?> </div>
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Heading1<span class="text-danger">*</span></label>
                                            <input type="text" name="heading1" class="form-control" required value="<?=  @$data["editData"]->heading1 ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Image1 <span class="text-danger">*</span></label>
                                            <input type="file" name="image1" class="form-control" accept="image/*" onchange="preview_image(event)">
                                            <br>
                                            <?php if (!empty($data['editData']->image1)) {?>
                                            <img src="{{asset("uploads/about/".$data['editData']->image1)}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image">
                                            <?php } else {?>
                                            <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image">
                                            <?php } ?>
                                            <input type="hidden" name="oldimage1" value="<?= @$data['editData']->image1 ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Description1 <span class="text-danger">*</span></label>
                                            <textarea name="description1" class="form-control edititor" required><?= @$data["editData"]->description1 ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Heading2 <span class="text-danger">*</span></label>
                                            <input type="text" name="heading2" class="form-control" required value="<?= @$data["editData"]->heading2 ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Image2 <span class="text-danger">*</span></label>
                                            <input type="file" name="image2" class="form-control" accept="image/*" onchange="preview_image2(event)">
                                            <br>
                                            <?php if (!empty($data['editData']->image2)) {?>
                                            <img src="{{asset("uploads/about/".$data['editData']->image2)}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image2">
                                            <?php } else {?>
                                            <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image2">
                                            <?php } ?>
                                            <input type="hidden" name="oldimage2" value="<?= @$data['editData']->image2 ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Description2 <span class="text-danger">*</span></label>
                                            <textarea name="description2" class="form-control edititor" required><?= @$data["editData"]->description2 ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Heading3 <span class="text-danger">*</span></label>
                                            <input type="text" name="heading3" class="form-control" required value="<?= @$data["editData"]->heading3 ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Image3 <span class="text-danger">*</span></label>
                                            <input type="file" name="image3" class="form-control" accept="image/*" onchange="preview_image3(event)">
                                            <br>
                                            <?php if (!empty($data['editData']->image3)) {?>
                                            <img src="{{asset("uploads/about/".$data['editData']->image3)}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image3">
                                            <?php } else {?>
                                            <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image3">
                                            <?php } ?>
                                            <input type="hidden" name="oldimage3" value="<?= @$data['editData']->image3 ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Description3 <span class="text-danger">*</span></label>
                                            <textarea name="description3" class="form-control edititor" required><?= @$data["editData"]->description3 ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Image4 <span class="text-danger">*</span></label>
                                            <input type="file" name="image4" class="form-control" accept="image/*" onchange="preview_image4(event)">
                                            <br>
                                            <?php if (!empty($data['editData']->image4)) {?>
                                            <img src="{{asset("uploads/about/".$data['editData']->image4)}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image4">
                                            <?php } else {?>
                                            <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image4">
                                            <?php } ?>
                                            <input type="hidden" name="oldimage4" value="<?= @$data['editData']->image4 ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Description4 <span class="text-danger">*</span></label>
                                            <textarea name="description4" class="form-control edititor" required><?= @$data["editData"]->description4 ?></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?= @$data['editData']->id ?>">
                                    <div class="mt-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">Submit</button>
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
@endsection