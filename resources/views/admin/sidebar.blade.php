<?php $setting = DB::table('settings')->where('settingId', '1')->first(); ?>
<div class="vertical-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="javascript:void(0)" class="logo logo-dark">
            <span class="logo-sm">
                <?php if (!empty($setting->logo)) {?>
                <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="" height="22">
                <?php } else {?>
                <img src="{{asset('assets/images/logo.png')}}" alt="" height="22">
                <?php } ?>
            </span>
            <span class="logo-lg">
                <?php if (!empty($setting->logo)) {?>
                <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="" height="22">
                <?php } else {?>
                <img src="{{asset('assets/images/logo.png')}}" alt="" height="22">
                <?php } ?>
            </span>
        </a>
        <a href="javascript:void(0)" class="logo logo-light">
            <span class="logo-sm">
                <?php if (!empty($setting->logo)) {?>
                <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="" height="22">
                <?php } else {?>
                <img src="{{asset('assets/images/logo.png')}}" alt="" height="22">
                <?php } ?>
            </span>
            <span class="logo-lg">
                <?php if (!empty($setting->logo)) {?>
                <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="" height="22">
                <?php } else {?>
                <img src="{{asset('assets/images/logo.png')}}" alt="" height="22">
                <?php } ?>
            </span>
        </a>
    </div>
    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>
    <div data-simplebar class="sidebar-menu-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{url('admin/dashboard')}}" class="waves-effect">
                        <i class="ri-home-gear-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/banner')}}" class="waves-effect">
                        <i class="fa fa-image"></i>
                        <span>Banners</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="{{url('admin/category_list')}}" class="waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Category</span>
                    </a>
                </li> -->
                <li>
                    <a href="{{url('admin/company')}}" class="waves-effect">
                        <i class="fa fa-image"></i>
                        <span>Company Logo</span>
                    </a>
                </li>
                <li <?=(@$data['page']=='podcastmgmt' )?'mm-active':'';?>>
                    <a href="javascript: void(0);" class="has-arrow waves-effect <?= (@$data['page']=='podcastmgmt')?'mm-active':'';?>">
                        <i class="fa fa-industry"></i>
                        <span>Podcast Management</span>
                    </a>
                    <ul class="sub-menu <?= (@$data['subpage']=='podcast' || @$data['subpage']=='episode')?'mm-collapse mm-show':'';?>"
                        aria-expanded="false">
                        <li class="<?= (@$data['subpage']=='podcast')?'mm-active':'';?>"><a href="{{url('admin/podcast')}}">Podcast</a></li>
                        <!-- <li class="<?= (@$data['subpage']=='episode')?'mm-active':'';?>"><a href="{{url('admin/episode')}}">Episode</a></li> -->
                    </ul>
                </li>
                <li <?=(@$data['page']=='blogs' )?'mm-active':'';?>>
                    <a href="javascript: void(0);" class="has-arrow waves-effect <?= (@$data['page']=='blogs')?'mm-active':'';?>">
                        <i class="fas fa-blog"></i>
                        <span>Blog Management</span>
                    </a>
                    <ul class="sub-menu <?= (@$data['subpage']=='blog')?'mm-collapse mm-show':'';?>" aria-expanded="false">
                        <li><a href="{{url('admin/category_list')}}">Blog Category</a></li>
                        <li class="<?= (@$data['subpage']=='blog')?'mm-active':'';?>"><a href="{{url('admin/bloglist')}}">List of Blogs</a></li>
                    </ul>
                </li>
                <li <?=(@$data['page']=='ebook' )?'mm-active':'';?>>
                    <a href="javascript: void(0);" class="has-arrow waves-effect <?= (@$data['page']=='ebook')?'mm-active':'';?>">
                        <i class="fa fa-file-pdf"></i>
                        <span>Ebook Management</span>
                    </a>
                    <ul class="sub-menu <?= (@$data['subpage']=='editebook' || @$data['subpage']=='downloads')?'mm-collapse mm-show':'';?>" aria-expanded="false">
                        <li class="<?= (@$data['subpage']=='editebook')?'mm-active':'';?>"><a href="{{url('admin/ebook')}}">Ebook</a></li>
                        <li class="<?= (@$data['subpage']=='downloads')?'mm-active':'';?>"><a href="{{url('admin/downloadslist')}}">List of Downloads</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('admin/newsletters')}}" class="waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>NewsLetters</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/getintouchlist')}}" class="waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Get In Touch</span>
                    </a>
                </li>
                <li <?=(@$data['page']=='cms' )?'mm-active':'';?>>
                    <a href="javascript: void(0);" class="has-arrow waves-effect <?= (@$data['page']=='cms')?'mm-active':'';?>">
                        <i class="fas fa-list"></i>
                        <span>Content Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li <?=(@$data['subpage']=='cmslist' )?'mm-active':'';?>><a href="{{url('admin/cms')}}">CMS</a></li>
                        <li <?=(@$data['subpage']=='home' )?'mm-active':'';?>><a href="{{url('admin/homelist')}}">Home</a></li>
                        <li <?=(@$data['subpage']=='about' )?'mm-active':'';?>><a href="{{url('admin/aboutlist')}}">About</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="{{url('admin/contactList')}}" class="waves-effect">
                        <i class="fas fa-phone"></i>
                        <span>Manage Contact</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/users')}}" class="waves-effect">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                    </a>
                </li> -->
                <li>
                    <a href="{{url('admin/settings')}}" class="waves-effect">
                        <i class="ri-settings-2-line"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>