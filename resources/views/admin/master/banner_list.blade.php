@extends('layouts.admin')
@section('title', 'Banner')
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
                            <div>
                                <a href="javascript:void(0)" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#createModal"><i class="mdi mdi-plus me-2"></i> Add Banner</a>
                            </div>
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
                            <p>@include('layouts.flash-message')</p>
                            <div class="table-responsive mt-3">
                                <table class="table table-centered datatable1 dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Heading</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!$data["list_data"]->isEmpty()) {
                                        $sr = 1;
                                        foreach ($data["list_data"] as $key) { ?>
                                        <tr>
                                            <td scope="row">
                                                <?= $sr;?>
                                            </td>
                                            <td>
                                                <?php if (!empty($key->image) && file_exists(public_path('uploads/banner/' . $key->image))) {?>
                                                <img src="{{asset('uploads/banner/' . $key->image)}}" class="img-thumbnail rounded-circle avatar-xl">
                                                <?php } else {?>
                                                <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl">
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?= $key->heading ?>
                                            </td>
                                            <td>
                                                <?= $key->description ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($key->status == 1) {
                                                    echo "<span class='badge bg-success'>Active</span>";
                                                } else {
                                                    echo "<span class='badge bg-danger'>Inactive</span>";
                                                }
                                                ?>
                                            </td>
                                            <td id="tooltip-container<?= $key->bannerId ?>">
                                                <a href="javascript:void(0)" class="me-3 text-primary" data-bs-placement="top" title="Edit" onclick="getValue(<?= $key->bannerId ?>)" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="deleteBanner(<?= $key->bannerId ?>)"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $sr++; } }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Add mmodal -->
<div id="createModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Banner</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ url('banner_save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Image<span style="color:red;">*</span></label>
                            <input class="form-control" type="file" name="image" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Heading<span style="color:red;">*</span></label>
                            <input class="form-control" type="text" name="heading" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Description<span style="color:red;">*</span></label>
                            <textarea class="form-control" name="description" required></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-primary" type="submit" style="float:right;">submit</button>
                            <a href="#" class="btn btn-link" data-bs-dismiss="modal">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  end add modal -->
<!--  edit mmodal -->
<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Banner</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ url('banner_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Image<span style="color:red;">*</span></label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <br>
                        <div class="form-group" id="showImg">
                        </div>
                        <div class="form-group mt-3">
                            <label>Heading<span style="color:red;">*</span></label>
                            <input class="form-control" type="text" name="heading" id="heading" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Description<span style="color:red;">*</span></label>
                            <textarea class="form-control" name="description" id="description" required></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label>Status</label>
                            <select class="form-control" name="status" id="editstatus">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <input type="hidden" id="oldimage" name="oldimage">
                        <input type="hidden" id="bannerId" name="bannerId">
                        <div class="mt-4">
                            <button class="btn btn-primary" type="submit" style="float:right;">Submit</button>
                            <a href="#" class="btn btn-link" data-bs-dismiss="modal">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  end edit modal -->
<script type="text/javascript">
    function getValue(bannerId) {
        $.ajax({
            url: "{{ url('banner_getvalue') }}",
            type: 'POST',
            cache: false,
            data: {
                bannerId: bannerId,
                _token: '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function (result) {
                $("#bannerId").val(result.id);
                $("#showImg").html(result.img);
                $("#oldimage").val(result.oldimage);
                $("#heading").val(result.heading);
                $("#description").val(result.description);
                $("#editstatus").val(result.status);
            }
        });
    }
    function deleteBanner(BannerId) {
        swal({
            title: 'Are You sure want to delete ?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#A5DC86',
            cancelButtonColor: '#DD6B55',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            closeOnConfirm: true,
            closeOnCancel: true
        }, function (isConfirm) {
            if (isConfirm) {
                window.location.href = "{{ url('banner_delete') }}" + '/' + BannerId
            }
        });
    }
</script>
@endsection