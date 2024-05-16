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
                            <div>
                                <a href="javascript:void(0)" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#createModal"><i class="mdi mdi-plus me-2"></i> Add Category</a>
                            </div>
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
                                <p>@include('layouts.flash-message')</p>
                                <div class="table-responsive mt-3">
                                <table class="table table-centered datatable1 dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Category Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!$data["list_data"]->isEmpty()){
                                        $sr=1;
                                        foreach($data["list_data"] as $key){ ?>
                                        <tr>
                                            <td><?= $sr;?></td>
                                            <td>
                                                <?php if(!empty($key->image)){?>
                                                <img src="{{asset("uploads/category/".$key->image)}}" class="img-thumbnail rounded-circle avatar-xl">
                                                <?php } else{?>
                                                <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl">
                                                <?php } ?>
                                            </td>
                                            <td><?= ucwords($key->name)?></td>
                                            <td>
                                                <?php
                                                if($key->status==1){
                                                    echo "<span class='badge bg-success'>Active</span>";
                                                }else{
                                                    echo "<span class='badge bg-danger'>Inactive</span>";
                                                } ?>
                                                </td>
                                                <td id="tooltip-container<?= $key->categoryId ?>">
                                                <a href="javascript:void(0);" class="me-3 text-primary" data-bs-placement="top" title="Edit" onclick="getValue(<?= $key->categoryId ?>)" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="deleteCategory(<?= $key->categoryId ?>)"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <?php $sr++;} }?>
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
<!-- End Page-content -->
<!--  Add mmodal -->
<div id="createModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Business Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ url('category_save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Category Name<span style="color:red;">*</span></label>
                            <input class="form-control" type="text" name="name"  required>
                        </div>
                        <div class="form-group">
                            <label>Image<span style="color:red;">*</span></label>
                            <input class="form-control" type="file" name="image"  required accept="image/*" onchange="preview_image(event)">
                            <br>
                            <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image">
                        </div>
                        <div class="form-group">
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
                <h4 class="modal-title">Edit Business Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ url('category_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Category Name<span style="color:red;">*</span></label>
                            <input class="form-control" type="text" name="name" id="edit_name" required>
                        </div>
                            <div class="form-group">
                            <label>Image</label>
                            <input class="form-control" type="file" name="image" accept="image/*" onchange="preview_image2(event)">
                        </div>
                        <div class="form-group" id="showImg">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                        <select class="form-control" name="status" id="editstatus">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        </div>
                        <input type="hidden" id="categoryId" name="categoryId">
                        <input type="hidden" id="oldimage" name="oldimage">
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
function getValue(categoryId) {
    $.ajax({
        url: "{{ url('category_getvalue') }}",
        type: 'POST',
        cache:false,
        data: {
            categoryId:categoryId,
            _token: '{{ csrf_token() }}'
        },
        dataType:'json',
        success:function(result) {
            $("#edit_name").val(result.name);
            $("#categoryId").val(result.id);
            $("#showImg").html(result.img);
            $("#oldimage").val(result.oldimage);
            $("#editstatus").val(result.status);
        }
    });
}
function deleteCategory(categoryId) {
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
    }, function(isConfirm) {
        if (isConfirm) {
            window.location.href = "{{ url('category_delete') }}" + '/' + categoryId;
        }
    });
}
</script>
@endsection