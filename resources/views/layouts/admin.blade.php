<?php
$admindetail = DB::table('admins')->where('adminId', Session::get('adminId'))->first();
$setting = DB::table('settings')->where('settingId', '1')->first();
$data["editData"] = DB::table('banners')->where('bannerId', '1')->first();
$edu = explode(',', @$data["editData"]->type);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Emulatechrist ||
    <?= !empty($data['title']) ? $data['title'] : 'Dashboard' ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <?php if (!empty($setting->favicon)) {?>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('uploads/logo/'.$setting->favicon)}}" />
    <?php } else {?>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png')}}" />
    <?php } ?>
    <link href="{{ asset('adminassets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminassets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminassets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{ asset('adminassets/libs/spectrum-colorpicker2/spectrum.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('adminassets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet">
    <link href="{{ asset('adminassets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminassets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminassets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('adminassets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminassets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('adminassets/libs/twitter-bootstrap-wizard/prettify.css')}}">
    <link href="{{ asset('adminassets/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('adminassets/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('adminassets/sweetalert/jquery.sweet-alert.custom.js') }}"></script>
</head>
<body data-sidebar="dark">
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <div class="navbar-brand-box">
                        <a href="javascript:void(0)" class="logo logo-dark">
                            <span class="logo-sm">
                                <?php if (!empty($setting->logo)) {?>
                                <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="" height="22" />
                                <?php } ?>
                            </span>
                            <span class="logo-lg">
                                <?php if (!empty($setting->logo)) {?>
                                <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="" height="20">
                                <?php } ?>
                            </span>
                        </a>
                        <a href="javascript:void(0)" class="logo logo-light">
                            <span class="logo-sm">
                                <?php if (!empty($setting->logo)) {?>
                                <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="" height="22" />
                                <?php } ?>
                            </span>
                            <span class="logo-lg">
                                <?php if (!empty($setting->logo)) {?>
                                <img src="{{asset('uploads/logo/'.$setting->logo)}}" alt="" height="20">
                                <?php } ?>
                            </span>
                        </a>
                    </div>
                    <button type="button"
                        class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="ri-search-line"></span>
                        </div>
                    </form>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="mb-3 m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            data-bs-toggle="fullscreen">
                            <i class="ri-fullscreen-line"></i>
                        </button>
                    </div>
                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if (!empty($admindetail->profile)) {?>
                            <img class="rounded-circle header-profile-user" src="{{asset('uploads/profile/'.$admindetail->profile)}}"
                                alt="Header Avatar">
                            <?php } else {?>
                            <img class="rounded-circle header-profile-user" src="{{ asset('uploads/adminprofile.png')}}"
                                alt="Header Avatar">
                            <?php } ?>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0">
                                            <?= ucwords(@$admindetail->name) ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="{{url('admin/profile')}}" class="text-reset notification-item">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-xs me-3 mt-1">
                                            <span class="avatar-title bg-soft-primary rounded-circle font-size-16">
                                                <i class="ri-user-line text-primary font-size-16"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="mb-1">Profile</h6>
                                        </div>
                                    </div>
                                </a>
                                <a href="{{url('admin/changePassword')}}" class="text-reset notification-item">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-xs me-3 mt-1">
                                            <span class="avatar-title bg-soft-primary rounded-circle font-size-16">
                                                <i class="ri-lock-line text-primary font-size-16"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="mb-1">Change Password</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="pt-2 border-top">
                                <div class="d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center"
                                        href="{{url('adminlogout')}}">
                                        <i class="ri-shut-down-line align-middle me-1"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @include($data['template'])
        @yield('content')
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Emulatechrist.
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <div class="rightbar-overlay"></div>
    <script src="{{ asset('adminassets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('adminassets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('adminassets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('adminassets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('adminassets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{ asset('adminassets/libs/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('adminassets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('adminassets/libs/spectrum-colorpicker2/spectrum.min.js')}}"></script>
    <script src="{{ asset('adminassets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{ asset('adminassets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{ asset('adminassets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script
        src="{{ asset('adminassets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script
        src="{{ asset('adminassets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>
    <script src="{{ asset('adminassets/js/pages/dashboard.init.js')}}"></script>
    <script src="{{ asset('adminassets/js/pages/form-advanced.init.js')}}"></script>
    <script src="{{ asset('adminassets/js/app.js')}}"></script>
    <script src="{{ asset('assets/custom_js/validation.js')}}"></script>
    <script src="{{asset('adminassets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminassets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('adminassets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('adminassets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('adminassets/js/pages/ecommerce-datatables.init.js')}}"></script>
    <script src="{{asset('adminassets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
    <script src="{{asset('adminassets/libs/twitter-bootstrap-wizard/prettify.js')}}"></script>
    <script src="{{asset('adminassets/js/pages/form-wizard.init.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/4kmqptl4bb1izls4xffk0u6cu203yqdw0tvsoowqrk1rpan4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({ selector: '.edititor' });
    </script>
</body>
<?php if (!empty(Session::get('msg'))): ?>
<?php if (Session::get('msg') == 'error') { ?>
<script>
    alert_func(["Some error occured, Please try again!", "error", "#DD6B55"]);
</script>
<?php } else { ?>
<script>
    alert_func(<?= Session :: get('msg') ?>);
</script>
<?php } ?>
<?php endif ?>
<script>
function alert_func(data) {
    swal({ title: data[0], type: data[1], confirmButtonColor: data[2] });
}
$(document).ready(function () {
    $('.datatable1').DataTable({
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10
    });
});
$(".allow_decimal").on("input", function (e) {
    var val = this.value;
    var re = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)$/g;
    var re1 = /^([0-9]+[\.]?[0-9]?[0-9]?|[0-9]+)/g;
    if (re.test(val)) {
        //do something here
    } else {
        val = re1.exec(val);
        if (val) {
            this.value = val[0];
        } else {
            this.value = "";
        }
    }
});
</script>
<script type="text/javascript">
(function () {
    "use strict"
    // Plugin Constructor
    var TagsInput = function (opts) {
        this.options = Object.assign(TagsInput.defaults, opts);
        this.init();
    }
    // Initialize the plugin
    TagsInput.prototype.init = function (opts) {
        this.options = opts ? Object.assign(this.options, opts) : this.options;
        if (this.initialized)
            this.destroy();
        if (!(this.orignal_input = document.getElementById(this.options.selector))) {
            console.error("tags-input couldn't find an element with the specified ID");
            return this;
        }
        this.arr = [];
        this.wrapper = document.createElement('div');
        this.input = document.createElement('input');
        init(this);
        initEvents(this);
        this.initialized = true;
        return this;
    }
    // Add Tags
    TagsInput.prototype.addTag = function (string) {
        if (this.anyErrors(string))
            return;
        this.arr.push(string);
        var tagInput = this;
        var tag = document.createElement('span');
        tag.className = this.options.tagClass;
        tag.innerText = string;
        var closeIcon = document.createElement('a');
        closeIcon.innerHTML = '&times;';
        // delete the tag when icon is clicked
        closeIcon.addEventListener('click', function (e) {
            e.preventDefault();
            var tag = this.parentNode;
            for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                if (tagInput.wrapper.childNodes[i] == tag)
                    tagInput.deleteTag(tag, i);
            }
        })
        tag.appendChild(closeIcon);
        this.wrapper.insertBefore(tag, this.input);
        this.orignal_input.value = this.arr.join(',');
        return this;
    }
    // Delete Tags
    TagsInput.prototype.deleteTag = function (tag, i) {
        tag.remove();
        this.arr.splice(i, 1);
        this.orignal_input.value = this.arr.join(',');
        return this;
    }
    // Make sure input string have no error with the plugin
    TagsInput.prototype.anyErrors = function (string) {
        if (this.options.max != null && this.arr.length >= this.options.max) {
            console.log('max tags limit reached');
            return true;
        }
        if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
            console.log('duplicate found " ' + string + ' " ')
            return true;
        }
        return false;
    }
    // Add tags programmatically
    TagsInput.prototype.addData = function (array) {
        var plugin = this;
        array.forEach(function (string) {
            plugin.addTag(string);
        })
        return this;
    }
    // Get the Input String
    TagsInput.prototype.getInputString = function () {
        return this.arr.join(',');
    }
    // destroy the plugin
    TagsInput.prototype.destroy = function () {
        this.orignal_input.removeAttribute('hidden');
        delete this.orignal_input;
        var self = this;
        Object.keys(this).forEach(function (key) {
            if (self[key] instanceof HTMLElement)
                self[key].remove();
            if (key != 'options')
                delete self[key];
        });
        this.initialized = false;
    }
    // Private function to initialize the tag input plugin
    function init(tags) {
        tags.wrapper.append(tags.input);
        tags.wrapper.classList.add(tags.options.wrapperClass);
        tags.orignal_input.setAttribute('hidden', 'true');
        tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
    }
    // initialize the Events
    function initEvents(tags) {
        tags.wrapper.addEventListener('click', function () {
            tags.input.focus();
        });
        tags.input.addEventListener('keydown', function (e) {
            var str = tags.input.value.trim();
            if (!!(~[9, 13, 188].indexOf(e.keyCode))) {
                e.preventDefault();
                tags.input.value = "";
                if (str != "")
                    tags.addTag(str);
            }
        });
    }
    // Set All the Default Values
    TagsInput.defaults = {
        selector: '',
        wrapperClass: 'tags-input-wrapper',
        tagClass: 'tag',
        max: null,
        duplicate: false
    }
    window.TagsInput = TagsInput;
})();
var tagInput1 = new TagsInput({
    selector: 'tag-input1',
    duplicate: false,
    max: 10
});
</script>
<?php if (!empty($edu)) {
foreach ($edu as $key => $value) {
    if (!empty($value)) { ?>
<script type="text/javascript">tagInput1.addData(['<?php echo $value; ?>']);</script>
<?php } } } ?>
<script type="text/javascript">
function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadvideo').show();
            $('#uploadvideo').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#attachment").change(function () {
    readURL1(this);
});
function preview_image(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('output_image');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
function preview_image2(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('output_image2');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
function preview_image3(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('output_image3');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
function preview_image4(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('output_image4');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
</body>
</html>