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
                                <a href="javascript:void(0)" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#createModal"><i class="mdi mdi-plus me-2"></i> Add Company Logo</a>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table table-centered datatable1 dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Logo</th>
                                            <th>Company Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!$data["list_data"]->isEmpty()){
                                        $sr=1;
                                        foreach($data["list_data"] as $key){
                                        ?>
                                        <tr>
                                            <td><?= $sr;?></td>
                                            <td>
                                                <?php if(!empty($key->logo)){?>
                                                <img src="{{asset('uploads/company/'.$key->logo)}}" class="img-thumbnail rounded-circle avatar-xl">
                                                <?php } else{?>
                                                <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl">
                                                <?php } ?>
                                            </td>
                                            <td><?= ucwords($key->company_name)?></td>
                                                <td id="tooltip-container<?= $key->companyId ?>">
                                                <a href="javascript:void(0);" class="me-3 text-primary" data-bs-placement="top" title="Edit" onclick="getValue(<?= $key->companyId ?>)" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="deletecompany(<?= $key->companyId ?>)"><i class="mdi mdi-trash-can font-size-18"></i></a>
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
    <!--  Add mmodal -->
<div id="createModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Company Logo</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ url('company_save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Company Name<span style="color:red;">*</span></label>
                            <input class="form-control" type="text" name="company_name" autocomplete="off" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Link<span style="color:red;">*</span></label>
                            <input class="form-control" type="text" name="link" autocomplete="off" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Image<span style="color:red;">*</span></label>
                            <input class="form-control" type="file" name="image"  required accept="image/*" onchange="preview_image(event)">
                            <br>
                            <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl" id="output_image">
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
                <h4 class="modal-title">Edit Company Logo</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ url('company_update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                        <label>Company Name<span style="color:red;">*</span></label>
                        <input class="form-control" type="text" name="company_name" id="edit_company_name" autocomplete="off" required>
                        </div>
                        <div class="form-group mt-3">
                        <label>Link<span style="color:red;">*</span></label>
                        <input class="form-control" type="text" name="link" id="link" autocomplete="off" required>
                        </div>
                        <div class="form-group mt-3">
                        <label>Image</label>
                        <input class="form-control" type="file" name="image" accept="image/*" onchange="preview_image2(event)">
                        </div>
                        <div class="form-group mt-3" id="showImg">
                        </div>
                        <input type="hidden" id="companyId" name="companyId">
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
<script type="text/javascript">
function getValue(companyId) {
    $.ajax({
        url: "{{ url('company_getvalue') }}",
        type: 'POST',
        cache:false,
        data: {
            companyId:companyId,
            _token: '{{ csrf_token() }}'
        },
        dataType:'json',
        success:function(result) {
            $("#companyId").val(result.id);
            $("#edit_company_name").val(result.company_name);
            $("#link").val(result.link);
            $("#showImg").html(result.img);
            $("#oldimage").val(result.oldimage);
        }
    });
}
function deletecompany(companyId) {
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
            window.location.href = "{{ url('company_delete') }}" + '/' + companyId;
        }
    });
}
</script>
@endsection