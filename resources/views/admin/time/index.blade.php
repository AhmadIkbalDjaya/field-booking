@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/admin/field') }}">
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
    <div class="container-fluid card shadow">
      <div class="row p-3">
        <div class="col-md-12">
          <h3>Time</h3>
          <p>menambah, mengedit, atau menghapus Waktu</p>
        </div>
        <div class="col-md-4">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Add
            Time</button>
        </div>
      </div>
    </div>
  </section>

  <!-- alerts -->
  <div id="liveAlertPlaceholder"></div>

  <!-- End Alerts -->

  <section class="kategori">
    <div class="container-fluid card shadow my-3">
      <div class="row">
        <div class="col-md-12 p-4">
          <div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th class="col-md-0">No.</th>
                  <th class="col-md-7">Waktu</th>
                  <th class="col-md-5">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>12.00 - 01.00</td>
                  <td>
                    <a href="#"><span class="badge text-bg-danger" id="liveAlertBtn">Edit Waktu</span></a>
                    <a href="#"><span class="badge text-bg-danger" id="liveAlertBtn2">Delete</span></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>01.00 - 03.00</td>
                  <td>
                    <button class="badge text-bg-warning" data-bs-toggle="modal" data-bs-target="#exampleModal3">Edit
                      Waktu</button>
                    <a href="#"><span class="badge text-bg-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Delete</span></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <!-- Modal 2 -->
    <form action="">
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Waktu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Time</label>
                <input type="time" class="form-control" id="exampleFormControlInput1" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Modal 3 -->
    <form action="">
      <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Waktu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Time</label>
                <input type="time" class="form-control" id="exampleFormControlInput1" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>

  @push('script')
    <script src="{{ asset('/js/style.js') }}"></script>
  @endpush
@endsection
