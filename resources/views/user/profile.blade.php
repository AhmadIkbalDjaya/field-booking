@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/user/field.css') }}">
@endpush

@section('body')
  @include('components.nav_responsive')
  @include('components.navbar')

  {{-- Spasi --}}
  <section id="spasi">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12"></div>
      </div>
    </div>
  </section>

  <section id="Informasi">
    <div class="container">
      <div class="row card">
        <div class="col-md-12 card-header text-center">
          <h1>Informasi</h1>
        </div>
        <div class="col-md-12 card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th class="col-md-0">No.</th>
                  <th class="col-md-3">Tanggal</th>
                  <th class="col-md-3">Jam</th>
                  <th class="col-md-4">Boking Lapangan</th>
                  <th class="col-md-4">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Senin 17 Mei 2023</td>
                  <td>10.00 - 12.00</td>
                  <td>Futsall</td>
                  <td>
                    <button class="badge text-bg-warning" disabled>Padding</button>
                    <button class="badge text-bg-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i
                        class="bi bi-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Senin 17 Mei 2023</td>
                  <td>12.00 - 01.00</td>
                  <td>Basket</td>
                  <td>
                    <button class="badge text-bg-success" disabled>Succes</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Senin 17 Mei 2023</td>
                  <td>01.00 - 02.00</td>
                  <td>Badminton</td>
                  <td>
                    <button class="badge text-bg-danger" disabled>Failed</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Senin 17 Mei 2023</td>
                  <td>02.00 - 03.00</td>
                  <td>Basket</td>
                  <td>
                    <button class="badge text-bg-secondary" disabled>Pay Now</button>
                    <button class="badge text-bg-danger px-4" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                        class="bi bi-send"></i></button>
                  </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Succes</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Bank : BRI</p>
                        <p>Nomor Rekening : 2208 1996 1403</p>
                        <p>Nama penerima : Shanya</p>
                        <form action="">
                          <label for="formFile" class="form-label fw-bold">Kirim Bukti Pembayaran</label>
                          <div class="d-flex">
                            <input class="form-control" type="file" id="formFile" required />
                            <button class="btn btn-primary mx-3" type="submit">Kirim</button>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer p-4">
                        <p>
                          Segera Melakukan Pembayaran dalam kurung waktu 15 Menit <br />
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">Apakah Anda Yakin Ingin Menghapusnya?</div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Hapus</button>
                      </div>
                    </div>
                  </div>
                </div>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>




  </section>
@endsection
