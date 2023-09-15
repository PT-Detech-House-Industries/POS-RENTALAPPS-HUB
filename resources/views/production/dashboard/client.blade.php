@section('asd')
<h3>coming soon, client page</h3>
<br>
<a href="{{ route('talent.index') }}">Talent</a>
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
  <div class="container">
    <div class="pt-3">
      <!-- Hero Slides-->
      <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide-->
        <div class="single-hero-slide" style="background-image: url('img/bg-img/1.jpg')">
          <div class="slide-content h-100 d-flex align-items-center">
            <div class="slide-text">
              <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">Amazon
                Echo</h4>
              <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">3rd Generation,
                Charcoal</p><a class="btn btn-primary btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms"
                data-duration="1000ms">Buy Now</a>
            </div>
          </div>
        </div>
        <!-- Single Hero Slide-->
        <div class="single-hero-slide" style="background-image: url('img/bg-img/2.jpg')">
          <div class="slide-content h-100 d-flex align-items-center">
            <div class="slide-text">
              <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">Light
                Candle</h4>
              <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">Now only $22</p>
              <a class="btn btn-success btn-sm" href="#" data-animation="fadeInUp" data-delay="500ms"
                data-duration="1000ms">Buy Now</a>
            </div>
          </div>
        </div>
        <!-- Single Hero Slide-->
        <div class="single-hero-slide" style="background-image: url('img/bg-img/3.jpg')">
          <div class="slide-content h-100 d-flex align-items-center">
            <div class="slide-text">
              <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">Best
                Furniture</h4>
              <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">3 years warranty
              </p><a class="btn btn-danger btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms"
                data-duration="1000ms">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Product Catagories -->
  <div class="product-catagories-wrapper py-3">
    <div class="container">
      <div class="section-heading">
        <h6>Order Rental Pacar Mu</h6>
      </div>
      <div class="product-catagory-wrap">
        <div class="row g-3">
          <!-- Single Catagory Card -->
          <div class="col-6">
            <div class="card catagory-card">
              <div class="card-body">
                <a class="text-danger" href="/offline">
                  <svg class="bi bi-heart mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                    fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                    </path>
                  </svg>
                  <span>Offline Dating</span>
                </a>
              </div>
            </div>
          </div>

          <!-- Single Catagory Card -->
          <div class="col-6">
            <div class="card catagory-card">
              <div class="card-body">
                <a class="text-danger" href="/pemesanan/talent-domisili">
                  <svg class="bi bi-heart mb-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                    fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                    </path>
                  </svg>
                  <span>Online Dating</span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Discount Coupon Card-->
  <div class="container">
    <div class="card discount-coupon-card">
      <div class="card-body">
        <div class="coupon-text-wrap d-flex align-items-center p-3">
          <h4 class="text-white pe-3 mb-0">Get 20% <br> discount</h4>
          <p class="text-white ps-3 mb-0">To get discount, enter the<strong class="px-1">GET20</strong>code on the
            checkout page.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Weekly Best Sellers-->
  <div class="weekly-best-seller-area py-3">
    <div class="container">
      <div class="section-heading d-flex align-items-center justify-content-between">
        <h6>Rekomendasi Talent Mu</h6><a class="btn" href="#">View All</a>
      </div>
      
      <div class="row g-3">
        @foreach($talentData as $data)
        <!-- Single Weekly Product Card -->
        <div class="col-12 col-md-6">
        
          <div class="card horizontal-product-card">
            
            <div class="card-body d-flex align-items-center">
              <div class="product-thumbnail-side">
                <!-- Thumbnail -->
                <a class="product-thumbnail d-block" href="/talent-detail">
                  <img src="{{ asset('img/product/10.png') }}" alt="talent">
                </a>
              </div>
              <div class="product-description">
                <!-- Product Title -->
                <a class="product-title d-block" href="/talent-detail">{{ $data->user->name }}</a>
                <!-- Price -->
                <!-- <p class="sale-price"><i class="lni lni-dollar"></i>$64<span>$89</span></p> -->
                <p class="sale-price"><i class="lni lni-dollar"></i>Rp.50.000</p>
                <!-- Rating -->
                <div class="product-rating">
                  <i class="lni lni-star-filled"></i>4.88 (39)
                </div>
                <!-- Buy Now Button -->
                <a class="btn btn-danger btn-sm" href="/talent-detail">
                  <i class="me-1 lni lni-cart"></i>Rental Detail
                </a>
              </div>
            </div>

          </div>
          
          
        </div>

        @endforeach
      </div>
    </div>
  </div>

</div>

@include('layouts.menu.client-main-suha')
@endsection