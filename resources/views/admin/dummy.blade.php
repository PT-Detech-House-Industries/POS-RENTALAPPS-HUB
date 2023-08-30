<!-- import-template -->
@extends('layouts.suha')

<!-- import-library -->
@push('header')
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">
    
    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
@endpush

<!-- main -->
@section('main')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-heading">
            <h3>Dashboard Admin Statistics</h3>
        </div>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Id minus mollitia perferendis porro neque. Necessitatibus 
            fugit cumque labore minima molestias recusandae explicabo. 
            Corporis, dolor dolorem blanditiis delectus quos minima! Dolorum.
        </p>
        <div class="coba">
            percoba
        </div>
    </div>
@endsection

<!-- import-script -->
@push('script')
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
        
    <!-- Need: Apexcharts -->
    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
@endpush