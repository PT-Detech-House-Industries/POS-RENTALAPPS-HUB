<!-- import-template -->
@extends('layouts.suha')

@section('main')
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Checkout Wrapper-->
        <div class="checkout-wrapper-area py-3">
          <!-- Choose Payment Method-->
          <div class="choose-payment-method">
            <h6 class="mb-3 text-center">Pilih Metode Pembayaran</h6>
            <div class="row justify-content-center g-3">
              <!-- Single Payment Method-->
              <div class="col-6 col-md-5">
                <div class="single-payment-method"><a class="cash" href="/pembayaran/berhasil">
                    <svg class="bi bi-cash mb-2 text-dark" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path>
                      <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"></path>
                    </svg>
                    <h6>Cash</h6></a></div>
              </div>
              <!-- Single Payment Method-->
              <div class="col-6 col-md-5">
                <div class="single-payment-method"><a class="paypal" href="/pembayaran/berhasil">
                    <svg class="bi bi-wallet2 mb-2 text-dark" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
                    </svg>
                    <h6>E-money</h6></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection