@extends('layouts.main')

@push('style')
  {{-- <link rel="stylesheet" href="{{ asset('/css/admin/field') }}"> --}}
@endpush

@section('body')
  @include('components.nav_responsive2')
  @include('components.navbar2')

  {{-- Spasi --}}
  <section id="spasi_admin">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12"></div>
      </div>
    </div>
  </section>

  <section id="header">
    <div class="container">
      <div class="row shadow py-3">
        <div class="col-3">
          <div><img src="{{ asset('/images/lapangan1.jpg') }}" alt="img" class="rounded-2" height=" 150px" /></div>
        </div>
        <div class="col-6 text-center align-self-center">
          <h3>Informasi Booking</h3>
        </div>
      </div>
    </div>
  </section>

  <section id="informasi">
    <div class="container">
      <div class="row card shadow p-4 mt-3">
        <div class="col-md-12">
          <h4 class="card-header">Informasi</h4>
          <div class="card-body">
            <div class="col-12 col-md-6">
              <table class="table table-borderless table-responsive">
                <tbody>
                  <tr>
                    <td>Nama Lapangan</td>
                    <td>:</td>
                    <td>Lapanagan A</td>
                  </tr>
                  <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>Futsall</td>
                  </tr>
                  <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>30/05/2023</td>
                  </tr>
                  <tr>
                  <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td>Andi</td>
                  </tr>
                  <tr>
                    <td>Waktu</td>
                    <td>:</td>
                    <td>20.00 - 01.00</td>
                  </tr>
                  <tr>
                    <td>Nomor Telepon</td>
                    <td>:</td>
                    <td>085xxxx</td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><span class="badge text-bg-warning">panding</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <a href="{{ route('admin.booking.index') }}">
              <p><i class="bi bi-arrow-left"></i> Back</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
