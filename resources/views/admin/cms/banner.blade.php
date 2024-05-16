
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
                        <form action="{{url('updatebanner')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if ($errors->any()){ ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php foreach ($errors->all() as $error){ ?>
                                                <li><?php echo  $error ; ?></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <?php } ?>
                                    <?php if(Session::has('message')) { ?>
                                    <div class="alert alert-success"> <?php echo Session::get('message'); ?> </div>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Heading1<span class="text-danger">*</span></label>
                                        <input type="text" name="heading1" class="form-control" required  value="<?=  @$data["editData"]->heading1 ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Heading2<span class="text-danger">*</span></label>
                                        <input type="text" name="heading2" class="form-control" required  value="<?=  @$data["editData"]->heading2 ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Heading3<span class="text-danger">*</span></label>
                                        <input type="text" name="heading3" class="form-control" required  value="<?=  @$data["editData"]->heading3 ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Heading4<span class="text-danger">*</span></label>
                                        <input type="text" name="heading4" class="form-control" required  value="<?=  @$data["editData"]->heading4 ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Type<span class="text-danger">*</span> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Press the tab"></i></label>
                                        <input type="text" class="form-control" id="tag-input1" name="type" value="<?= !empty($data['userdata']->type)?@$data['userdata']->type:''; ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Image <span class="text-danger">*</span></label>
                                        <input type="file" name="image" class="form-control" accept="image/*" onchange="preview_image(event)">
                                        <br>
                                        <?php if(!empty($data['editData']->image)){?>
                                        <img src="{{asset('uploads/banner/'.$data['editData']->image)}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image">
                                        <?php } else{?>
                                        <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image">
                                        <?php } ?>
                                        <input type="hidden" name="oldimage" value="<?= @$data['editData']->image ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Heading5 <span class="text-danger">*</span></label>
                                        <input type="text" name="heading5" class="form-control" required value="<?= @$data["editData"]->heading5 ?>">
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?= @$data['editData']->bannerId ?>">
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
