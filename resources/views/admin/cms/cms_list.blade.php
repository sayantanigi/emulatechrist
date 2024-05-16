 @extends('layouts.admin')

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
                                            <li class="active">CMS</li>
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
                                            <!-- <a href="javascript:void(0)" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#createModal"><i class="mdi mdi-plus me-2"></i> Add CMS</a> -->
                                        </div>
                                       <p>@include('layouts.flash-message')</p>
                                        <div class="table-responsive mt-3">
                                        <table class="table table-centered datatable1 dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>#</th>
                                                       
                                                        <th>Title</th>
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
                                                       
                                                        <td><?= $key->title ?></td>
                                                        <td>
                                                             <?php 
                                                            if(strlen($key->description)>130)
                                                            {
                                                            echo substr(strip_tags($key->description), 0,130).'...';
                                                               
                                                            }
                                                            else{
                                                                echo strip_tags($key->description);
                                                            
                                                            }
                                                             ?>
                                                        </td>
                                                       
                                                            <td id="tooltip-container<?= $key->cmsId ?>">

                                                            <a href="{{url('admin/editCms/'.$key->cmsId)}}" class="me-3 text-primary"data-bs-toggle="tooltip"  data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                           
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

                


    @endsection