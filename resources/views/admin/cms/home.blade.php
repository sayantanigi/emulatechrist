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
                            <form action="{{url('updatehome')}}" method="post" enctype="multipart/form-data">
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
                                        <div class="alert alert-success"> <?php echo Session::get('message'); ?> </div>
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Heading1<span class="text-danger">*</span></label>
                                            <input type="text" name="heading1" class="form-control" required value="<?= @$data["editData"]->heading1 ?>">
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
                                            <label class="form-label">Image<span class="text-danger">*</span></label>
                                            <input type="file" name="image2" class="form-control" accept="image/*" onchange="preview_image(event)">
                                            <br>
                                            <?php if (!empty($data['editData']->image2)) {?>
                                            <img src="{{asset("uploads/home/".$data['editData']->image2)}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image">
                                            <?php } else {?>
                                            <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image">
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
                                    <div class="col-md-12">
                                        <div>
                                            <h5 class="font-size-14 mb-4"> Play Video</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="type" id="formRadios1" value="1" <?=($data['editData']->type==1)?'checked':'';?>>
                                            <label class="form-check-label" for="formRadios1">Youtube</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="type" id="formRadios2" value="2" <?=(@$data['editData']->type==2)?'checked':'';?>>
                                            <label class="form-check-label" for="formRadios2">Other</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" id="youtube" style="display:<?= (@$data['editData']->type==1)?'block':'none'; ?>">
                                        <div class="mb-3">
                                            <!-- <label class="form-label">Youtube<span class="text-danger">*</span></label> -->
                                            <input type="text" name="url" id="url" class="form-control" value="<?= (@$data['editData']->type==1)?@$data['editData']->url:''; ?>"
                                                <?=(@$data['editData']->type==1)?'required':''; ?>>
                                            <br>
                                            <?php if (!empty($data['editData']->type == 1)) {?>
                                            <iframe width="560" height="315" src="{{ @$data['editData']->url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" id="other" style="display:<?= (@$data['editData']->type==2)?'block':'none'; ?>">
                                        <div class="mb-3">
                                            <input type="file" name="video" id="attachment" class="form-control" accept="video/*">
                                            <br>
                                            <?php if ((@$data['editData']->type == 2) && !empty($data['editData']->url)) { ?>
                                            <video class="lazy" src="{{asset("uploads/home/".$data['editData']->url)}}" controls width="300" height="169" style="background:#000;" id="uploadvideo"></video>
                                            <?php } else {?>
                                            <video class="lazy" src="{{asset('uploads/no_image.png')}}" controls width="300" height="169" style="background:#000;" id="uploadvideo"></video>
                                            <?php } ?>
                                            <input type="hidden" name="oldvideo" value="<?= (@$data['editData']->type==2)?@$data['editData']->url:''; ?>">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('input[name="type"]').click(function () {
        var type = $('input[name="type"]:checked').val();
        if (type == 1) {
            $('#youtube').show();
            $('#other').hide();
            $('#video').removeAttr('required', true);
            $('#url').attr('required', true);
        } else if (type == 2) {
            $('#other').show();
            $('#youtube').hide();
            $('#url').removeAttr('required', true);
            $('#video').attr('required', true);
        }
    });
});
</script>