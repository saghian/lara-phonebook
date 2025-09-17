<!DOCTYPE html>
<html lang="fa" class="light-style layout-navbar-fixed layout-menu-fixed" dir="rtl" data-theme="theme-default"
    data-assets-path="/dashboard/" data-template="vertical-menu-template-starter">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>@yield('title')</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/dashboard/img/favicon/favicon.ico') }}">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('/dashboard/vendor/fonts/boxicons.css') }}">

    <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" /> -->
    <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" /> -->

    <!-- Core CSS -->
    <link rel="stylesheet" href="/dashboard/vendor/css/rtl/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="/dashboard/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css">

    {{-- <link rel="stylesheet" href="{{ asset('/dashboard/vendor/css/rtl/core.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('/dashboard/vendor/css/rtl/theme-default.css') }}" "> --}}
    <link rel="stylesheet" href="{{ asset('/dashboard/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('/dashboard/vendor/css/rtl/rtl.css') }}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/dashboard/vendor/libs/typeahead-js/typeahead.css') }} ">
    <link rel="stylesheet" href="{{ asset('/dashboard/vendor/libs/select2/select2.css') }} ">
    <link rel="stylesheet" href="{{ asset('/dashboard/vendor/libs/formvalidation/dist/css/formValidation.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('/dashboard/vendor/libs/animate-css/animate.css') }} ">
    <link rel="stylesheet" href="{{ asset('/dashboard/vendor/libs/sweetalert2/sweetalert2.css') }} ">
    @yield('style')
    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('/dashboard/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('/dashboard/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/dashboard/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="26px" height="26px" viewbox="0 0 26 26" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>آیکن</title>
                                <defs>
                                    <lineargradient x1="50%" y1="0%" x2="50%" y2="100%"
                                        id="linearGradient-1">
                                        <stop stop-color="#5A8DEE" offset="0%"></stop>
                                        <stop stop-color="#699AF9" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient x1="0%" y1="0%" x2="100%" y2="100%"
                                        id="linearGradient-2">
                                        <stop stop-color="#FDAC41" offset="0%"></stop>
                                        <stop stop-color="#E38100" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                                        <g id="Login" transform="translate(519.000000, 244.000000)">
                                            <g id="Logo" transform="translate(148.000000, 42.000000)">
                                                <g id="icon" transform="translate(0.000000, 4.000000)">
                                                    <path
                                                        d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                                        id="Combined-Shape" fill="#4880EA"></path>
                                                    <path
                                                        d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                                        id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                                                    <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0"
                                                        width="7.68181818" height="7.68181818"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2">فرست</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
                        <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-divider mt-0"></div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Dashboards">داشبوردها</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <div data-i18n="Analytics">تجزیه و تحلیل</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="dashboards-ecommerce.html" class="menu-link">
                                    <div data-i18n="eCommerce">تجارت الکترونیک</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">طرح‌ها</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="layouts-collapsed-menu.html" class="menu-link">
                                    <div data-i18n="Collapsed menu">منوی جمع شده</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-content-navbar.html" class="menu-link">
                                    <div data-i18n="Content navbar">نوار ناوبری محتوا</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
                                    <div data-i18n="Content nav + Sidebar">ناوبری محتوا + نوار کناری</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../horizontal-menu-template" class="menu-link" target="_blank">
                                    <div data-i18n="Horizontal">افقی</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-without-menu.html" class="menu-link">
                                    <div data-i18n="Without menu">بدون منو</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-without-navbar.html" class="menu-link">
                                    <div data-i18n="Without navbar">بدون نوار ناوبری</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-fluid.html" class="menu-link">
                                    <div data-i18n="Fluid">شناور</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-container.html" class="menu-link">
                                    <div data-i18n="Container">دربرگیرنده</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-blank.html" class="menu-link">
                                    <div data-i18n="Blank">خالی</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Apps & Pages -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">برنامه‌ها و
                            صفحات</span></li>
                    <li class="menu-item">
                        <a href="app-email.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-envelope"></i>
                            <div data-i18n="Email">ایمیل</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-chat.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-chat"></i>
                            <div data-i18n="Chat">گفتگو</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-calendar.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-calendar"></i>
                            <div data-i18n="Calendar">تقویم</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-kanban.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-grid"></i>
                            <div data-i18n="Kanban">تخته وظایف</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-food-menu"></i>
                            <div data-i18n="Invoice">صورتحساب</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-invoice-list.html" class="menu-link">
                                    <div data-i18n="List">لیست</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-invoice-preview.html" class="menu-link">
                                    <div data-i18n="Preview">پیش‌نمایش</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-invoice-edit.html" class="menu-link">
                                    <div data-i18n="Edit">ویرایش</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-invoice-add.html" class="menu-link">
                                    <div data-i18n="Add">افزودن</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Users">کاربران</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-user-list.html" class="menu-link">
                                    <div data-i18n="List">لیست</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="View">نمایش</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-user-view-account.html" class="menu-link">
                                            <div data-i18n="Account">حساب</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-user-view-security.html" class="menu-link">
                                            <div data-i18n="Security">امنیت</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-user-view-billing.html" class="menu-link">
                                            <div data-i18n="Billing & Plans">صورتحساب و پلن‌ها</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-user-view-notifications.html" class="menu-link">
                                            <div data-i18n="Notifications">اعلان‌ها</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-user-view-connections.html" class="menu-link">
                                            <div data-i18n="Connections">اتصالات</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-check-shield"></i>
                            <div data-i18n="Roles & Permissions">نقش‌ها و مجوزها</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-access-roles.html" class="menu-link">
                                    <div data-i18n="Roles">نقش‌ها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-access-permission.html" class="menu-link">
                                    <div data-i18n="Permission">مجوزها</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item active open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Pages">صفحات</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="User Profile">پروفایل کاربر</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="pages-profile-user.html" class="menu-link">
                                            <div data-i18n="Profile">پروفایل</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-profile-teams.html" class="menu-link">
                                            <div data-i18n="Teams">تیم‌ها</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-profile-projects.html" class="menu-link">
                                            <div data-i18n="Projects">پروژه‌ها</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-profile-connections.html" class="menu-link">
                                            <div data-i18n="Connections">اتصالات</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item active open">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Account Settings">تنظیمات حساب</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item active">
                                        <a href="pages-account-settings-account.html" class="menu-link">
                                            <div data-i18n="Account">حساب</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-account-settings-security.html" class="menu-link">
                                            <div data-i18n="Security">امنیت</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-account-settings-billing.html" class="menu-link">
                                            <div data-i18n="Billing & Plans">صورتحساب و پلن‌ها</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-account-settings-notifications.html" class="menu-link">
                                            <div data-i18n="Notifications">اعلان‌ها</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-account-settings-connections.html" class="menu-link">
                                            <div data-i18n="Connections">اتصالات</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="pages-faq.html" class="menu-link">
                                    <div data-i18n="FAQ">سوالات متداول</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Help Center">مرکز راهنمایی</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="pages-help-center-landing.html" class="menu-link">
                                            <div data-i18n="Landing">فرود</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-help-center-categories.html" class="menu-link">
                                            <div data-i18n="Categories">دسته‌بندی‌ها</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-help-center-article.html" class="menu-link">
                                            <div data-i18n="Article">مقاله</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="pages-pricing.html" class="menu-link">
                                    <div data-i18n="Pricing">قیمت گذاری</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Misc">متفرقه</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="pages-misc-error.html" class="menu-link" target="_blank">
                                            <div data-i18n="Error">خطا</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-misc-under-maintenance.html" class="menu-link"
                                            target="_blank">
                                            <div data-i18n="Under Maintenance">در دست تعمیر</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                                            <div data-i18n="Coming Soon">به زودی</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                                            <div data-i18n="Not Authorized">غیر مجاز</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user-check"></i>
                            <div data-i18n="Authentications">احراز هویت</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Login">ورود</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-login-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">پایه</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-login-cover.html" class="menu-link" target="_blank">
                                            <div data-i18n="Cover">کاور</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Register">ثبت نام</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">پایه</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-register-cover.html" class="menu-link" target="_blank">
                                            <div data-i18n="Cover">کاور</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                                            <div data-i18n="Multi-steps">چند مرحله‌ای</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Verify Email">تایید ایمیل</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">پایه</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                                            <div data-i18n="Cover">کاور</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Reset Password">بازنشانی رمز عبور</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">پایه</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                                            <div data-i18n="Cover">کاور</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Forgot Password">فراموشی رمز عبور</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">پایه</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                                            <div data-i18n="Cover">کاور</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Two Steps">دو مرحله‌ای</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">پایه</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                                            <div data-i18n="Cover">کاور</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                            <div data-i18n="Wizard Examples">نمونه‌های چند مرحله‌ای</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="wizard-ex-checkout.html" class="menu-link">
                                    <div data-i18n="Checkout">پرداخت</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="wizard-ex-property-listing.html" class="menu-link">
                                    <div data-i18n="Property Listing">لیست املاک</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="wizard-ex-create-deal.html" class="menu-link">
                                    <div data-i18n="Create Deal">ایجاد معامله</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-window-open"></i>
                            <div data-i18n="Modal Examples">نمونه‌های مودال</div>
                        </a>
                    </li>

                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">اجزاء</span></li>
                    <!-- Cards -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Cards">کارت‌ها</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="cards-basic.html" class="menu-link">
                                    <div data-i18n="Basic">پایه</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="cards-advance.html" class="menu-link">
                                    <div data-i18n="Advance">پیشرفت</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="cards-statistics.html" class="menu-link">
                                    <div data-i18n="Statistics">آمار</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="cards-analytics.html" class="menu-link">
                                    <div data-i18n="Analytics">تجزیه و تحلیل</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="cards-actions.html" class="menu-link">
                                    <div data-i18n="Actions">عمل‌ها</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- User interface -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="User interface">رابط کاربری</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="ui-accordion.html" class="menu-link">
                                    <div data-i18n="Accordion">باز و بسته شونده</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-alerts.html" class="menu-link">
                                    <div data-i18n="Alerts">هشدارها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-badges.html" class="menu-link">
                                    <div data-i18n="Badges">نشان‌ها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-buttons.html" class="menu-link">
                                    <div data-i18n="Buttons">دکمه‌ها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-carousel.html" class="menu-link">
                                    <div data-i18n="Carousel">گردونه</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-collapse.html" class="menu-link">
                                    <div data-i18n="Collapse">جمع کردن</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-dropdowns.html" class="menu-link">
                                    <div data-i18n="Dropdowns">منوهای کشویی</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-footer.html" class="menu-link">
                                    <div data-i18n="Footer">فوتر</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-list-groups.html" class="menu-link">
                                    <div data-i18n="List Groups">گروه‌های لیست</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-modals.html" class="menu-link">
                                    <div data-i18n="Modals">مودال‌ها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-navbar.html" class="menu-link">
                                    <div data-i18n="Navbar">نوار ناوبری</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-offcanvas.html" class="menu-link">
                                    <div data-i18n="Offcanvas">خارج از کادر</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                                    <div data-i18n="Pagination & Breadcrumbs">صفحه‌بندی و مسیرهای راهنما</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-progress.html" class="menu-link">
                                    <div data-i18n="Progress">پیشرفت</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-spinners.html" class="menu-link">
                                    <div data-i18n="Spinners">چرخنده‌ها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tabs-pills.html" class="menu-link">
                                    <div data-i18n="Tabs & Pills">تب‌ها و سربرگ‌ها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-toasts.html" class="menu-link">
                                    <div data-i18n="Toasts">اعلان‌های Toast</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tooltips-popovers.html" class="menu-link">
                                    <div data-i18n="Tooltips & Popovers">تولتیپ‌ها و پاپ‌اورها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-typography.html" class="menu-link">
                                    <div data-i18n="Typography">تایپوگرافی</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Extended components -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-copy"></i>
                            <div data-i18n="Extended UI">رابط کاربری توسعه یافته</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="extended-ui-avatar.html" class="menu-link">
                                    <div data-i18n="Avatar">آواتار</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-blockui.html" class="menu-link">
                                    <div data-i18n="BlockUI">رابط کاربری بلوک</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-drag-and-drop.html" class="menu-link">
                                    <div data-i18n="Drag & Drop">کشیدن و رها کردن</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-media-player.html" class="menu-link">
                                    <div data-i18n="Media Player">پخش کننده رسانه</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                                    <div data-i18n="Perfect Scrollbar">نوار اسکرول Perfect</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-star-ratings.html" class="menu-link">
                                    <div data-i18n="Star Ratings">امتیازدهی ستاره‌ای</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-sweetalert2.html" class="menu-link">
                                    <div data-i18n="SweetAlert2">هشدارهای SweetAlert2</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-text-divider.html" class="menu-link">
                                    <div data-i18n="Text Divider">جداکننده متن</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Timeline">خط زمانی</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="extended-ui-timeline-basic.html" class="menu-link">
                                            <div data-i18n="Basic">پایه</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                                            <div data-i18n="Fullscreen">تمام‌صفحه</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-tour.html" class="menu-link">
                                    <div data-i18n="Tour">تور</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-treeview.html" class="menu-link">
                                    <div data-i18n="Treeview">نمای درختی</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-misc.html" class="menu-link">
                                    <div data-i18n="Miscellaneous">متفرقه</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Icons -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-crown"></i>
                            <div data-i18n="Icons">آیکن‌ها</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="icons-boxicons.html" class="menu-link">
                                    <div data-i18n="Boxicons">آیکن‌های Boxicons</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="icons-font-awesome.html" class="menu-link">
                                    <div data-i18n="Fontawesome">آیکن‌های FontAwesome</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Forms & Tables -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">فرم‌ها و
                            جدول‌ها</span></li>
                    <!-- Forms -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Elements">المان‌های فرم</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="forms-basic-inputs.html" class="menu-link">
                                    <div data-i18n="Basic Inputs">ورودی‌های پایه</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-input-groups.html" class="menu-link">
                                    <div data-i18n="Input groups">گروه‌های ورودی</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-custom-options.html" class="menu-link">
                                    <div data-i18n="Custom Options">گزینه‌های سفارشی</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-editors.html" class="menu-link">
                                    <div data-i18n="Editors">ویرایشگرها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-file-upload.html" class="menu-link">
                                    <div data-i18n="File Upload">ارسال فایل</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-pickers.html" class="menu-link">
                                    <div data-i18n="Pickers">انتخاب‌گرها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-selects.html" class="menu-link">
                                    <div data-i18n="Select & Tags">انتخاب و برچسب‌ها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-sliders.html" class="menu-link">
                                    <div data-i18n="Sliders">اسلایدرها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-switches.html" class="menu-link">
                                    <div data-i18n="Switches">سوئیچ‌ها</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-extras.html" class="menu-link">
                                    <div data-i18n="Extras">موارد بیشتر</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Layouts">طرح‌های فرم</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="form-layouts-vertical.html" class="menu-link">
                                    <div data-i18n="Vertical Form">فرم عمودی</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="form-layouts-horizontal.html" class="menu-link">
                                    <div data-i18n="Horizontal Form">فرم افقی</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="form-layouts-sticky.html" class="menu-link">
                                    <div data-i18n="Sticky Actions">عمل‌های چسبان</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-carousel"></i>
                            <div data-i18n="Form Wizard">فرم مرحله‌ای</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="form-wizard-numbered.html" class="menu-link">
                                    <div data-i18n="Numbered">شماره دار</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="form-wizard-icons.html" class="menu-link">
                                    <div data-i18n="Icons">آیکن‌ها</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="form-validation.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-list-check"></i>
                            <div data-i18n="Form Validation">اعتبارسنجی فرم</div>
                        </a>
                    </li>
                    <!-- Tables -->
                    <li class="menu-item">
                        <a href="tables-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-table"></i>
                            <div data-i18n="Tables">جدول‌ها</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-grid"></i>
                            <div data-i18n="Datatables">جدول‌های داده</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="tables-datatables-basic.html" class="menu-link">
                                    <div data-i18n="Basic">پایه</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="tables-datatables-advanced.html" class="menu-link">
                                    <div data-i18n="Advanced">پیشرفته</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="tables-datatables-extensions.html" class="menu-link">
                                    <div data-i18n="Extensions">افزودنی‌ها</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Charts & Maps -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">نمودارها و
                            نقشه‌ها</span></li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-chart"></i>
                            <div data-i18n="Charts">نمودارها</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="charts-apex.html" class="menu-link">
                                    <div data-i18n="Apex Charts">نمودارهای Apex</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-chartjs.html" class="menu-link">
                                    <div data-i18n="ChartJS">نمودارهای ChartJS</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="maps-leaflet.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-map-alt"></i>
                            <div data-i18n="Leaflet Maps">نقشه‌های Leaflet</div>
                        </a>
                    </li>

                    <!-- Misc -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">متفرقه</span></li>
                    <li class="menu-item">
                        <a href="https://www.rtl-theme.com" target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div data-i18n="Support">پشتیبانی</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://v3dboy.ir/previews/html/frest/documentation" target="_blank"
                            class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Documentation">مستندات</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="container-fluid">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item navbar-search-wrapper mb-0">
                                    <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                        <i class="bx bx-search-alt bx-sm"></i>
                                        <span class="d-none d-md-inline-block text-muted">جستجو <span
                                                class="d-inline-block" dir="ltr">(Ctrl+/)</span></span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Search -->

                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- Language -->
                                <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown">
                                        <i class="fi fi-ir fis rounded-circle fs-3 me-1"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);" data-language="fa">
                                                <i class="fi fi-ir fis rounded-circle fs-4 me-1"></i>
                                                <span class="align-middle">فارسی</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                                                <i class="fi fi-us fis rounded-circle fs-4 me-1"></i>
                                                <span class="align-middle">انگلیسی</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                                                <i class="fi fi-fr fis rounded-circle fs-4 me-1"></i>
                                                <span class="align-middle">فرانسوی</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                                                <i class="fi fi-de fis rounded-circle fs-4 me-1"></i>
                                                <span class="align-middle">آلمانی</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                                                <i class="fi fi-pt fis rounded-circle fs-4 me-1"></i>
                                                <span class="align-middle">پرتغالی</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ Language -->

                                <!-- Style Switcher -->
                                <li class="nav-item me-2 me-xl-0">
                                    <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                                        <i class="bx bx-sm"></i>
                                    </a>
                                </li>
                                <!--/ Style Switcher -->

                                <!-- Quick links  -->
                                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="bx bx-grid-alt bx-sm"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end py-0">
                                        <div class="dropdown-menu-header border-bottom">
                                            <div class="dropdown-header d-flex align-items-center py-3">
                                                <h5 class="text-body mb-0 me-auto secondary-font">میانبرها</h5>
                                                <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="افزودن میانبر"><i class="bx bx-sm bx-plus-circle"></i></a>
                                            </div>
                                        </div>
                                        <div class="dropdown-shortcuts-list scrollable-container">
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-calendar fs-4"></i>
                                                    </span>
                                                    <a href="app-calendar.html" class="stretched-link">تقویم</a>
                                                    <small class="text-muted mb-0">قرارهای ملاقات</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-food-menu fs-4"></i>
                                                    </span>
                                                    <a href="app-invoice-list.html" class="stretched-link">برنامه
                                                        صورتحساب</a>
                                                    <small class="text-muted mb-0">مدیریت حساب‌ها</small>
                                                </div>
                                            </div>
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-user fs-4"></i>
                                                    </span>
                                                    <a href="app-user-list.html" class="stretched-link">برنامه
                                                        کاربر</a>
                                                    <small class="text-muted mb-0">مدیریت کاربران</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-check-shield fs-4"></i>
                                                    </span>
                                                    <a href="app-access-roles.html" class="stretched-link">مدیریت
                                                        نقش‌‌ها</a>
                                                    <small class="text-muted mb-0">مجوزها</small>
                                                </div>
                                            </div>
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                                                    </span>
                                                    <a href="index.html" class="stretched-link">داشبورد</a>
                                                    <small class="text-muted mb-0">پروفایل کاربر</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-cog fs-4"></i>
                                                    </span>
                                                    <a href="pages-account-settings-account.html"
                                                        class="stretched-link">تنظیمات</a>
                                                    <small class="text-muted mb-0">تنظیمات حساب</small>
                                                </div>
                                            </div>
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-help-circle fs-4"></i>
                                                    </span>
                                                    <a href="pages-help-center-landing.html"
                                                        class="stretched-link">مرکز راهنمایی</a>
                                                    <small class="text-muted mb-0">سوالات متداول و مقالات</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span
                                                        class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                        <i class="bx bx-window-open fs-4"></i>
                                                    </span>
                                                    <a href="modal-examples.html" class="stretched-link">مودال‌ها</a>
                                                    <small class="text-muted mb-0">پاپ‌آپ‌های کاربردی</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- Quick links -->

                                <!-- Notification -->
                                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="bx bx-bell bx-sm"></i>
                                        <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end py-0">
                                        <li class="dropdown-menu-header border-bottom">
                                            <div class="dropdown-header d-flex align-items-center py-3">
                                                <h5 class="text-body mb-0 me-auto secondary-font">اعلان‌ها</h5>
                                                <a href="javascript:void(0)"
                                                    class="dropdown-notifications-all text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Mark all as read"><i
                                                        class="bx fs-4 bx-envelope-open"></i></a>
                                            </div>
                                        </li>
                                        <li class="dropdown-notifications-list scrollable-container">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="../../assets/img/avatars/1.png" alt
                                                                    class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">تبریک می‌گوییم کلارک</h6>
                                                            <p class="mb-1">شما نشان فروشنده برتر ماه را برنده شدید
                                                            </p>
                                                            <small class="text-muted">1 ساعت قبل</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <span
                                                                    class="avatar-initial rounded-circle bg-label-danger">اک</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">دیوید بکهام</h6>
                                                            <p class="mb-1">درخواست شما را قبول کرد.</p>
                                                            <small class="text-muted">12 ساعت قبل</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="../../assets/img/avatars/2.png" alt
                                                                    class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">پیام جدید</h6>
                                                            <p class="mb-1">شما پیام جدید از ناتالی دارید</p>
                                                            <small class="text-muted">1 ساعت قبل</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <span
                                                                    class="avatar-initial rounded-circle bg-label-success"><i
                                                                        class="bx bx-cart"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">هورا! شما سفارش جدید دارید</h6>
                                                            <p class="mb-1">شرکت گوگل یک سفارش جدید ثبت کرد</p>
                                                            <small class="text-muted">1 روز قبل</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="../../assets/img/avatars/9.png" alt
                                                                    class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">برنامه مورد تایید قرار گرفت</h6>
                                                            <p class="mb-1">برنامه پروژه مدیریت شما پذیرفته شد.</p>
                                                            <small class="text-muted">2 روز قبل</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <span
                                                                    class="avatar-initial rounded-circle bg-label-success"><i
                                                                        class="bx bx-pie-chart-alt"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">گزارش ماهانه ایجاد شد</h6>
                                                            <p class="mb-1">گزارش ماهانه ماه خرداد ایجاد شد</p>
                                                            <small class="text-muted">3 روز قبل</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="../../assets/img/avatars/5.png" alt
                                                                    class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">ارسال درخواست ارتباط</h6>
                                                            <p class="mb-1">پیتر یک درخواست ارتباط برای شما ارسال
                                                                کرد</p>
                                                            <small class="text-muted">4 روز قبل</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="../../assets/img/avatars/6.png" alt
                                                                    class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">پیام جدید از جین</h6>
                                                            <p class="mb-1">شما پیام جدید از سمت جین دارید</p>
                                                            <small class="text-muted">5 روز قبل</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <span
                                                                    class="avatar-initial rounded-circle bg-label-warning"><i
                                                                        class="bx bx-error"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">میزان مصرف CPU بالاست</h6>
                                                            <p class="mb-1">میران مصرف CPU در حال حاضر 88.63% است
                                                            </p>
                                                            <small class="text-muted">5 روز قبل</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-menu-footer border-top">
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex justify-content-center p-3">
                                                مشاهده همه اعلان‌ها
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ Notification -->

                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="../../assets/img/avatars/1.png" alt class="rounded-circle">
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="../../assets/img/avatars/1.png" alt
                                                                class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block">جان اسنو</span>
                                                        <small>مدیر</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-profile-user.html">
                                                <i class="bx bx-user me-2"></i>
                                                <span class="align-middle">پروفایل من</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                                <i class="bx bx-cog me-2"></i>
                                                <span class="align-middle">تنظیمات</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-account-settings-billing.html">
                                                <span class="d-flex align-items-center align-middle">
                                                    <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                    <span class="flex-grow-1 align-middle">صورتحساب</span>
                                                    <span
                                                        class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-help-center-landing.html">
                                                <i class="bx bx-support me-2"></i>
                                                <span class="align-middle">راهنمایی</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-faq.html">
                                                <i class="bx bx-help-circle me-2"></i>
                                                <span class="align-middle">سوالات متداول</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-pricing.html">
                                                <i class="bx bx-dollar me-2"></i>
                                                <span class="align-middle">قیمت گذاری</span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">خروج</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ User -->
                            </ul>
                        </div>

                        <!-- Search Small Screens -->
                        <div class="navbar-search-wrapper search-input-wrapper d-none">
                            <input type="text" class="form-control search-input container-fluid border-0"
                                placeholder="جستجو ..." aria-label="Search...">
                            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                        </div>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 breadcrumb-wrapper mb-4">
                            <span class="text-muted fw-light">تنظیمات حساب /</span> حساب
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                                    <li class="nav-item">
                                        <a class="nav-link active my-1 my-md-0" href="javascript:void(0);"><i
                                                class="bx bx-user me-1"></i> حساب</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-account-settings-security.html"><i
                                                class="bx bx-lock-alt me-1"></i> امنیت</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-account-settings-billing.html"><i
                                                class="bx bx-detail me-1"></i> صورتحساب و پلن‌ها</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-account-settings-notifications.html"><i
                                                class="bx bx-bell me-1"></i> اعلان‌ها</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-account-settings-connections.html"><i
                                                class="bx bx-link-alt me-1"></i> اتصالات</a>
                                    </li>
                                </ul>
                                <div class="card mb-4">
                                    <h5 class="card-header heading-color">جزئیات پروفایل</h5>
                                    <!-- Account -->
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img src="../../assets/img/avatars/1.png" alt="user-avatar"
                                                class="d-block rounded" height="100" width="100"
                                                id="uploadedAvatar">
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-primary me-2 mb-4"
                                                    tabindex="0">
                                                    <span class="d-none d-sm-block">ارسال تصویر جدید</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input type="file" id="upload"
                                                        class="account-file-input" hidden
                                                        accept="image/png, image/jpeg">
                                                </label>
                                                <button type="button"
                                                    class="btn btn-label-secondary account-image-reset mb-4">
                                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">بازنشانی</span>
                                                </button>

                                                <p class="mb-0">فایل‌های JPG، GIF یا PNG مجاز هستند. حداکثر اندازه
                                                    فایل 800KB.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body">
                                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="firstName" class="form-label">نام</label>
                                                    <input class="form-control" type="text" id="firstName"
                                                        name="firstName" value="جان" autofocus>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="lastName" class="form-label">نام خانوادگی</label>
                                                    <input class="form-control" type="text" name="lastName"
                                                        id="lastName" value="اسنو">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="email" class="form-label">ایمیل</label>
                                                    <input class="form-control text-start" type="text"
                                                        id="email" name="email" value="john.doe@example.com"
                                                        placeholder="john.doe@example.com" dir="ltr">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="organization" class="form-label">سازمان</label>
                                                    <input type="text" class="form-control" id="organization"
                                                        name="organization" value="مایکروسافت">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label" for="phoneNumber">شماره تلفن</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="phoneNumber" name="phoneNumber"
                                                            class="form-control text-start"
                                                            placeholder="202 555 0111" dir="ltr">
                                                        <span class="input-group-text">IR (+98)</span>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="address" class="form-label">آدرس</label>
                                                    <input type="text" class="form-control" id="address"
                                                        name="address" placeholder="آدرس">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="state" class="form-label">استان</label>
                                                    <input class="form-control" type="text" id="state"
                                                        name="state" placeholder="آذربایجان شرقی">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="zipCode" class="form-label">کد پستی</label>
                                                    <input type="text" class="form-control text-start"
                                                        id="zipCode" name="zipCode" placeholder="231465"
                                                        maxlength="6" dir="ltr">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label" for="country">کشور</label>
                                                    <select id="country" class="select2 form-select">
                                                        <option value="">انتخاب</option>
                                                        <option value="Australia">استرالیا</option>
                                                        <option value="Bangladesh">بنگلادش</option>
                                                        <option value="Belarus">بلاروس</option>
                                                        <option value="Brazil">برزیل</option>
                                                        <option value="Canada">کانادا</option>
                                                        <option value="China">چین</option>
                                                        <option value="France">فرانسه</option>
                                                        <option value="Germany">آلمان</option>
                                                        <option value="India">هندوستان</option>
                                                        <option value="Indonesia">اندونزی</option>
                                                        <option value="Israel">اسرائیل</option>
                                                        <option value="Italy">ایتالیا</option>
                                                        <option value="Japan">ژاپن</option>
                                                        <option value="Korea">کره جنوبی</option>
                                                        <option value="Mexico">مکزیک</option>
                                                        <option value="Philippines">فیلیپین</option>
                                                        <option value="Russia">روسیه</option>
                                                        <option value="South Africa">آفریقای جنوبی</option>
                                                        <option value="Thailand">تایلند</option>
                                                        <option value="Turkey">ترکیه</option>
                                                        <option value="Ukraine">اوکراین</option>
                                                        <option value="United Arab Emirates">امارات</option>
                                                        <option value="United Kingdom">انگلستان</option>
                                                        <option value="United States">ایالات متحده</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="language" class="form-label">زبان</label>
                                                    <select id="language" class="select2 form-select">
                                                        <option value="">انتخاب زبان</option>
                                                        <option value="en">انگلیسی</option>
                                                        <option value="fr">فرانسوی</option>
                                                        <option value="de">آلمانی</option>
                                                        <option value="pt">پرتغالی</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="timeZones" class="form-label">ناحیه زمانی</label>
                                                    <select id="timeZones" class="select2 form-select">
                                                        <option value="">انتخاب ناحیه زمانی</option>
                                                        <option value="-12">(GMT-12:00) خط زمانی بین المللی غربی
                                                        </option>
                                                        <option value="-11">(GMT-11:00) جزیره میدوی</option>
                                                        <option value="-10">(GMT-10:00) هاوایی</option>
                                                        <option value="-9">(GMT-09:00) آلاسکا</option>
                                                        <option value="-8">(GMT-08:00) آمریکا و کانادا</option>
                                                        <option value="-8">(GMT-08:00) کالیفرنیا</option>
                                                        <option value="-7">(GMT-07:00) آریزونا</option>
                                                        <option value="-7">لورم ایپسوم متن ساختگی با تولید سادگی
                                                            نامفهوم</option>
                                                        <option value="-7">(GMT-07:00) اقیانوسیه</option>
                                                        <option value="-6">لورم ایپسوم متن ساختگی با تولید
                                                        </option>
                                                        <option value="-6">(GMT-06:00) استرالیا</option>
                                                        <option value="-6">لورم ایپسوم متن ساختگی با تولید سادگی
                                                            نامفهوم از</option>
                                                        <option value="-6">لورم ایپسوم متن ساختگی با</option>
                                                        <option value="-5">لورم ایپسوم متن ساختگی با تولید سادگی
                                                            نامفهوم</option>
                                                        <option value="-5">(GMT-05:00) اروپا</option>
                                                        <option value="-5">(GMT-05:00) خاورمیانه</option>
                                                        <option value="-4">لورم ایپسوم متن ساختگی با تولید سادگی
                                                        </option>
                                                        <option value="-4">لورم ایپسوم متن ساختگی با تولید
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="currency" class="form-label">واحد پول</label>
                                                    <select id="currency" class="select2 form-select">
                                                        <option value="">انتخاب واحد پول</option>
                                                        <option value="usd">دلار</option>
                                                        <option value="euro">یورو</option>
                                                        <option value="pound">پوند</option>
                                                        <option value="bitcoin">بیت کوین</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">ذخیره
                                                    تغییرات</button>
                                                <button type="reset"
                                                    class="btn btn-label-secondary">انصراف</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /Account -->
                                </div>
                                <div class="card">
                                    <h5 class="card-header heading-color">حذف حساب</h5>
                                    <div class="card-body">
                                        <div class="mb-3 col-12 mb-0">
                                            <div class="alert alert-warning">
                                                <h6 class="alert-heading mb-1">آیا از حذف حساب خود اطمینان دارید؟</h6>
                                                <p class="mb-0">در صورتی که حساب خود را حذف کنید، بازگشتی وجود
                                                    نخواهد داشت. لطفا مطمئن باشید.</p>
                                            </div>
                                        </div>
                                        <form id="formAccountDeactivation" onsubmit="return false">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox"
                                                    name="accountActivation" id="accountActivation">
                                                <label class="form-check-label" for="accountActivation">من غیرفعال
                                                    کردن حساب خود را تایید می‌کنم</label>
                                            </div>
                                            <button type="submit" class="btn btn-danger deactivate-account">غیرفعال
                                                کردن حساب</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-fluid d-flex flex-wrap justify-content-between py-3 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                طراحی شده با ❤️ ارائه شده در وب‌سایت
                                <a href="https://rtl-theme.com" target="_blank"
                                    class="footer-link fw-semibold">راست‌چین</a>
                            </div>
                            <div>
                                <a href="https://rtl-theme.com" class="footer-link me-4"
                                    target="_blank">لایسنس</a>
                                <a href="https://rtl-theme.com" target="_blank" class="footer-link me-4">قالب‌های
                                    بیشتر</a>

                                <a href="https://v3dboy.ir/previews/html/frest/documentation" target="_blank"
                                    class="footer-link me-4">مستندات</a>

                                <a href="https://rtl-theme.com" target="_blank"
                                    class="footer-link d-none d-sm-inline-block">پشتیبانی</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('/dashboard/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('/dashboard/vendor/libs/hammer/hammer.js') }}"></script>

    <script src="{{ asset('/dashboard/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    <script src="{{ asset('/dashboard/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('/dashboard/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/libs/select2/i18n/fa.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/libs/cleavejs/cleave-phone.js') }} "></script>
    <script src="{{ asset('/dashboard/vendor/libs/sweetalert2/sweetalert2.js') }} "></script>

    <!-- Main JS -->
    <script src="{{ asset('/dashboard/js/main.js') }}"></script>

    <!-- Page JS -->
    {{-- <script src="../../assets/js/pages-account-settings-account.js"></script> --}}
    <script src="{{ asset('/dashboard/js/pages-account-settings-account.js') }}"></script>
</body>

</html>
