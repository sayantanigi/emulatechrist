@extends('layouts.admin')
@section('title', 'Dashboard')
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
                            <form action="{{url('podcast_update')}}" method="post" enctype="multipart/form-data">
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
                                        <div class="alert alert-success"> <?php    echo Session::get('message'); ?></div>
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Title <span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control" required value="<?= @$data['getdata']->title ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Image <span class="text-danger">*</span></label>
                                            <input type="file" name="image" class="form-control" accept="image/*" onchange="preview_image(event)">
                                            <br>
                                            <?php if (!empty($data['getdata']->image)) {?>
                                            <img src="{{asset('uploads/podcast/'.$data['getdata']->image)}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image">
                                            <?php } else {?>
                                            <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image">
                                            <?php } ?>
                                            <input type="hidden" name="oldimage" value="<?= @$data['getdata']->image ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Description <span class="text-danger">*</span></label>
                                            <textarea name="description" class="edititor form-control" required><?= @$data['getdata']->description ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Podcast URL <span class="text-danger">*</span></label>
                                            <input type="text" name="podcast_url" class="form-control" required value="<?= @$data['getdata']->podcast_url ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" name="podcastId" value="<?= @$data['getdata']->podcastId ?>">
                                    <div class="mt-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1"style="float:right;">Submit</button>
                                            <a href="{{url('admin/podcast')}}" class="btn btn-secondary waves-effect">Cancel</a>
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