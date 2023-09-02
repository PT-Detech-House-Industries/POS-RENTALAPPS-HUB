<!-- import-template -->
@extends('layouts.suha')

@section('main')
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Offline Area-->
        <div class="offline-area-wrapper py-3 d-flex align-items-center justify-content-center">
          <div class="offline-text text-center"><img class="mb-4 px-4" src="img/bg-img/no-internet.png" alt="">
            <h5>Sorry, Under Maintance.</h5>
            <p>Fitur ini masih offline, Dalam proses pengembangan developer. Mohon maaf atas ketidak nyamanan Anda.</p>
            <a class="btn btn-primary" href="/dashboard">Kembali</a>
          </div>
        </div>
      </div>
    </div>
    @include('layouts.menu.client-main-suha')
@endsection