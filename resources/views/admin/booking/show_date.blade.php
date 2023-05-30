@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/user/field.css') }}">
@endpush

@section('body')
  @include('components.nav_responsive2')
  @include('components.navbar2')

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
      <div class="row card my-3">
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
                        <div class="from-check">
                          <input class="form-check-input" type="radio" name="hari" id="senin1" />
                          <label class="form-check-label w-100" for="senin1">
                            <button type="button" class="btn btn-info" style="width: 100%"
                              onclick="selectButton('senin1')">
                              <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                              <p>17 Mei</p>
                            </button>
                          </label>
                        </div>
                      </th>
                      <th scope="col">
                        <div class="from-check">
                          <input class="form-check-input" type="radio" name="hari" id="senin2" />
                          <label class="form-check-label w-100" for="senin2">
                            <button type="button" class="btn btn-info" style="width: 100%"
                              onclick="selectButton('senin2')">
                              <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                              <p>17 Mei</p>
                            </button>
                          </label>
                        </div>
                      </th>
                      <th scope="col">
                        <div class="from-check">
                          <input class="form-check-input" type="radio" name="hari" id="senin3" />
                          <label class="form-check-label w-100" for="senin3">
                            <button type="button" class="btn btn-info" style="width: 100%"
                              onclick="selectButton('senin3')">
                              <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                              <p>17 Mei</p>
                            </button>
                          </label>
                        </div>
                      </th>
                      <th scope="col">
                        <div class="from-check">
                          <input class="form-check-input" type="radio" name="hari" id="senin4" />
                          <label class="form-check-label w-100" for="senin4">
                            <button type="button" class="btn btn-info" style="width: 100%"
                              onclick="selectButton('senin4')">
                              <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                              <p>17 Mei</p>
                            </button>
                          </label>
                        </div>
                      </th>
                      <th scope="col">
                        <div class="from-check">
                          <input class="form-check-input" type="radio" name="hari" id="senin5" />
                          <label class="form-check-label w-100" for="senin5">
                            <button type="button" class="btn btn-info" style="width: 100%"
                              onclick="selectButton('senin5')">
                              <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                              <p>17 Mei</p>
                            </button>
                          </label>
                        </div>
                      </th>
                      <th scope="col">
                        <div class="from-check">
                          <input class="form-check-input" type="radio" name="hari" id="senin6" />
                          <label class="form-check-label w-100" for="senin6">
                            <button type="button" class="btn btn-info" style="width: 100%"
                              onclick="selectButton('senin6')">
                              <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                              <p>17 Mei</p>
                            </button>
                          </label>
                        </div>
                      </th>
                      <th scope="col">
                        <div class="from-check">
                          <input class="form-check-input" type="radio" name="hari" id="senin7" />
                          <label class="form-check-label w-100" for="senin7">
                            <button type="button" class="btn btn-info" style="width: 100%"
                              onclick="selectButton('senin7')">
                              <p class="fw-bold pt-2 fs-5 h-100">Senin</p>
                              <p>17 Mei</p>
                            </button>
                          </label>
                        </div>
                      </th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12 ">
                    <div class="container">
                      <div class="row align-items-center text-center">
                        <div class="col-md-3 mb-3 col-6 ">
                          <div class="from-check">
                            <input class="form-check-input" type="radio" name="time" id="time1" />
                            <label class="form-check-label w-100" for="time1">
                              <button type="button" class="btn btn-info" style="width: 100%"
                                onclick="selectButton('time1')">
                                10.00 - 12.00
                              </button>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 mb-3 col-6 ">
                          <div class="from-check">
                            <input class="form-check-input" type="radio" name="time" id="time2" />
                            <label class="form-check-label w-100" for="time2">
                              <button type="button" class="btn btn-info" style="width: 100%"
                                onclick="selectButton('time2')" disabled>
                                12.00 - 02.00
                              </button>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 mb-3 col-6 ">
                          <div class="from-check">
                            <input class="form-check-input" type="radio" name="time" id="time3" />
                            <label class="form-check-label w-100" for="time3">
                              <button type="button" class="btn btn-info" style="width: 100%"
                                onclick="selectButton('time3')">
                                02.00 - 03.00
                              </button>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
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
    <script src="{{ asset('js/style.js') }}"></script>
  @endpush
@endsection
