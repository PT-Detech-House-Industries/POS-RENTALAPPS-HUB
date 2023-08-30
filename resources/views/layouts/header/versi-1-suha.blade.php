<!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <div class="logo-wrapper"><a href="/dashboard"><img src="{{ asset('img/core-img/logo-small.png')}}" alt="logo-serlok"></a></div>
        <!-- Search Form-->
        <!-- <div class="top-search-form">
          <form action="" method="">
            <input class="form-control" type="search" placeholder="Enter your keyword">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div> -->
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
      </div>
    </div>
    <div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas" aria-labelledby="suhaOffcanvasLabel">
      <!-- Close button-->
      <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <!-- Offcanvas body-->
      <div class="offcanvas-body">
        <!-- Sidenav Profile-->
        <div class="sidenav-profile">
          <div class="user-profile"><img src="{{ asset('img/core-img/profile.jpg') }}" alt=""></div>
          <div class="user-info">
            <h6 class="user-name mb-1">{{ Auth::user()->name }}</h6>
            <p class="available-balance">RATING : <span class="counter">5.0</span></p>
          </div>
        </div>
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
          <li>
            <a href="/dashboard">
              <i class="lni lni-dashboard"></i>Dashboard
            </a>
          </li>
          <li>
            <a href="/riwayat">
              <i class="lni lni-timer"></i>Riwayat
            </a>
          </li>
          <li>
            <a href="/pengaturan">
              <i class="lni lni-cog"></i>Pengaturan
            </a>
          </li>
          <!-- <li>
            <a href="/customer/bantuan">
              <i class="lni lni-headphone-alt"></i>Bantuan
            </a>
          </li> -->
          <!-- <li>
            <a href="#">
              <i class="lni lni-map-marker"></i>Antar Kota
            </a>
          </li> -->
          <!-- <li>
            <a href="#">
              <i class="lni lni-comments-alt"></i>Dukungan
            </a>
          </li> -->
          <!-- <li><a href="notifications.html"><i class="lni lni-alarm lni-tada-effect"></i>Notifications<span class="ms-3 badge badge-warning">3</span></a></li>
          <li class="suha-dropdown-menu"><a href="#"><i class="lni lni-cart"></i>Shop Pages</a>
            <ul>
              <li><a href="shop-grid.html">- Shop Grid</a></li>
              <li><a href="shop-list.html">- Shop List</a></li>
              <li><a href="single-product.html">- Product Details</a></li>
              <li><a href="featured-products.html">- Featured Products</a></li>
              <li><a href="flash-sale.html">- Flash Sale</a></li>
            </ul>
          </li>
          <li><a href="pages.html"><i class="lni lni-empty-file"></i>All Pages</a></li>
          <li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="lni lni-heart"></i>My Wishlist</a>
            <ul>
              <li><a href="wishlist-grid.html">- Wishlist Grid</a></li>
              <li><a href="wishlist-list.html">- Wishlist List</a></li>
            </ul>
          </li>
          <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li> -->
          <li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();">
                <i class="lni lni-power-switch"></i>Logout
              </a>
            </form>
          </li>
        </ul>
      </div>
    </div>