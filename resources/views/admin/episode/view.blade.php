 
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
                                        
                                   <form action="#" method="post" enctype="multipart/form-data">
                                    @csrf
                                            <div class="row">
                                                 <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Podcast </label>
                                                      <input type="text"  class="form-control" readonly value="<?= @$data['getdata']->podcastname ?>"> 
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Title </label>
                                                      <input type="text" name="title" class="form-control" readonly value="<?= @$data['getdata']->title ?>"> 
                                                    </div>
                                                    
                                                </div>
                                                 <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"><b>Image</b> </label>
                                                          
                                                       <br>  
                                                      <?php if(!empty($data['getdata']->image)){?>
                                                        <img src="{{s3_asset($data['getdata']->image)}}" class="img-thumbnail rounded-circle avatar-xl">
                                                    <?php } else{?>
                                                         <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl">
                                                    <?php } ?>
                                                   
                                                    </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"><b>Video</b> </label>
                                                          
                                                       <br>
                                                       <?php 
                                                      
                                                      if(!empty($data['getdata']->attachment)){
                                                          
                                                        ?>
                                                   
                                                        <video src="{{s3_asset($data['getdata']->attachment)}}" controls width="300" height="100" style="background:#000;"></video>
                                                  
                                                    <?php } else{?>
                                                         <img src="{{asset('uploads/no_image.png')}}" class="img-thumbnail rounded-circle avatar-xl">
                                                    <?php } ?>
                                                    <input type="hidden" name="oldattachment" value="<?= @$data['getdata']->attachment ?>">
                                                    </div>
                                                    </div>

                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label"><b>Description</b> </label>
                                                      <?= @$data['getdata']->description ?>
                                                    </div>
                                                    
                                                </div>

                                         
                                                <div class="mt-0">
                                                <div>
                                                   
                                                    <a href="{{url('admin/episode')}}" class="btn btn-primary waves-effect">
                                                        Cancel
                                                    </a>
                                                </div>
                                            </div>
                                      
                                            </div>

                                        </form>

                                    </div>
                                </div>
                                <!-- end select2 -->

                            </div>


                        </div>
                        <!-- end row -->

                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


    @endsection