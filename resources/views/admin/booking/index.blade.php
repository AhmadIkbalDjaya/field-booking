@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/admin/field.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/admin/table.css') }}">
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

  <section id="headerLapangan">
    <div class="container-fluid card shadow">
      <div class="row p-3">
        <div class="col-md-12">
          <h3>Booking & Show Lapangan</h3>
          <p>Melihat lapangan yang tersedia & Melihat Pesanan</p>
        </div>
        <div class="col-md-4">
          <a href="{{ route('admin.booking.show_field') }}"><button type="button" class="btn btn-primary">Lihat
              Lapangan</button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- alerts -->
  <div id="liveAlertPlaceholder"></div>

  <!-- End Alerts -->

  <section class="Lapangan">
    <div class="container-fluid card shadow my-3">
      <div class="row">
        <div class="col-md-12 p-4">
          <div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th class="col-md-0">No.</th>
                  <th class="col-md-5">No. Telepon</th>
                  <th class="col-md-5">Nama</th>
                  <th class="col-md-5">Status</th>
                  <th class="col-md-1">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>085xxxx</td>
                  <td>Aldi</td>
                  <td><span class="badge text-bg-warning">panding</span></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-primary btn-sm dropdown-toggle mx-3" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Actions
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Terima</a></li>
                        <li><a class="dropdown-item" href="#">Payment</a></li>
                        <li><a class="dropdown-item" href="#">Tolak</a></li>
                      </ul>
                      <a href="{{ route('admin.booking.show') }}"><span class="badge text-bg-info">Informasi</span></a>
                      <a href="#"><span class="badge text-bg-danger ms-2" data-bs-toggle="modal"
                          data-bs-target="#exampleModal">Delete</span></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>085xxx</td>
                  <td>Andi</td>
                  <td><span class="badge text-bg-success">Succes</span></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-primary btn-sm dropdown-toggle mx-3" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Actions
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Terima</a></li>
                        <li><a class="dropdown-item" href="#">Payment</a></li>
                        <li><a class="dropdown-item" href="#">Tolak</a></li>
                      </ul>
                      <a href="{{ route('admin.booking.show') }}"><span class="badge text-bg-info">Informasi</span></a>
                      <a href="#"><span class="badge text-bg-danger ms-2" data-bs-toggle="modal"
                          data-bs-target="#exampleModal">Delete</span></a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">Apakah anda yakin ingin menghapusnya?</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-primary">Ya</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @push('script')
    <script src="{{ asset('/js/style.js') }}"></script>
  @endpush
@endsection
