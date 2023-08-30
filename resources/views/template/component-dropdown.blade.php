<!-- import-template -->
@extends('layouts.mazer')

<!-- import-library -->
@push('header')
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">
@endpush

<!-- main -->
@section('main')
    <div id="app">
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo" srcset=""></a>
                </div>
                <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                    <div class="form-check form-switch fs-6">
                        <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                        <label class="form-check-label" ></label>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
                </div>
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                
                <li
                    class="sidebar-item  ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li
                    class="sidebar-item active has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Components</span>
                    </a>
                    <ul class="submenu active">
                        <li class="submenu-item ">
                            <a href="component-alert.html">Alert</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-badge.html">Badge</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-breadcrumb.html">Breadcrumb</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-button.html">Button</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-card.html">Card</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-carousel.html">Carousel</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-collapse.html">Collapse</a>
                        </li>
                        <li class="submenu-item active">
                            <a href="component-dropdown.html">Dropdown</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-list-group.html">List Group</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-modal.html">Modal</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-navs.html">Navs</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-pagination.html">Pagination</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-progress.html">Progress</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-spinner.html">Spinner</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-tooltip.html">Tooltip</a>
                        </li>
                    </ul>
                </li>
                
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Extra Components</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="extra-component-avatar.html">Avatar</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-sweetalert.html">Sweet Alert</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-toastify.html">Toastify</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-rating.html">Rating</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="extra-component-divider.html">Divider</a>
                        </li>
                    </ul>
                </li>
                
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="layout-default.html">Default Layout</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-vertical-1-column.html">1 Column</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-vertical-navbar.html">Vertical Navbar</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-rtl.html">RTL Layout</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-horizontal.html">Horizontal Menu</a>
                        </li>
                    </ul>
                </li>
                
                <li class="sidebar-title">Forms &amp; Tables</li>
                
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Form Elements</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="form-element-input.html">Input</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-element-input-group.html">Input Group</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-element-select.html">Select</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-element-radio.html">Radio</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-element-checkbox.html">Checkbox</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-element-textarea.html">Textarea</a>
                        </li>
                    </ul>
                </li>
                
                <li
                    class="sidebar-item  ">
                    <a href="form-layout.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Form Layout</span>
                    </a>
                </li>
                
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-journal-check"></i>
                        <span>Form Validation</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="form-validation-parsley.html">Parsley</a>
                        </li>
                    </ul>
                </li>
                
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-pen-fill"></i>
                        <span>Form Editor</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="form-editor-quill.html">Quill</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-editor-ckeditor.html">CKEditor</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-editor-summernote.html">Summernote</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-editor-tinymce.html">TinyMCE</a>
                        </li>
                    </ul>
                </li>
                
                <li
                    class="sidebar-item  ">
                    <a href="table.html" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Table</span>
                    </a>
                </li>
                
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Datatables</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="table-datatable.html">Datatable</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="table-datatable-jquery.html">Datatable (jQuery)</a>
                        </li>
                    </ul>
                </li>
                
                <li class="sidebar-title">Extra UI</li>
                
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-pentagon-fill"></i>
                        <span>Widgets</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="ui-widgets-chatbox.html">Chatbox</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="ui-widgets-pricing.html">Pricing</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="ui-widgets-todolist.html">To-do List</a>
                        </li>
                    </ul>
                </li>
                
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-egg-fill"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="ui-icons-fontawesome.html">Fontawesome</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="ui-icons-dripicons.html">Dripicons</a>
                        </li>
                    </ul>
                </li>
                
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-bar-chart-fill"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="ui-chart-chartjs.html">ChartJS</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="ui-chart-apexcharts.html">Apexcharts</a>
                        </li>
                    </ul>
                </li>
                
                <li
                    class="sidebar-item  ">
                    <a href="ui-file-uploader.html" class='sidebar-link'>
                        <i class="bi bi-cloud-arrow-up-fill"></i>
                        <span>File Uploader</span>
                    </a>
                </li>
                
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-map-fill"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="ui-map-google-map.html">Google Map</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="ui-map-jsvectormap.html">JS Vector Map</a>
                        </li>
                    </ul>
                </li>
                
                <li class="sidebar-title">Pages</li>
                
                <li
                    class="sidebar-item  ">
                    <a href="application-email.html" class='sidebar-link'>
                        <i class="bi bi-envelope-fill"></i>
                        <span>Email Application</span>
                    </a>
                </li>
                
                <li
                    class="sidebar-item  ">
                    <a href="application-chat.html" class='sidebar-link'>
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Chat Application</span>
                    </a>
                </li>
                
                <li
                    class="sidebar-item  ">
                    <a href="application-gallery.html" class='sidebar-link'>
                        <i class="bi bi-image-fill"></i>
                        <span>Photo Gallery</span>
                    </a>
                </li>
                
                <li
                    class="sidebar-item  ">
                    <a href="application-checkout.html" class='sidebar-link'>
                        <i class="bi bi-basket-fill"></i>
                        <span>Checkout Page</span>
                    </a>
                </li>
                
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="auth-login.html">Login</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="auth-register.html">Register</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="auth-forgot-password.html">Forgot Password</a>
                        </li>
                    </ul>
                </li>
                
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-x-octagon-fill"></i>
                        <span>Errors</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="error-403.html">403</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="error-404.html">404</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="error-500.html">500</a>
                        </li>
                    </ul>
                </li>
                
                <li class="sidebar-title">Raise Support</li>
                
                <li
                    class="sidebar-item  ">
                    <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                        <i class="bi bi-life-preserver"></i>
                        <span>Documentation</span>
                    </a>
                </li>
                
                <li
                    class="sidebar-item  ">
                    <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                        <i class="bi bi-puzzle"></i>
                        <span>Contribute</span>
                    </a>
                </li>
                
                <li
                    class="sidebar-item  ">
                    <a href="https://github.com/zuramai/mazer#donation" class='sidebar-link'>
                        <i class="bi bi-cash"></i>
                        <span>Donate</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
            </div>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Dropdown</h3>
                    <p class="text-subtitle text-muted">Multi-purpose dropdown component with tons of variations</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dropdown</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section id="basic-dropdown">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="btn-group mb-1">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Primary
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group mb-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle me-1" type="button"
                                            id="dropdownMenuButtonSec" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Secondary
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSec">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group mb-1">
                                    <div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle me-1" type="button"
                                            id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Success
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group mb-1">
                                    <div class="dropdown">
                                        <button class="btn btn-info dropdown-toggle me-1" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Info
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group mb-1">
                                    <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle me-1" type="button"
                                            id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Danger
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group mb-1">
                                    <div class="dropdown">
                                        <button class="btn btn-warning dropdown-toggle me-1" type="button"
                                            id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Warning
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group mb-1">
                                    <div class="dropdown">
                                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton7"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dark
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Dropdown End -->

        <!-- Split Button Dropdown Starts -->
        <section id="dropdown-with-split-btn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Split Dropdowns</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>To create a split button add class <code>.dropdown-toggle-split</code> with your dropdown
                                    toggle class
                                    And to add divider between dropdown item use class <code>.doprdown-divider</code>
                                </p>
                                <div class="btn-group dropdown me-1 mb-1">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        data-reference="parent">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item active" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group dropdown me-1 mb-1">
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        data-reference="parent">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item active" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group dropdown me-1 mb-1">
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        data-reference="parent">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <h6 class="dropdown-header">Header</h6>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group dropdown me-1 mb-1">
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        data-reference="parent">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item disabled" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group dropdown me-1 mb-1">
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        data-reference="parent">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group dropdown me-1 mb-1">
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        data-reference="parent">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group dropdown me-1 mb-1">
                                    <button type="button" class="btn btn-light">Light</button>
                                    <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        data-reference="parent">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group dropdown mb-1">
                                    <button type="button" class="btn btn-dark">Dark</button>
                                    <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        data-reference="parent">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Split Button Dropdown Ends -->

        <!-- Dropdown with Icon Starts -->
        <section id="dropdown-with-icon">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dropdown with Icons & Emoji</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Use <code>.dropdown-item-emoji</code> within <code>.dropdown-item</code> for font-size
                                    and
                                    spacing of emojis.</p>
                                <div class="btn-group mb-1">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                            id="dropdownMenuButtonIcon" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="bi bi-error-circle me-50"></i> Icon Left
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonIcon">
                                            <a class="dropdown-item" href="#"><i class="bi bi-bar-chart-alt-2 me-50"></i>
                                                Option
                                                1</a>
                                            <a class="dropdown-item" href="#"><i class="bi bi-bell me-50"></i> Option 2</a>
                                            <a class="dropdown-item" href="#"><i class="bi bi-time me-50"></i> Option 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group mb-1">
                                    <div class="dropdown icon-right">
                                        <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                            id="dropdownMenuButtonIconRight" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Icon Right <i class="bi bi-error-circle ml-50"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonIconRight">
                                            <a class="dropdown-item justify-content-between" href="#">Option 1 <i
                                                    class="bi bi-bar-chart-alt-2 ml-50"></i></a>
                                            <a class="dropdown-item justify-content-between" href="#">Option 2 <i
                                                    class="bi bi-bell ml-50"></i></a>
                                            <a class="dropdown-item justify-content-between" href="#">Option 3 <i
                                                    class="bi bi-time ml-50"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group mb-1">
                                    <div class="dropdown dropdown-color-icon">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButtonEmoji" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span Class="me-50">🙂</span>Color Emoji icons
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonEmoji">
                                            <a class="dropdown-item" href="#"><span class="dropdown-item-emoji">😆</span>
                                                Option
                                                1</a>
                                            <a class="dropdown-item" href="#"><span class="dropdown-item-emoji">😎</span>
                                                Option
                                                2 </a>
                                            <a class="dropdown-item" href="#"><span class="dropdown-item-emoji">🤩</span>
                                                Option
                                                3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dropdown with Icon End -->

        <!-- Dropdown Direction Starts -->
        <section id="dropdown-directions">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Directions</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    Add <code>.dropdown-menu-end</code> to a <code>.dropdown-menu</code> to right align the
                                    dropdown menu.
                                    Trigger dropdown menus at the up / right / left of the elements by adding
                                    <code>.dropup | .dropright | .dropleft </code> to the parent element.
                                </p>
                                <div class="direction-dropdown-default mt-1">
                                    <div class="btn-group me-1 mb-1">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Drop bottom right
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item active" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group dropup me-1 mb-1">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Drop up
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item disabled" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropend me-1 mb-1">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Drop right
                                        </button>
                                        <div class="dropdown-menu">
                                            <h6 class="dropdown-header">Header</h6>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropstart  mb-1">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Drop left
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item disabled" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dropdown Direction End -->

        <!-- Dropdown Sizes Starts -->
        <section id="dropdown-sizes">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sizes</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Button dropdowns work with buttons of all sizes, including default and split dropdown
                                    buttons.</p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="btn-group me-1 mb-1">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-primary btn-lg dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Large
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group me-1 mb-1">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Default
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Small
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="btn-group dropdown me-1 mb-1">
                                            <button type="button" class="btn btn-primary btn-lg">
                                                Large
                                            </button>
                                            <button type="button"
                                                class="btn btn-primary btn-lg dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown me-1 mb-1">
                                            <button type="button" class="btn btn-primary">
                                                Default
                                            </button>
                                            <button type="button"
                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown mb-1">
                                            <button type="button" class="btn btn-primary btn-sm">
                                                Small
                                            </button>
                                            <button type="button"
                                                class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dropdown Sizes Ends -->

        <!-- Dropdown options Starts -->
        <section id="dropdown-options">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Options</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Use <code>data-offset</code> or <code>data-reference</code> attributes to change the
                                    location
                                    of the dropdown.</p>
                                <div class="btn-group dropdown me-1 mb-1">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        data-offset="5,20">
                                        Offset
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>

                                <div class="btn-group dropdown mb-1">
                                    <button type="button" class="btn btn-secondary">Reference</button>
                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                        id="dropdownMenuReference" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-reference="parent">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dropdown options Ends -->

        <!-- Dropdown variations Starts -->
        <section id="dropdown-variations">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Variations</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>To create a dropdown with groups you can use <code>.dropdown-header</code> for the header
                                    of
                                    groups
                                    and for sepration of group you can use <code>.dropdown-divider</code>.
                                </p>
                                <p>
                                    To create a dropdown with icons use class <code>.dropdown-icon-wrapper</code> with
                                    <code>.dropdown</code>.
                                </p>
                                <div class="btn-group dropup me-1 mb-1">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton902"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Groups
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton902">
                                        <h6 class="dropdown-header">Group 1</h6>
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <div class="dropdown-divider"></div>
                                        <h6 class="dropdown-header">Group 2</h6>
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <div class="dropdown-divider"></div>
                                        <h6 class="dropdown-header">Group 3</h6>
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                    </div>
                                </div>
                                <div class="btn-group dropup dropdown-icon-wrapper me-1 mb-1">
                                    <button type="button" class="btn btn-primary">
                                        Icons
                                    </button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-wifi dropdown-icon"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <span class="dropdown-item">
                                            <i class="bi bi-wifi-off"></i>
                                        </span>
                                        <span class="dropdown-item">
                                            <i class="bi bis-volume"></i>
                                        </span>
                                        <span class="dropdown-item">
                                            <i class="bi bis-volume-full"></i>
                                        </span>
                                        <span class="dropdown-item">
                                            <i class="bi bi-bell"></i>
                                        </span>
                                        <span class="dropdown-item">
                                            <i class="bi bi-bell-off"></i>
                                        </span>
                                        <span class="dropdown-item">
                                            <i class="bi bi-phone"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="btn-group dropup mb-1">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Form
                                    </button>
                                    <div class="dropdown-menu">
                                        <form class="px-2 py-2">
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                                    placeholder="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormPassword1">Password</label>
                                                <input type="password" class="form-control"
                                                    id="exampleDropdownFormPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="dropdownCheck1">
                                                    <label for="dropdownCheck1">Remember me</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </form>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                                        <a class="dropdown-item" href="#">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dropdown variations Ends -->

    </div>

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                    href="https://saugi.me">Saugi</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
@endsection

<!-- import-script -->
@push('script')
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endpush