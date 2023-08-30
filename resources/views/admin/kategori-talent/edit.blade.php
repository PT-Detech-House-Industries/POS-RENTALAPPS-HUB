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
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Form Kategori Talent</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Kategori Talent</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Edit Talent</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" data-parsley-validate action="{{ route('admin.kategori-talent.update', [$data[0]->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Nama Kategori</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                placeholder="Nama Kategori" name="nama" value="{{ $data[0]->nama }}">
                                                <!-- data-parsley-required="true"> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column" class="form-label">Deskripsi</label>
                                            <input type="text" id="deskripsi" class="form-control"
                                                placeholder="Deskripsi" name="deskripsi" value="{{ $data[0]->deskripsi }}">
                                        </div>
                                    </div>
                                </div>
                                <!-- row-kiri -->
                                <div class="row">
                                    <div class="mt-5 col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                                <!-- row-tombol -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>
@endsection

<!-- import-script -->
@push('script')
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extensions/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/parsley.js') }}"></script>
@endpush