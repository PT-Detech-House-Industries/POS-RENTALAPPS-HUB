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
          <div class="user-profile me-3"><img src="{{ asset('img/core-img/profile.jpg') }}" alt="">
            <div class="change-user-thumb">
              <form>
                <input class="form-control-file" type="file">
                <button><i class="lni lni-pencil"></i></button>
              </form>
            </div>
          </div>
          <div class="user-info">
            <p class="mb-0 text-dark">@designing-world</p>
            <h5 class="mb-0">Suha Jannat</h5>
          </div>
        </div>
      </div>
      <!-- User Meta Data-->
      <div class="card user-data-card">
        <div class="card-body">
        <form class="form-horizontal" role="form" action="{{ route('talent.profile.edit', [$data->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <div class="title mb-2"><i class="lni lni-user"></i><span>Nama Talent</span></div>
              <input name="name" class="form-control" type="text" value="{{ $data->name }}">
            </div>
            <div class="mb-3">
              <div class="title mb-2"><i class="lni lni-user"></i><span>Nama Asli</span></div>
              <input name="fullname" class="form-control" type="text" value="{{ $data->talent->fullname }}">
            </div>
            <div class="mb-3">
              <div class="title mb-2"><i class="lni lni-phone"></i><span>Phone</span></div>
              <input name="phone" class="form-control" type="text" value="{{ $data->talent->phone }}">
            </div>
            <div class="mb-3">
              <div class="title mb-2"><i class="lni lni-envelope"></i><span>Email Address</span></div>
              <input name="email" class="form-control" type="email" value="{{ $data->email }}">
            </div>
            <!-- <div class="mb-3">
              <div class="title mb-2"><i class="lni lni-map-marker"></i><span>Shipping Address</span></div>
              <input class="form-control" type="text" value="28/C Green Road, BD">
            </div> -->
            <button class="btn btn-success w-100" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@include('layouts.menu.talent-main-suha')
@endsection