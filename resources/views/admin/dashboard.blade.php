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
                        <h4 class="mb-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard/</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="row h-100">
                        <div class="col-md-4 col-xl-4">
                            <div class="card overflow-hidden card-h-100">
                                <a href="{{url('admin/category_list')}}">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="font-size-15 text-uppercase mb-0">Categories</h5>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded bg-soft-success font-size-20 mini-stat-icon">
                                                    <i class="ri-wallet-3-line text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h3 class="font-size-24"><?= count(@$data['category'])?></h3>
                                        <p class="text-muted mb-0">Total Category</p>
                                    </div>
                                </a>
                                <div id="user-chart"></div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card overflow-hidden card-h-100">
                                <a href="{{url('admin/podcast')}}">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="font-size-15 text-uppercase mb-0">Podcast</h5>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded bg-soft-danger font-size-20 mini-stat-icon">
                                                    <i class="ri-shopping-cart-line text-danger"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h3 class="font-size-24"><?= count(@$data['podcast'])?></h3>
                                        <p class="text-muted mb-0">Total Products</p>
                                    </div>
                                </a>
                                <div id="order-chart"></div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card overflow-hidden card-h-100">
                                <a href="{{url('admin/newsletters')}}">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="font-size-15 text-uppercase mb-0">Subscribe</h5>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded bg-soft-danger font-size-20 mini-stat-icon">
                                                    <i class="ri-shopping-cart-line text-danger"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h3 class="font-size-24"><?= count(@$data['newsletters'])?></h3>
                                        <p class="text-muted mb-0">Total Orders</p>
                                    </div>
                                </a>
                                <div id="order-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection