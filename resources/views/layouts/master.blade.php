<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            Metronic | Dashboard
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
        <link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors -->
        <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            @include('layouts.includes.header')       
            <!-- Header here -->

        <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                <!-- BEGIN: Left Aside -->
                <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                    <i class="la la-close"></i>
                </button>
                <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
                    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true"
         data-menu-scrollable="false" data-menu-dropdown-timeout="500">
                        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                            <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                                <a  href="index.html" class="m-menu__link ">
                                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                                    <span class="m-menu__link-title">
                                        <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                Dashboard
                                            </span>
                                            <span class="m-menu__link-badge">
                                                <span class="m-badge m-badge--danger">
                                                    2
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-menu__section">
                                <h4 class="m-menu__section-text">
                                    Components
                                </h4>
                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-layers"></i>
                                    <span class="m-menu__link-text">
                                        Base
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Base
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/state.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    State Colors
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/typography.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Typography
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/stack.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Stack
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/tables.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tables
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/progress.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Progress
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/modal.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Modal
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/alerts.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Alerts
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/popover.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Popover
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/tooltip.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tooltip
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/blockui.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Block UI
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/spinners.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Spinners
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/scrollable.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Scrollable
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/dropdown.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Dropdown
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tabs
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/base/tabs/bootstrap.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Bootstrap Tabs
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/base/tabs/line.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Line Tabs
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/accordions.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Accordions
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/navs.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Navs
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/lists.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Lists
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/treeview.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tree View
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/bootstrap-notify.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Bootstrap Notify
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/toastr.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Toastr
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/base/sweetalert2.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    SweetAlert2
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-share"></i>
                                    <span class="m-menu__link-text">
                                        Icons
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/icons/flaticon.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Flaticon
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/icons/fontawesome.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Fontawesome
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/icons/lineawesome.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Lineawesome
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/icons/socicons.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Socicons
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-multimedia-1"></i>
                                    <span class="m-menu__link-text">
                                        Buttons
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Buttons
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Button Base
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/buttons/base/default.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Default Style
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/buttons/base/square.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Square Style
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/buttons/base/pill.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Pill Style
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/buttons/base/air.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Air Style
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/buttons/group.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Button Group
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/buttons/dropdown.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Button Dropdown
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Button Icon
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/buttons/icon/lineawesome.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Lineawesome Icons
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/buttons/icon/fontawesome.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Fontawesome Icons
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/buttons/icon/flaticon.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Flaticon Icons
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-interface-7"></i>
                                    <span class="m-menu__link-text">
                                        Forms
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Forms
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Form Controls
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/controls/base.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Base Inputs
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/controls/checkbox-radio.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Checkbox & Radio
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/controls/switch.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Switch
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/controls/input-group.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Input Groups
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Form Widgets
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/bootstrap-datepicker.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Datepicker
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/bootstrap-datetimepicker.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Datetimepicker
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/bootstrap-timepicker.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Timepicker
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/bootstrap-daterangepicker.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Daterangepicker
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/bootstrap-touchspin.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Touchspin
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/bootstrap-maxlength.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Maxlength
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/bootstrap-switch.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Switch
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/bootstrap-multipleselectsplitter.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Multiple Select Splitter
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/bootstrap-select.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Bootstrap Select
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/select2.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Select2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/typeahead.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Typeahead
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/nouislider.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                noUiSlider
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/form-repeater.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Form Repeater
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/ion-range-slider.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Ion Range Slider
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/input-mask.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Input Masks
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/summernote.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Summernote WYSIWYG
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/bootstrap-markdown.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Markdown Editor
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/autosize.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Autosize
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/clipboard.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Clipboard
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/dropzone.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Dropzone
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/widgets/recaptcha.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Google reCaptcha
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Form Layouts
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/layouts/default-forms.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Default Forms
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/layouts/multi-column-forms.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Multi Column Forms
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/layouts/action-bars.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Action Bars
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Form Validation
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/validation/states.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Validation States
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/validation/form-controls.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Form Controls
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/validation/form-widgets.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Form Widgets
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Form Wizard
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/wizard/wizard-1.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Form Wizard 1
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/wizard/wizard-2.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Form Wizard 2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/wizard/wizard-3.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Form Wizard 3
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/forms/wizard/wizard-4.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Form Wizard 4
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-tabs"></i>
                                    <span class="m-menu__link-text">
                                        Datatables
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Datatables
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Base
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/base/data-local.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Local Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/base/data-json.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                JSON Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/base/data-ajax.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Ajax Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/base/html-table.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                HTML Table
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/base/record-selection.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Record Selection
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/base/local-sort.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Local Sort
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/base/row-details.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Row Details
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/base/column-rendering.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Column Rendering
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/base/column-width.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Column Width
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/base/responsive-columns.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Responsive Columns
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/base/translation.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Translation
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Scrolling
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/scrolling/vertical.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Vertical Scrolling
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/scrolling/horizontal.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Horizontal Scrolling
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/scrolling/both.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Both Scrolling
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Locked Columns
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/locked/left.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Left Locked Columns
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/locked/right.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Right Locked Columns
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/locked/both.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Both Locked Columns
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/locked/html-table.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                HTML Table
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Child Datatables
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/child/data-local.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Local Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/child/data-ajax.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Remote Data
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    API
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/api/methods.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                API Methods
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/datatables/api/events.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Events
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-interface-1"></i>
                                    <span class="m-menu__link-text">
                                        Portlets
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Portlets
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/portlets/base.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Base Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/portlets/advanced.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Advanced Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/portlets/creative.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Creative Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/portlets/tabbed.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Tabbed Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/portlets/draggable.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Draggable Portlets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/portlets/tools.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Portlet Tools
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-interface-6"></i>
                                    <span class="m-menu__link-text">
                                        Timeline
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Timeline
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/timeline/timeline-1.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Timeline 1
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/timeline/timeline-2.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Timeline 2
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-network"></i>
                                    <span class="m-menu__link-text">
                                        Widgets
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Widgets
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/widgets/general.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    General Widgets
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/widgets/chart.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Chart Widgets
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-calendar"></i>
                                    <span class="m-menu__link-text">
                                        Calendar
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Calendar
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/calendar/basic.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Basic Calendar
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/calendar/list-view.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    List Views
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/calendar/google.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Google Calendar
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/calendar/external-events.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    External Events
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/calendar/background-events.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Background Events
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-diagram"></i>
                                    <span class="m-menu__link-text">
                                        Charts
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Charts
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    amCharts
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/charts/amcharts/charts.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                amCharts Charts
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/charts/amcharts/stock-charts.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                amCharts Stock Charts
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="components/charts/amcharts/maps.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                amCharts Maps
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/charts/flotcharts.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Flot Charts
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/charts/google-charts.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Google Charts
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/charts/morris-charts.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Morris Charts
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-placeholder-1"></i>
                                    <span class="m-menu__link-text">
                                        Maps
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Maps
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/maps/google-maps.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Google Maps
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/maps/jqvmap.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    JQVMap
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-signs-2"></i>
                                    <span class="m-menu__link-text">
                                        Utils
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Utils
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/utils/session-timeout.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Session Timeout
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true" >
                                            <a  href="components/utils/idle-timer.html" class="m-menu__link ">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Idle Timer
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__section">
                                <h4 class="m-menu__section-text">
                                    Snippets
                                </h4>
                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-interface-3"></i>
                                    <span class="m-menu__link-text">
                                        General
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    General
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Pricing Tables
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="snippets/general/pricing-tables/pricing-table-1.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Pricing Tables v1
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="snippets/general/pricing-tables/pricing-table-2.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Pricing Tables v2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="snippets/general/pricing-tables/pricing-table-3.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Pricing Tables v3
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a  href="snippets/general/pricing-tables/pricing-table-4.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Pricing Tables v4
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon flaticon-suitcase"></i>
                                    <span class="m-menu__link-text">
                                        Custom Pages
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                            <span class="m-menu__link">
                                                <span class="m-menu__link-text">
                                                    Custom Pages
                                                </span>
                                            </span>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    User Pages
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="snippets/pages/user/login-1.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 1
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="snippets/pages/user/login-2.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="snippets/pages/user/login-3.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 3
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="snippets/pages/user/login-4.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 4
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="snippets/pages/user/login-5.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Login - 5
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                            <a  href="#" class="m-menu__link m-menu__toggle">
                                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                    <span></span>
                                                </i>
                                                <span class="m-menu__link-text">
                                                    Error Pages
                                                </span>
                                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            <div class="m-menu__submenu ">
                                                <span class="m-menu__arrow"></span>
                                                <ul class="m-menu__subnav">
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="snippets/pages/errors/error-1.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 1
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="snippets/pages/errors/error-2.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 2
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="snippets/pages/errors/error-3.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 3
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="snippets/pages/errors/error-4.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 4
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="snippets/pages/errors/error-5.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 5
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-menu__item " aria-haspopup="true" >
                                                        <a target="_blank" href="snippets/pages/errors/error-6.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                Error 6
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END: Aside Menu -->
                </div>
                <!-- END: Left Aside -->
                <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    <!-- BEGIN: Subheader -->
                    <div class="m-subheader ">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title ">
                                    Dashboard
                                </h3>
                            </div>
                            <div>
                                <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                                    <span class="m-subheader__daterange-label">
                                        <span class="m-subheader__daterange-title"></span>
                                        <span class="m-subheader__daterange-date m--font-brand"></span>
                                    </span>
                                    <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                                        <i class="la la-angle-down"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- END: Subheader -->
                    <div class="m-content">
                        <!-- content here -->
                    </div>
                </div>
            </div>
            <!-- end:: Body -->
            <!-- footer here  -->
        </div>
        <!-- end:: Page -->
        @include('layouts.includes.sidebar')            
        <!-- begin::Scroll Top -->
        <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end::Scroll Top -->            <!-- begin::Quick Nav -->
        <ul class="m-nav-sticky" style="margin-top: 30px;">
            <!--
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
                <a href="">
                    <i class="la la-eye"></i>
                </a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
                <a href="" >
                    <i class="la la-comments-o"></i>
                </a>
            </li>
            -->
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">
                    <i class="la la-cart-arrow-down"></i>
                </a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
                <a href="http://keenthemes.com/metronic/documentation.html" target="_blank">
                    <i class="la la-code-fork"></i>
                </a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
                <a href="http://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
                    <i class="la la-life-ring"></i>
                </a>
            </li>
        </ul>
        <!-- begin::Quick Nav -->   
        <!--begin::Base Scripts -->
        <script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Base Scripts -->   
        <!--begin::Page Vendors -->
        <script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
        <!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
        <script src="assets/app/js/dashboard.js" type="text/javascript"></script>
        <!--end::Page Snippets -->
    </body>
    <!-- end::Body -->
</html>
