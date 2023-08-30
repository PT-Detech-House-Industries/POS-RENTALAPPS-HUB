<!-- import-template -->
@extends('layouts.suha')

@section('main')
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
          <!-- User Meta Data-->
          <div class="card user-data-card">
            <div class="card-body">
              <form action="#" method="">
                <div class="mb-3">
                  <div class="title mb-2"><i class="lni lni-key"></i><span>Old Password</span></div>
                  <input class="form-control" type="password">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><i class="lni lni-key"></i><span>New Password</span></div>
                  <input class="form-control" type="password">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><i class="lni lni-key"></i><span>Repeat New Password</span></div>
                  <input class="form-control" type="password">
                </div>
                <button class="btn btn-success w-100" type="submit">Update Password</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection