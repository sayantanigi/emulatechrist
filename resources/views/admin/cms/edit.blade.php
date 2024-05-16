 
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
                                        
                                   <form action="{{url('updateCms')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
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
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                                      <input type="text" name="title" class="form-control" required value="<?= @$data['cmsData']->title ?>"> 
                                                    </div>
                                                    
                                                </div>   

                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Description <span class="text-danger">*</span></label>
                                                      <textarea name="description" class="form-control edititor" required><?= @$data['cmsData']->description ?></textarea>
                                                    </div>
                                                    
                                                </div>
                                               
                                            <input type="hidden" name="cmsId" value="<?= @$data['cmsData']->cmsId ?>">  
                                                <div class="mt-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1" style="float:right;">
                                                        Submit
                                                    </button>
                                                    <a href="{{url('admin/cms')}}" class="btn btn-secondary waves-effect">
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