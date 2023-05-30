@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@endpush

<section id="register">
  <div class="container-fluid h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-md-9 text-center text-white">
            <h1>Booking Lapangan</h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-11 col-md-5">
            <div class="login-box">
              <p>Register</p>
              <form>
                <div class="user-box">
                  <input required="" name="" type="text" />
                  <label>Username</label>
                </div>
                <div class="user-box">
                  <input required="" name="" type="text" />
                  <label>Email</label>
                </div>
                <div class="user-box">
                  <input required="" name="" type="password" />
                  <label>Password</label>
                </div>
                <div class="user-box">
                  <input required="" name="" type="password" />
                  <label>Komfirmasi Password</label>
                </div>
                <a href="/Admin/dashboard.html">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Submit
                </a>
              </form>
              <p class="regist">Udah Punya
                Akun? <a href="{{ route('login') }}">
                  Login
                </a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
