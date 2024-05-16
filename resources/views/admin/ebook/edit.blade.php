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
                            <form action="{{url('updateebook')}}" method="post" enctype="multipart/form-data">
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
                                            <label class="form-label">Ebook <span class="text-danger">*</span></label>
                                            <input type="file" name="ebook" class="form-control" required accept=".pdf,.doc">
                                            <br>
                                            <?php if (!empty($data['getdata']->ebook)) {?>
                                            <a href="{{asset('uploads/ebook/' . $data['getdata']->ebook)}}" title="PDF" target="_blank" download> <i class="fa fa-file-pdf" style="font-size:30px;color:red;"></i></a>
                                            <?php
                                            } else {?>
                                            <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl">
                                            <?php } ?>
                                            <input type="hidden" name="oldebook" value="<?= @$data['getdata']->ebook ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?= @$data['getdata']->settingId  ?>">
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