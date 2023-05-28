@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/user/field.css') }}">
@endpush

@section('body')
  @include('components.navbar')

  {{-- Spasi --}}
  <section id="spasi">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12"></div>
      </div>
    </div>
  </section>

  {{-- Booking --}}
  <section id="booking">
    <div class="container">
      <div class="row card">
        <div class="col-md-12 text-center card-header">
          <h1>Lapangan Futsall</h1>
        </div>
        <div class="col-md-12 card-body">
          <img class="rounded-3" src="{{ asset('/images/lapangan1.jpg') }}" alt="img" width="100%"
            height="200px" />
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">
                        <button type="button" class="btn btn-info" style="width: 100%">
                          <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                          <p>17 Mei</p>
                        </button>
                      </th>
                      <th scope="col">
                        <button type="button" class="btn btn-info" style="width: 100%">
                          <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                          <p>18 Mei</p>
                        </button>
                      </th>
                      <th scope="col">
                        <button type="button" class="btn btn-info" style="width: 100%">
                          <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                          <p>19 Mei</p>
                        </button>
                      </th>
                      <th scope="col">
                        <button type="button" class="btn btn-info" style="width: 100%">
                          <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                          <p>20 Mei</p>
                        </button>
                      </th>
                      <th scope="col">
                        <button type="button" class="btn btn-info" style="width: 100%">
                          <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                          <p>21 Mei</p>
                        </button>
                      </th>
                      <th scope="col">
                        <button type="button" class="btn btn-info" style="width: 100%">
                          <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                          <p>22 Mei</p>
                        </button>
                      </th>
                      <th scope="col">
                        <button type="button" class="btn btn-info" style="width: 100%">
                          <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                          <p>23 Mei</p>
                        </button>
                      </th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-1 px-3 py-2" style="width: auto">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">10.00 - 12.00</button>
              </div>
              <div class="col-md-1 px-3 py-2" style="width: auto">
                <button type="button" class="btn btn-secondary btn-sm" disabled data-bs-toggle="modal"
                  data-bs-target="#exampleModal">12.00 - 01.00</button>
              </div>
              <div class="col-md-1 px-3 py-2" style="width: auto">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">01.00 - 02.00</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <form action="">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Booking Lapangan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                  <input type="number" class="form-control" id="exampleFormControlInput1" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Kirim</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
@endsection
