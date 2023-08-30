<!-- import-template -->
@extends('layouts.suha')

@section('main')
    <div class="page-content-wrapper py-3">
      <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Kota Utama</h6>
        </div>
        <div class="row gy-3">

          <div class="col-12">
            <!-- Single Vendor -->
            <div class="single-vendor-wrap bg-img p-4 bg-overlay" style="background-image: url('img/bg-img/12.jpg')">
              <h5 class="vendor-title text-white">Jakarta</h5>
              <a class="btn btn-warning btn-sm mt-3" href="/pemesanan/talent-katalog">Cari Sekarang
                <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                </svg></a>
            </div>
            
          </div>

          <div class="col-12">
            <!-- Single Vendor -->
            <div class="single-vendor-wrap bg-img p-4 bg-overlay" style="background-image: url('img/bg-img/12.jpg')">
              <h5 class="vendor-title text-white">Bali</h5>
              <a class="btn btn-warning btn-sm mt-3" href="/pemesanan/talent-katalog">Cari Sekarang
                <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                </svg></a>
            </div>
            
          </div>

          <div class="col-12">
            <!-- Single Vendor -->
            <div class="single-vendor-wrap bg-img p-4 bg-overlay" style="background-image: url('img/bg-img/12.jpg')">
              <h5 class="vendor-title text-white">Surbaya</h5>
              <a class="btn btn-warning btn-sm mt-3" href="/pemesanan/talent-katalog">Cari Sekarang
                <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                </svg></a>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>

    @include('layouts.menu.client-main-suha')
@endsection