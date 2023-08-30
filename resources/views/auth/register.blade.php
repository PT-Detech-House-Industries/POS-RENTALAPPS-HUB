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
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group text-start mb-4"><span>Username</span>
                  <label for="username"><i class="lni lni-user"></i></label>
                  <input class="form-control" id="username" name="name" :value="old('name')" required autofocus autocomplete="name" type="text" placeholder="Designing World">
                </div>
                <div class="form-group text-start mb-4"><span>Email</span>
                  <label for="email"><i class="lni lni-envelope"></i></label>
                  <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="help@example.com">
                </div>
                <div class="form-group text-start mb-4"><span>Password</span>
                  <label for="password"><i class="lni lni-lock"></i></label>
                  <input class="input-psswd form-control" id="registerPassword" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                </div>
                <div class="form-group text-start mb-4"><span>Confirm Password</span>
                  <label for="password"><i class="lni lni-lock"></i></label>
                  <input class="input-psswd form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>
                <button class="btn btn-warning btn-lg w-100" type="submit">Sign Up</button>
              </form>
            </div>
            <!-- Login Meta-->
            <div class="login-meta-data">
              <p class="mt-3 mb-0">Already have an account?<a class="ms-1" href="{{ route('login') }}">Sign In</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('main-old')
  <x-guest-layout>
      <form method="POST" action="{{ route('register') }}">
          @csrf

          <!-- Name -->
          <div>
              <x-input-label for="name" :value="__('Name')" />
              <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
              <x-input-error :messages="$errors->get('name')" class="mt-2" />
          </div>

          <!-- Email Address -->
          <div class="mt-4">
              <x-input-label for="email" :value="__('Email')" />
              <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>

          <!-- Password -->
          <div class="mt-4">
              <x-input-label for="password" :value="__('Password')" />

              <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="new-password" />

              <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>

          <!-- Confirm Password -->
          <div class="mt-4">
              <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

              <x-text-input id="password_confirmation" class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation" required autocomplete="new-password" />

              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          </div>

          <div class="flex items-center justify-end mt-4">
              <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                  {{ __('Already registered?') }}
              </a>

              <x-primary-button class="ml-4">
                  {{ __('Register') }}
              </x-primary-button>
          </div>
      </form>
  </x-guest-layout>
@endsection