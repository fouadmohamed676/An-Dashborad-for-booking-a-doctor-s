<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>تسجيل الدخول</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors-rtl.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/pages/authentication.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-rtl.css')}}">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" href="{{ asset('assets/fonts/Cairo/stylesheet.css') }}">
    <style>
        body, h1, h2, h3, h4, h5, h6,.navigation,.header-navbar,.breadcrumb {
            font-family: 'Cairo';
        }
    </style>

    <style>
        .panel {display: none;}
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  menu-collapsed blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="{{ asset('app-assets/images/pages/login.png')}}" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">تسجيل دخول</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">مرحبا مجددا، الرجاء تحديد طريقة الدخول.</p>

                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <div class="form-group">
                                                    {{-- <label>اختر طريقه الدخول</label> --}}
                                                    <select id="sectionChooser" name="somename" class="form-control SlectBox SumoUnder" onclick="console.log($(this).val())" onchange="console.log('change is firing')" tabindex="-1">
                                                        <option selected disabled>-- اختر طريقه الدخول --</option>
                                                        <option value="admin">دخول كمدير</option>
                                                        <option value="user">دخول كطبيب</option>
                                                    </select>
                                                </div>

                                                <div class="panel" id="user">
                                                    <form action="{{ route('login.user') }}" method="POST">
                                                        @csrf
                                                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                            <input type="email" name="email" class="form-control" id="user-name" placeholder="البريد الالكتروني" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-mail"></i>
                                                            </div>
                                                            <label for="user-name">البريد الالكتروني</label>
                                                            @error('email')
                                                            <span class="text-danger" id="basic-default-name-error" class="error">
                                                                {{ $message }}
                                                            </span>
                                                            @enderror
                                                        </fieldset>

                                                        <fieldset class="form-label-group position-relative has-icon-left">
                                                            <input type="password" name="password" class="form-control" id="user-password" placeholder="كلمة المرور" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-lock"></i>
                                                            </div>
                                                            <label for="user-password">كلمة المرور</label>
                                                            @error('password')
                                                            <span class="text-danger" id="basic-default-name-error" class="error">
                                                                {{ $message }}
                                                            </span>
                                                            @enderror
                                                        </fieldset>

                                                        <div class="form-group d-flex justify-content-between align-items-center">
                                                            <div class="text-left">
                                                                <fieldset class="checkbox">
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">تذكرني</span>
                                                                    </div>
                                                                </fieldset>

                                                            </div>
                                                            {{-- <div class="text-right"><a href="auth-forgot-password.html" class="card-link">نسيت كلمة السر</a></div> --}}
                                                        </div>
                                                        {{-- <a href="auth-register.html" class="btn btn-outline-primary float-left btn-inline">Register</a> --}}
                                                        <button type="submit" class="btn btn-outline-primary float-right btn-inline">دخول</button>
                                                    </form>
                                                </div>

                                                <div class="panel" id="admin">
                                                    <form action="{{ route('login.admin') }}" method="POST">
                                                        @csrf
                                                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                            <input type="email" name="email" class="form-control" id="user-name" placeholder="البريد الالكتروني" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-mail"></i>
                                                            </div>
                                                            <label for="user-name">البريد الالكتروني</label>
                                                            @error('email')
                                                            <span class="text-danger" id="basic-default-name-error" class="error">
                                                                {{ $message }}
                                                            </span>
                                                            @enderror
                                                        </fieldset>

                                                        <fieldset class="form-label-group position-relative has-icon-left">
                                                            <input type="password" name="password" class="form-control" id="user-password" placeholder="كلمة المرور" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-lock"></i>
                                                            </div>
                                                            <label for="user-password">كلمة المرور</label>
                                                            @error('password')
                                                            <span class="text-danger" id="basic-default-name-error" class="error">
                                                                {{ $message }}
                                                            </span>
                                                            @enderror
                                                        </fieldset>

                                                        <div class="form-group d-flex justify-content-between align-items-center">
                                                            <div class="text-left">
                                                                <fieldset class="checkbox">
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">تذكرني</span>
                                                                    </div>
                                                                </fieldset>

                                                            </div>
                                                            {{-- <div class="text-right"><a href="auth-forgot-password.html" class="card-link">نسيت كلمة السر</a></div> --}}
                                                        </div>
                                                        {{-- <a href="auth-register.html" class="btn btn-outline-primary float-left btn-inline">Register</a> --}}
                                                        <button type="submit" class="btn btn-outline-primary float-right btn-inline">دخول</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="login-footer">
                                            <div class="divider">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->


    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/wizard-steps.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <!-- END: Page JS-->


    <script>
        $('#sectionChooser').change(function(){
            var myID = $(this).val();
            $('.panel').each(function(){
                myID === $(this).attr('id') ? $(this).show() : $(this).hide();
            });
        });
    </script>


</body>
<!-- END: Body-->

</html>
