<!-- import-template -->
@extends('layouts.suha-auth')

@section('main')
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <!-- Background Shape-->
      <div class="background-shape"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5"><img class="big-logo" src="img/core-img/logo-white.png" alt="">
            <!-- Register Form-->
            <div class="register-form mt-5 px-4">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group text-start mb-4"><span>Username</span>
                  <label for="username"><i class="lni lni-user"></i></label>
                  <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="info@example.com">
                </div>
                <div class="form-group text-start mb-4"><span>Password</span>
                  <label for="password"><i class="lni lni-lock"></i></label>
                  <input class="form-control" id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                </div>
                <button class="btn btn-warning btn-lg w-100" type="submit">Log In</button>
              </form>
            </div>
            <!-- Login Meta-->
            <div class="login-meta-data"><a class="forgot-password d-block mt-3 mb-1" href="{{ route('password.request') }}">Forgot Password?</a>
              <!-- <p class="mb-0">Didn't have an account?<a class="ms-1" href="#" onclick="hapusKategori()">Register Now</a></p> -->
              <p class="mb-0">Didn't have an account?<a class="ms-1" href="{{ route('register') }}">Register Now</a></p>
            </div>
            <!-- View As Guest-->
            <!-- <div class="view-as-guest mt-3"><a class="btn" href="home.html">View as Guest</a></div> -->
          </div>
        </div>
      </div>
    </div>

    <script>
      function hapusKategori() {
        Swal.fire({
          title: 'Apa Anda Yakin?',
          text: "Mengahapus kategori Akan Berakibat Kehilangan Data!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Iya, Hapus Data!',
        }).then((result) => {
          if (result.value) {
            window.location = "#";
          }
        }) 
      }
    </script>
@endsection