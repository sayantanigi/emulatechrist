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
                                            <a href="{{url('admin/addtestimonial')}}" class="btn btn-success mb-2" ><i class="mdi mdi-plus me-2"></i> Add Testimonial</a>
                                        </div>
                                       <p>@include('layouts.flash-message')</p>
                                        <div class="table-responsive mt-3">
                                        <table class="table table-centered datatable1 dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Description</th>
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
                                                       
                                                        <td><?= ucwords($key->name) ?></td>
                                                        <td><?= ucwords($key->position) ?></td>
                                                        <td>
                                                            <?php 
                                                            if(strlen($key->description)>50)
                                                            {
                                                            $desc= substr($key->description, 0,50).'...';
                                                               
                                                            }
                                                            else{
                                                                $desc= $key->description;
                                                            
                                                            }
                                                            echo strip_tags($desc);
                                                             ?>
                                                        </td>
                                                       
                                                            <td id="tooltip-container<?= $key->testimonialId ?>">

                                                            <a href="{{url('admin/edittestimonial/'.$key->testimonialId)}}" class="me-3 text-primary"data-bs-toggle="tooltip"  data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="deletetestimonial(<?= $key->testimonialId ?>)"><i class="mdi mdi-trash-can font-size-18"></i></a>
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
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


  <script type="text/javascript">
     
       function deletetestimonial(testimonialId) {
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
                    window.location.href = "{{ url('testimonialdelete') }}" + '/' + testimonialId;
                }
            });
        }

      
  </script>

    @endsection