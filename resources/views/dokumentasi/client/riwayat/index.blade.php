<!-- import-template -->
@extends('layouts.suha')

@section('main')
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Section Heading-->
        <div class="section-heading d-flex align-items-center pt-3 justify-content-between">
          <h6>Riwayat Perjalanan</h6><a class="notification-clear-all text-secondary" href="/customer/riwayat/lokasi">Surabaya</a>
        </div>
        <!-- Notifications Area-->
        <div class="notification-area pb-2">
          <div class="list-group">
            <!-- Single Notification-->
            <a class="list-group-item d-flex align-items-center" href="riwayat/detail"><span class="noti-icon"><i class="lni lni-map-marker"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">Kencan Selesai !</h6><span>12 min ago</span>
              </div>
            </a>
            <!-- Single Notification-->
            <a class="list-group-item readed d-flex align-items-center" href="riwayat/detail"><span class="noti-icon"><i class="lni lni-map-marker"></i></span>
              <div class="noti-info">
                <h6 class="mb-0">Kencan Selesai !</h6><span>3 days ago</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection