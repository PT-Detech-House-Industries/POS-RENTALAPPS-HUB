@section('asd')
<h3>coming soon, talent page</h3>
<br>

<form method="POST" action="{{ route('logout') }}">
  @csrf
  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();">
    <i class="lni lni-power-switch"></i>Logout
  </a>
</form>
@endsection

<!-- import-template -->
@extends('layouts.suha')

@section('main')
<div class="page-content-wrapper">
  <!-- Catagory Single Image-->
  <div class="pt-3">
    <!-- <div class="container">
          <div class="catagory-single-img" style="background-image: url('img/bg-img/5.jpg')"></div>
        </div> -->
  </div>
  <!-- online offline -->
  <div class="container">
    <!-- Settings Wrapper-->
    <div class="settings-wrapper py-3">
      <!-- Single Setting Card-->
      <div class="card settings-card">
        <div class="card-body">
          <!-- Single Settings-->
          <div class="single-settings d-flex align-items-center justify-content-between">
            <div class="title"><i class="lni lni-checkmark"></i><span>Online Dating</span></div>
            <div class="data-content">
              <div class="toggle-button-cover">
                <div class="button r">
                  <input class="checkbox" type="checkbox" checked>
                  <div class="knobs"></div>
                  <div class="layer"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Single Setting Card-->
      <div class="card settings-card">
        <div class="card-body">
          <!-- Single Settings-->
          <div class="single-settings d-flex align-items-center justify-content-between">
            <div class="title"><i class="lni lni-checkmark"></i><span>Offline Dating</span></div>
            <div class="data-content">
              <div class="toggle-button-cover">
                <div class="button r">
                  <input class="checkbox" type="checkbox" checked>
                  <div class="knobs"></div>
                  <div class="layer"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- btn -->
      <div class="select-all-products-btn pt-3">
        <a class="btn btn-danger w-100" href="#">
          Aktif Untuk Terima Orderan
        </a>
      </div>
    </div>
  </div>

  <!-- Top Products-->
  <div class="top-products-area">
    <div class="container">
      <div class="section-heading pt-3">
        <h6>Performa Talent</h6>
      </div>
      <div class="row g-3">

        <div class="col-6 col-sm-4">
          <div class="card blog-catagory-card">
            <div class="card-body">
              <a href="#">
                <!-- <i class="lni lni-shopping-basket"></i> -->
                <i class="lni lni-checkmark-circle"></i>
                <span class="d-block">Acceptance</span>
                <span class="d-block">64.3%</span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-6 col-sm-4">
          <div class="card blog-catagory-card">
            <div class="card-body">
              <a href="#">
                <!-- <i class="lni lni-bulb"></i> -->
                <i class="lni lni-cross-circle"></i>
                <span class="d-block">Cancellation</span>
                <span class="d-block">22.2%</span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-6 col-sm-4">
          <div class="card blog-catagory-card">
            <div class="card-body">
              <a href="#">
                <!-- <i class="lni lni-bulb"></i> -->
                <i class="lni lni-star"></i>
                <span class="d-block">Rating</span>
                <span class="d-block">4.97</span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-6 col-sm-4">
          <div class="card blog-catagory-card">
            <div class="card-body">
              <a href="#">
                <i class="lni lni-wallet"></i>
                <span class="d-block">Kredit</span>
                <span class="d-block">IDR 45.200</span>
              </a>
            </div>
          </div>
        </div>

        <!-- <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body">
                  <a href="#">
                    <i class="lni lni-users"></i>
                    <span class="d-block">Account</span>
                    <span class="d-block">Platinum</span>
                  </a>
                </div>
              </div>
            </div>

            
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body">
                  <a href="#">
                    <i class="lni lni-wallet"></i>
                    <span class="d-block">Kredit</span>
                    <span class="d-block">IDR 45.200</span>
                  </a>
                </div>
              </div>
            </div>

            
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body">
                  <a href="#">
                    <i class="lni lni-heart"></i>
                    <span class="d-block">Total Dating</span>
                    <span class="d-block">10 Orders</span>
                  </a>
                </div>
              </div>
            </div> -->

      </div>
    </div>
  </div>

  <div class="container py-3">
    <!-- <div class="section-heading d-flex align-items-center justify-content-between pt-3">
          <h6>Review Service</h6>
          
          <div class="select-product-catagory">
            <select class="form-select" id="selectProductCatagory" name="selectProductCatagory" aria-label="Default select example">
              <option selected>Short by</option>
              <option value="1">Newest</option>
              <option value="2">Popular</option>
              <option value="3">Ratings</option>
            </select>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
          <div class="rating-and-review-wrapper bg-white py-3 mb-3">
            <div class="container">
              <div class="rating-review-content">
                <ul class="ps-0">
                  <li class="single-user-review d-flex">
                    <div class="user-thumbnail mt-0"><img src="img/bg-img/7.jpg" alt=""></div>
                    <div class="rating-comment">
                      <p class="comment mb-0">Very good product. It's just amazing!</p><span class="name-date">Designing World 12 Dec 2021</span>
                    </div>
                  </li>
                  <li class="single-user-review d-flex">
                    <div class="user-thumbnail mt-0"><img src="img/bg-img/8.jpg" alt=""></div>
                    <div class="rating-comment">
                      <p class="comment mb-0">Very excellent product. Love it.</p><span class="name-date">Designing World 8 Dec 2021</span>
                    </div>
                  </li>
                  <li class="single-user-review d-flex">
                    <div class="user-thumbnail mt-0"><img src="img/bg-img/9.jpg" alt=""></div>
                    <div class="rating-comment">
                      <p class="comment mb-0">What a nice product it is. I am looking it's.</p><span class="name-date">Designing World 28 Nov 2021</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          </div>
        </div> -->
  </div>

</div>
@include('layouts.menu.talent-main-suha')

@endsection