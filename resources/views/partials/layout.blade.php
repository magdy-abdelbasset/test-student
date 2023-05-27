<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> {{ config('app.name') }} | Dashboard </title>
    <meta name="description" content="
                Metronic admin dashboard live demo. Check out all the features of the admin panel.
                A large number of settings, additional services and widgets.
            " />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <!-- End::Fonts -->

    <!-- Begin::Page Vendors Styles(used by this page) -->
    <link href="{{ asset('assets/backend/css/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css">
    <!-- End::Page Vendors Styles(used by this page) -->

    <!-- Begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('assets/backend/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/prismjs.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css">
    <!-- End::Global Theme Styles(used by all pages) -->

    <!-- Begin::Layout Themes(used by all pages) -->
    <link href="{{ asset('assets/backend/css/base-light.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/menu-light.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/brand-light.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/aside-light.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/custom-used.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/custom.css') }}" rel="stylesheet" type="text/css">
    <!-- End::Layout Themes(used by all pages) -->

    <!-- Favicons -->
    <link href="{{ asset('assets/frontend/images/favicon.png') }}" rel="icon">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">

</head>

<body id="kt_body" class="
            header-fixed header-mobile-fixed subheader-enabled subheader-fixed
            aside-enabled aside-fixed aside-minimize-hoverable
        ">
    <!-- Begin::Content Of Body -->
    <!-- Begin::Header Mobile -->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!-- Begin::Logo -->
        <a href="{{ route('dashboard.index') }}">
            <img alt="Logo" src="{{ asset('assets/frontend/images/logo.png') }}" height="55" />
        </a>
        <!-- End::Logo -->
        <!-- Begin::Toolbar -->
        <div class="d-flex align-items-center">
            <!-- Begin::Aside Mobile Toggle -->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!-- End::Aside Mobile Toggle -->
            <!-- Begin::Top Bar Mobile Toggle -->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path d="
                                            M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7
                                            C16,9.209139 14.209139,11 12,11 Z
                                        " fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path d="
                                            M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13
                                            20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21
                                            C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21
                                            2.97953825,20.45918 3.00065168,20.1992055 Z
                                        " fill="#000000" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!-- end::Top Bar Mobile Toggle -->
        </div>
        <!-- End::Toolbar -->
    </div>
    <!-- End::Header Mobile -->
    <div class="d-flex flex-column flex-root">
        <!-- Begin::Page -->
        <div class="d-flex flex-row flex-column-fluid page">
            <!-- Begin::Aside -->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand" kt-hidden-height="65" style="">
                    <!-- Begin::Logo -->
                    <a href="" class="brand-logo">
                        <img alt="Logo" src="{{ asset('assets/frontend/images/logo-light.png') }}" height="50" />
                    </a>
                    <!-- End::Logo -->
                    <!-- Begin::Toggle -->
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle" style="background: #1e1e2d;">

                        <span class="svg-icon svg-icon svg-icon-xl">

                            <!-- Begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg -->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="
                                                        M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391
                                                        5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532
                                                        6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686
                                                        13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721
                                                        C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505
                                                        C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718
                                                        L10.6158586,12.0300721 L5.29288961,6.70710318 Z
                                                    " fill="#000000" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)">
                                    </path>
                                    <path d="
                                                        M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311
                                                        9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175
                                                        9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428
                                                        16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459
                                                        C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246
                                                        C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541
                                                        L16.0300699,10.3841378 L10.7071009,15.7071068 Z
                                                    " fill="#000000" fill-rule="nonzero" opacity="0.3" transform="
                                                        translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000)
                                                        translate(-15.999997, -11.999999)
                                                    "></path>
                                </g>
                            </svg>
                            <!-- End::Svg Icon -->
                        </span>
                    </button>
                    <!-- End::Toolbar -->
                </div>
                <!-- End::Brand -->
                <!-- Begin::Aside Menu -->
                <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                    <!-- Begin::Menu Container -->
                    <style>
                        @media (max-width: 500px) {
                            #kt_aside_menu {
                                overflow: auto !important;
                            }
                        }
                    </style>
                    <div id="kt_aside_menu" class="aside-menu my-4 scroll ps ps--active-y" data-menu-vertical="1"
                        data-menu-scroll="1" data-menu-dropdown-timeout="500" style="height: 253px; overflow: hidden;">
                        <!-- Begin::Menu Nav -->
                        <ul class="menu-nav">
                            @include('backend.partials.sidebarMenu')
                        </ul>
                        <!-- End::Menu Nav -->
                    </div>
                    <!-- End::Menu Container -->
                </div>
                <!-- End::Aside Menu -->
            </div>
            <!-- End::Aside -->
            <!-- Begin::Wrapper -->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!-- Begin::Header -->
                <div id="kt_header" class="header header-fixed">
                    <!-- Begin::Container -->
                    <div class="container-fluid d-flex align-items-stretch justify-content-end">
                        <!-- Begin::Top Bar -->
                        <div class="topbar">
                            <!-- Begin::User -->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                    id="kt_quick_user_toggle">
                                    <span
                                        class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{
                                        ucwords(auth('admin')->user()->username) }}</span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">{{
                                            ucwords(substr(auth('admin')->user()->username, 0, 1)) }}</span>
                                    </span>
                                </div>
                            </div>
                            <!-- End::User -->
                        </div>
                        <!-- End::TopBar -->
                    </div>
                    <!-- End::Container -->
                </div>
                <!-- End::Header -->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!-- Begin::Subheader -->
                    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                        <div
                            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!-- Begin::Info -->
                            <div class="d-flex align-items-center flex-wrap mr-2 mt-3">
                                <!-- Begin::Page Title -->
                                <h5 class="font-weight-bold mt-2 mb-2 mr-5" style="color : #112d68">
                                    @yield('page_title') </h5>
                                <!-- End::Page Title -->
                                <!-- Begin::Next To Page Title -->
                                @yield('next_page_title')
                                <!-- End::Next To Page Title -->
                            </div>
                            <!-- End::Info -->
                        </div>
                    </div>
                    <!-- End::Subheader -->
                    <!-- Begin::Entry -->
                    <div class="d-flex flex-column-fluid">
                        <!-- Begin::Container -->
                        <div class="container">
                            <!-- Begin::Dashboard -->
                            @yield('content')
                            <!-- End::Dashboard -->
                        </div>
                        <!-- End::Container -->
                    </div>
                    <!-- End::Entry -->
                </div>
                <!--end::Content-->
            </div>
            <!-- End::Wrapper -->
        </div>
        <!-- End::Page -->
    </div>
    <!-- Begin::User Panel -->
    <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
        <!-- Begin::Header -->
        <div class="
                        offcanvas-header
                        d-flex
                        align-items-center
                        justify-content-between
                        pb-5
                    " kt-hidden-height="40" style="">
            <div class="dropdown bootstrap-select form-control show d-none dropup" style="width: fit-content;">
                <select class="form-control selectpicker" name="language" id="admin-language"
                    title="{{__('crud.choose_one')  }}" tabindex="null">
                    <option value="ar" @if(auth('admin')->user()->language == 'ar') selected @endif
                        >AR</option>
                    <option value="en" @if(auth('admin')->user()->language == 'en') selected @endif
                        >EN</option>
                </select>
            </div>
            <h3 class="font-weight-bold m-0"> User Profile </h3>
        
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!-- End::Header -->
        <!-- Begin::Content -->
        <div class="
                        offcanvas-content
                        pr-5
                        mr-n5
                        scroll
                        ps
                        ps--active-y
                    " style="height: 238px; overflow: hidden;">
            <!-- Begin::Header -->
            <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-100 mr-5">
                    <div class="symbol-label"
                        style="background-image:url({{ asset('assets/backend/images/300_21.jpg') }})"></div>
                </div>
                <div class="d-flex flex-column">
                    <a class="
                                    font-weight-bold
                                    font-size-h5
                                    text-dark-75
                                    text-hover-primary
                                "> {{ auth('admin')->user()->username }} </a>
                    <div class="text-muted mt-1">Admin Of Dashboard</div>
                    <div class="navi mt-2">
                        <a class="navi-item">
                            <span class="navi-link p-0 pb-2">
                                <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <!-- Begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="
                                                                M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12
                                                                C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915
                                                                14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305
                                                                3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584
                                                                Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668
                                                                C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513
                                                                C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332
                                                                L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822
                                                                12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475
                                                                19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206
                                                                18.5091282,7.6432681 18.1444251,7.83964668 Z
                                                            " fill="#000000"></path>
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5">
                                                </circle>
                                            </g>
                                        </svg>
                                        <!-- End::Svg Icon -->
                                    </span>
                                </span>
                                <span class="navi-text text-muted text-hover-primary">{{ auth('admin')->user()['email']
                                    }}</span>
                            </span>
                        </a>
                        <a href="{{ route('dashboard.logout') }}"
                            class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5"> Log Out </a>

                    </div>
                </div>
            </div>
            <!-- End::Header -->
            <!-- Begin::Separator -->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!-- End::Separator -->
        </div>
        <!-- End::Content -->
    </div>
    <!-- End::User Panel -->
    <!-- End::Content Of Body -->
    <!-- Begin::Scripts -->
    <!-- Begin::Global Config(global config for global JS scripts) -->
    <script>
        let HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
                let KTAppSettings = {
                    "breakpoints": {
                        "sm": 576,
                        "md": 768,
                        "lg": 992,
                        "xl": 1200,
                        "xxl": 1400
                    },
                    "colors": {
                        "theme": {
                            "base": {
                                "white": "#ffffff",
                                "primary": "#3699FF",
                                "secondary": "#E5EAEE",
                                "success": "#1BC5BD",
                                "info": "#8950FC",
                                "warning": "#FFA800",
                                "danger": "#F64E60",
                                "light": "#E4E6EF",
                                "dark": "#181C32"
                            },
                            "light": {
                                "white": "#ffffff",
                                "primary": "#E1F0FF",
                                "secondary": "#EBEDF3",
                                "success": "#C9F7F5",
                                "info": "#EEE5FF",
                                "warning": "#FFF4DE",
                                "danger": "#FFE2E5",
                                "light": "#F3F6F9",
                                "dark": "#D6D6E0"
                            },
                            "inverse": {
                                "white": "#ffffff",
                                "primary": "#ffffff",
                                "secondary": "#3F4254",
                                "success": "#ffffff",
                                "info": "#ffffff",
                                "warning": "#ffffff",
                                "danger": "#ffffff",
                                "light": "#464E5F",
                                "dark": "#ffffff"
                            }
                        },
                        "gray": {
                            "gray-100": "#F3F6F9",
                            "gray-200": "#EBEDF3",
                            "gray-300": "#E4E6EF",
                            "gray-400": "#D1D3E0",
                            "gray-500": "#B5B5C3",
                            "gray-600": "#7E8299",
                            "gray-700": "#5E6278",
                            "gray-800": "#3F4254",
                            "gray-900": "#181C32"
                        }
                    },
                    "font-family": "Poppins"
                };
    </script>

    {{-- <script src="{{ asset('js/app.js')}}"></script> --}}

    <!-- End::Global Config -->

    <script src="{{ asset('assets/backend/js/prismjs.bundle.js') }}"></script>
    <!-- Begin::Global Theme Bundle(used by all pages) -->
    {{-- <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script> --}}
    <script src="{{  asset('js/app.js') }}" type="text/javascript"></script>


    {{-- <script src="{{  asset('js/jquery-ui-git.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"
        integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('assets/backend/js/plugins.bundle.js') }}"></script>






    <script src="{{ asset('assets/backend/js/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/backend/js/scripts.bundle.js') }}"></script>
    <!-- End::Global Theme Bundle -->
    <!-- Begin::Page Vendors(used by this page) -->
    <script src="{{ asset('assets/backend/js/fullcalendar.bundle.js') }}"></script>
    <!-- End::Page Vendors -->
    <!-- Begin::Page Scripts(used by this page) -->
    <script src="{{ asset('assets/backend/js/widgets.js') }}"></script>
    <!-- End::Page Scripts -->
    <!-- Begin::Page Scripts(used by this page) -->
    <script src="{{ asset('assets/backend/js/bootstrap-datepicker.js') }}"></script>
    <!-- End::Page Scripts -->
    <!-- Begin::Page Scripts(used by this page) -->
    <script src="{{ asset('assets/backend/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/backend/js/select2.js') }}"></script>
    <!-- End::Page Scripts -->
    <!-- Begin::Custom JS -->
    <script src="{{ asset('assets/backend/js/custom-video-preview.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom-image-preview.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom-checkbox.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom-ajax.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom.js') }}"></script>

    <script src="{{  asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/buttons.server-side.js')}}"></script>


    <!-- End::Custom JS -->
    @yield('scripts')
    <!-- End::Scripts -->
</body>

</html>