@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/admin/field.css') }}">
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

  <section id="header-editLapangan">
    <div class="container-fluid card shadow-lg">
      <div class="row mt-3">
        <div class="col-2">
          <a href="{{ route('admin.field.index') }}"><button type="button" class="btn btn-primary"><i
                class="bi bi-arrow-left-circle"></i></button></a>
        </div>
        <div class="col-12 text-center">
          <h3>Edit Lapangan</h3>
          <p>Edit Lapangan pada colom dibawah</p>
        </div>
      </div>
    </div>
  </section>

  <section id="addLapangan">
    <div class="container-fluid">
      <div class="row m-4 justify-content-center">
        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="login-box">
              <form>
                <h4 class="mb-4 text-center">Lapangan</h4>
                <div class="user-box">
                  <input type="text" name="" required="" />
                  <label class="text-black">Nama Lapangan</label>
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Masukkan foto Lapangan</label>
                  <input class="form-control" type="file" id="formFile" />
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <div>
                      <label for="text-black">Pilih kategori</label>
                      <select class="form-select" aria-label="Default select example">
                        <option value="1">Futsall</option>
                        <option value="2">Basket</option>
                        <option value="2">Badminton</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row text-center my-4">
                  <div class="col-md-12">
                    <div class="login-box">
                      <button href="guru.html" class="card">
                        ubah
                        <span></span>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
