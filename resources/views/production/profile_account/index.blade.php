<!-- import-template -->
@extends('layouts.suha')

@section('main')
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
          <!-- User Information-->
          <div class="card user-info-card">
            <div class="card-body p-4 d-flex align-items-center">
              <div class="user-profile me-3"><img src="{{ asset('img/core-img/profile.jpg') }}" alt=""></div>
              <div class="user-info">
                <p class="mb-0 text-white">{{ Auth::user()->role }}</p>
                <h5 class="mb-0">{{ Auth::user()->name }}</h5>
              </div>
            </div>
          </div>
          <!-- User Meta Data-->
          <div class="card user-data-card">
            <div class="card-body">
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-user"></i><span>Nama Talent</span>
                </div>
                <div class="data-content">{{ Auth::user()->name }}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-user"></i><span>Nama Asli</span>
                </div>
                <div class="data-content">{{ Auth::user()->id }}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-phone"></i><span>Nomor Whatsapps</span>
                </div>
                <div class="data-content">+880 000 111 222</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-envelope"></i><span>Email Address</span>
                </div>
                <div class="data-content">{{ Auth::user()->email }}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-map-marker"></i><span>Domisili</span>
                </div>
                <div class="data-content">Mojokerto</div>
              </div>

              <!-- <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-users"></i><span>Tinggi Badan</span>
                </div>
                <div class="data-content">143 cm</div>
              </div> -->

              <!-- <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-users"></i><span>Account Payment</span>
                </div>
                <div class="data-content">6105169853 - Nur Fitria Andani</div>
              </div> -->

              <!-- <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-users"></i><span>Hobi</span>
                </div>
                <div class="data-content">Singing, Cosplay , Kulineran</div>
              </div>

              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-users"></i><span>Sifat</span>
                </div>
                <div class="data-content">Tomboy, Pengertian, Humble</div>
              </div>

              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-users"></i><span>Special Dari Aku</span>
                </div>
                <div class="data-content">Request Cosplay, Dengerin Curhat, Random Talk, Friendly, Pengertian, Debat, Cerita Anime, Cerewet</div>
              </div>

              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-users"></i><span>Zodiak</span>
                </div>
                <div class="data-content">Request Cosplay, Dengerin Curhat, Random Talk, Friendly, Pengertian, Debat, Cerita Anime, Cerewet</div>
              </div>

              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-users"></i><span>Hal Yang Disukai</span>
                </div>
                <div class="data-content">Request Cosplay, Dengerin Curhat, Random Talk, Friendly, Pengertian, Debat, Cerita Anime, Cerewet</div>
              </div>

              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <i class="lni lni-users"></i><span>Hal Yang Tidak Disukai</span>
                </div>
                <div class="data-content">Request Cosplay, Dengerin Curhat, Random Talk, Friendly, Pengertian, Debat, Cerita Anime, Cerewet</div>
              </div> -->
              <!-- Edit Profile-->
              <!-- <div class="edit-profile-btn mt-3"><a class="btn btn-info w-100" href="/pengaturan/profile/edit"><i class="lni lni-pencil me-2"></i>Edit Profile</a></div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('layouts.menu.talent-main-suha')
@endsection