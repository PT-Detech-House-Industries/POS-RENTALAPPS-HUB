<!-- import-template -->
@extends('layouts.suha')

@section('main-old')
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Notifications Details Area-->
        <div class="notification-area pt-3 pb-2">
          <!-- Notification Details-->
          <div class="list-group-item d-flex py-3"><span class="noti-icon"><i class="lni lni-alarm"></i></span>
            <div class="noti-info">
              <h6>Suha just uploaded a new product!</h6>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero laboriosam nihil magnam accusantium sint voluptatibus illo earum corporis similique libero praesentium excepturi nostrum eos soluta, cum, quis quo perferendis in?</p><a class="btn-link" href="#">Product Link</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('main')
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
          <!-- User Meta Data-->
          <div class="card user-data-card">

            <div class="card-body">
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-user"></i><span>Lokasi Penjemputan</span></div>
                <div class="data-content">Kantor</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-user"></i><span>Lokasi Tujuan</span></div>
                <div class="data-content">Stasiun</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-phone"></i><span>Waktu</span></div>
                <div class="data-content">18:00:00 WIB</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-envelope"></i><span>Jumlah Penumpang</span></div>
                <div class="data-content">4 Orang</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-map-marker"></i><span>Tarif</span></div>
                <div class="data-content">Rp.18.000</div>
              </div>
              <!-- <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-star"></i><span>My Order</span></div>
                <div class="data-content"><a class="btn btn-danger btn-sm" href="my-order.html">View</a></div>
              </div> -->
            </div>

          </div>
        </div>
      </div>
    </div>
@endsection