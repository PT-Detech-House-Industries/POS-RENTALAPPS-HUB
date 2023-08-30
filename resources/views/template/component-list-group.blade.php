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
                    <li class="submenu-item ">
                        <a href="component-dropdown.html">Dropdown</a>
                    </li>
                    <li class="submenu-item active">
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
                <h3>List Group</h3>
                <p class="text-subtitle text-muted">List groups are a flexible and powerful component for displaying a
                    series of content</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Group</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- list groups simple & disabled start -->
    <section id="basic-list-group">
        <div class="row match-height">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Simple List Group</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                The most basic list group is simply an unordered list with list
                                items, and the proper classes. Build upon it with the options that
                                follow, or your own CSS as needed.
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item active">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">chocolate cheesecake candy</li>
                                <li class="list-group-item">Oat cake icing pastry pie carrot</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Disabled items</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Add <code>.disabled</code> to a <code>.list-group-item</code> to gray it out to appear
                                disabled.</p>
                            <div class="list-group">
                                <span class="list-group-item">
                                    Cras justo odio
                                </span>
                                <span class="list-group-item">Dapibus ac facilisis in</span>
                                <span class="list-group-item disabled">Morbi leo risus</span>
                                <span class="list-group-item">Porta ac consectetur ac</span>
                                <span class="list-group-item">Vestibulum at eros</span>
                                <span class="list-group-item">Biscuit jelly beans macaroon danish pudding</span>
                                <span class="list-group-item">Oat cake icing pastry pie carrot</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- list groups simple & disabled end -->
    <!-- list group button & badge start-->
    <section class="list-group-button-badge">
        <div class="row match-height">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Button list Group</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-action active">Cras justo
                                    odio</button>
                                <button type="button" class="list-group-item list-group-item-action">Dapibus ac
                                    facilisis
                                    in</button>
                                <button type="button" class="list-group-item list-group-item-action">Morbi leo
                                    risus</button>
                                <button type="button" class="list-group-item list-group-item-action">Porta ac
                                    consectetur
                                    ac</button>
                                <button type="button" class="list-group-item list-group-item-action">Vestibulum at
                                    eros</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Badges</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Use Utility classes <code>.d-flex</code> <code>.justify-content-between</code>
                                <code>align-items-center</code> to create space between badge and your content
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span> Biscuit jelly beans macaroon danish pudding.</span>
                                    <span class="badge bg-warning badge-pill badge-round ml-1">8</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span> chocolate cheesecake candy</span>
                                    <span class="badge bg-info badge-pill badge-round ml-1">7</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span> Oat cake icing pastry pie carrot</span>
                                    <span class="badge bg-danger badge-pill badge-round ml-1">6</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>space between badgeOat cake icing pastry pie carrot</span>
                                    <span class="badge bg-secondary badge-pill badge-round ml-1">5</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- list group button & badge ends -->
    <!-- list group Checkboxes and radios start -->
    <section id="list-group-icons">
        <div class="row match-height">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Checkboxes and radios</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                Place checkboxes and radios within list group items and customize as needed
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Cras justo odio
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Dapibus ac facilisis in
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Morbi leo risus
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Porta ac consectetur ac
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Vestibulum at eros
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Vestibulum at eros
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Vestibulum at eros
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Custom content</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                Add nearly any HTML within, even for linked list groups like the
                                one below.
                            </p>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 text-white">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">
                                        Donec id elit non mi porta gravida at eget metus. Maecenas sed
                                        diam eget risus varius blandit.
                                    </p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">
                                        Donec id elit non mi porta gravida at eget metus. Maecenas sed
                                        diam eget risus varius blandit.
                                    </p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">
                                        Donec id elit non mi porta gravida at eget metus. Maecenas sed
                                        diam eget risus varius blandit.
                                    </p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- list group Checkboxes and radios end -->
    <!-- list group with contextual & horizontal start -->
    <section id="list-group-contextual">
        <div class="row match-height">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Contextual classes</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                Use contextual classes to style list items, default or linked.
                                Also includes .active state.
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-primary">
                                    Cras justo odio
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    Dapibus ac facilisis in
                                </li>
                                <li class="list-group-item list-group-item-danger">
                                    Morbi leo risus
                                </li>
                                <li class="list-group-item list-group-item-warning">
                                    Porta ac consectetur ac
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    Vestibulum at eros
                                </li>
                                <li class="list-group-item list-group-item-light">
                                    chocolate cheesecake candy
                                </li>
                                <li class="list-group-item list-group-item-dark">
                                    Oat cake icing pastry pie carrot
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                Add <code>.list-group-horizontal</code> to change the layout of list group items from
                                vertical to
                                horizontal across all breakpoints.choose a responsive variantcode <code>
                        .list-group-horizontal-{sm|md|lg|xl}</code> to make a list group horizontal starting at that
                                breakpoint’s min-width.
                            </p>
                            <div class="list-group list-group-horizontal-sm mb-1 text-center" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-sunday-list"
                                    data-bs-toggle="list" href="#list-sunday" role="tab">Option 1</a>
                                <a class="list-group-item list-group-item-action" id="list-monday-list"
                                    data-bs-toggle="list" href="#list-monday" role="tab">Option 2</a>
                                <a class="list-group-item list-group-item-action" id="list-tuesday-list"
                                    data-bs-toggle="list" href="#list-tuesday" role="tab">Option 3</a>
                            </div>
                            <div class="tab-content text-justify">
                                <div class="tab-pane fade show active" id="list-sunday" role="tabpanel"
                                    aria-labelledby="list-sunday-list">Irure enim occaecat labore sit qui aliquip
                                    reprehenderit amet
                                    velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat
                                    laboris sunt dolor.
                                    Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea
                                    aliquip
                                    sunt amet.
                                    Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet
                                    culpa.
                                    Quis ullamco
                                    nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt
                                    dolor
                                    eiusmod eu
                                    pariatur culpa mollit in irure Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit.
                                    Iusto quis
                                    porro doloribus est natus doloremque, eos laudantium
                                    exercitationem impedit sapiente tenetur soluta reiciendis deserunt!</div>
                                <div class="tab-pane fade" id="list-monday" role="tabpanel"
                                    aria-labelledby="list-monday-list">Cupidatat
                                    quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do
                                    cillum ad laborum.
                                    Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex.
                                    Officia
                                    anim incididunt
                                    laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation.
                                    Dolor
                                    nisi culpa ex ad
                                    irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa
                                    commodo veniam
                                    incididunt veniam ad. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Exercitationem, porro!
                                    Amet soluta tempora eveniet blanditiis alias eos, dolor qui consectetur!
                                </div>
                                <div class="tab-pane fade" id="list-tuesday" role="tabpanel"
                                    aria-labelledby="list-tuesday-list">Ut ut
                                    do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit
                                    aute
                                    ipsum voluptate.
                                    Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit
                                    consequat enim tempor.
                                    Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure.
                                    Ipsum id
                                    Lorem sit
                                    sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt.
                                    Consectetur et
                                    fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum. Lorem
                                    ipsum dolor sit
                                    amet consectetur adipisicing elit. Molestias, inventore!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- list group with contextual & horizontal ends -->
    <!-- List group navigation start -->
    <section class="list-group-navigation">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List group navigation</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="list-group" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list"
                                            data-bs-toggle="list" href="#list-home" role="tab">Home</a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list"
                                            data-bs-toggle="list" href="#list-profile" role="tab">Profile</a>
                                        <a class="list-group-item list-group-item-action" id="list-messages-list"
                                            data-bs-toggle="list" href="#list-messages" role="tab">Messages</a>
                                        <a class="list-group-item list-group-item-action" id="list-settings-list"
                                            data-bs-toggle="list" href="#list-settings" role="tab">Settings</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 mt-1">
                                    <div class="tab-content text-justify" id="nav-tabContent">
                                        <div class="tab-pane show active" id="list-home" role="tabpanel"
                                            aria-labelledby="list-home-list">
                                            Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing
                                            exercitation fugiat
                                            tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut.
                                            Mollit
                                            voluptate
                                            reprehenderit
                                            occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id
                                            ut
                                            nulla. Ea et fugiat
                                            aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor.
                                            Anim ad
                                            Lorem aliqua in
                                            cupidatat nisi enim eu nostrud do aliquip veniam minim. Lorem ipsum dolor
                                            sit
                                            amet consectetur,
                                            adipisicing elit. Aliquam itaque nisi obcaecati doloremque et est ex
                                            possimus
                                            quidem dolorem soluta.
                                        </div>
                                        <div class="tab-pane" id="list-profile" role="tabpanel"
                                            aria-labelledby="list-profile-list">
                                            Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur
                                            consectetur
                                            ex nisi eu do cillum
                                            ad
                                            laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex
                                            amet
                                            id ex. Officia anim
                                            incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do
                                            exercitation. Dolor
                                            nisi
                                            culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure
                                            non
                                            commodo enim culpa
                                            commodo veniam incididunt veniam ad.</div>
                                        <div class="tab-pane" id="list-messages" role="tabpanel"
                                            aria-labelledby="list-messages-list">Ut ut
                                            do pariatur aliquip aliqua aliquip exercitation do nostrud commodo
                                            reprehenderit
                                            aute ipsum
                                            voluptate.
                                            Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit
                                            mollit
                                            consequat enim
                                            tempor.
                                            Consectetur est minim nostrud nostrud consectetur irure labore voluptate
                                            irure.
                                            Ipsum id Lorem sit
                                            sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod
                                            deserunt. Consectetur et
                                            fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur
                                            cillum.
                                        </div>
                                        <div class="tab-pane" id="list-settings" role="tabpanel"
                                            aria-labelledby="list-settings-list">Irure
                                            enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt
                                            ullamco
                                            ex elit nostrud ut
                                            dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim
                                            cillum
                                            occaecat aute est
                                            cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit
                                            dolor ut
                                            exercitation irure
                                            commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui
                                            aute
                                            irure eu. Magna labore
                                            dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa
                                            mollit
                                            in irure</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- List group navigation ends -->
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