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
                                <a href="{{url('admin/addpodcast')}}" class="btn btn-success mb-2" ><i class="mdi mdi-plus me-2"></i> Add Podcast</a>
                            </div>
                            <p>@include('layouts.flash-message')</p>
                            <div class="table-responsive mt-3">
                            <table class="table table-centered datatable1 dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <!-- <th>Link</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="row_position">
                                    <?php if(!$data["list_data"]->isEmpty()){
                                    $sr=1;
                                    foreach($data["list_data"] as $key){
                                    ?>
                                    <tr id="<?php echo $key->podcastId ?>">
                                        <td><?= $sr;?></td>
                                        <td>
                                            <?php if(!empty($key->image)){?>
                                            <img src="{{asset('uploads/podcast/'.$key->image)}}" class="img-thumbnail rounded-circle avatar-xl">
                                            <?php } else{?>
                                            <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl">
                                            <?php } ?>
                                            </td>
                                        <td><?= $key->title ?></td>
                                        <td>
                                            <?php
                                            if(strlen($key->description)>50) {
                                                $desc= substr($key->description, 0,50).'...';
                                            } else{
                                                $desc= $key->description;
                                            }
                                            echo strip_tags($desc);
                                            ?>
                                        </td>
                                        <!-- <td><?= $key->podcast_url ?></td> -->
                                        <td id="tooltip-container<?= $key->podcastId ?>">
                                            <a href="{{url('admin/viewpodcast/'.$key->podcastId)}}" class="me-3 text-warning"data-bs-toggle="tooltip"  data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                            <a href="{{url('admin/editpodcast/'.$key->podcastId)}}" class="me-3 text-primary"data-bs-toggle="tooltip"  data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="deletepodcast(<?= $key->podcastId ?>)"><i class="mdi mdi-trash-can font-size-18"></i></a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">
$(".row_position").sortable({
    delay: 150,
    stop: function() {
        var selectedData = new Array();
        $('.row_position>tr').each(function() {
            selectedData.push($(this).attr("id"));
        });
        updateOrder(selectedData);
    }
});
function updateOrder(data) {
    $.ajax({
        type: 'post',
        url: '{{ url("podcastposition") }}',
        data:{position:data, _token: '{{ csrf_token() }}',},
        success:function(){
            alert_func(["Position changed successfully", "success", "#A5DC86"]);
            setTimeout(function(){
                location.reload();
            }, 2000);
        }
    });
}
</script>
<script type="text/javascript">
function deletepodcast(podcastId) {
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
            window.location.href = "{{ url('podcast_delete') }}" + '/' + podcastId;
        }
    });
}
</script>
@endsection