<!-- import-template -->
@extends('layouts.suha')

@section('main')
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Cart Wrapper-->
        <div class="cart-wrapper-area py-3">

          <div class="cart-table card mb-3">
            <div class="table-responsive card-body">
              <table class="table mb-0">
                <tbody>
                    
                  <tr>
                    <!-- <td><img class="rounded" src="img/product/11.png" alt=""></td> -->
                    <td>
                        <a href="#">Ciramic Pot Set
                            <span>$12.10 × 1</span>
                        </a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
          
          <!-- <div></div> -->

          <!-- Coupon Area-->
          <div class="card coupon-card mb-3">
            <div class="card-body">
              <div class="apply-coupon">
                <h6 class="mb-0">Have a coupon?</h6>
                <p class="mb-2">Enter your coupon code here &amp; get awesome discounts!</p>
                <div class="coupon-form">
                  <form action="#">
                    <input class="form-control" type="text" placeholder="SUHA30">
                    <button class="btn btn-primary" type="submit">Apply</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Cart Amount Area-->
          <div class="card cart-amount-area">
            <div class="card-body d-flex align-items-center justify-content-between">
              <h5 class="total-price mb-0">$<span class="counter">38.84</span></h5><a class="btn btn-warning" href="/pembayaran/metode">
                Checkout Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
