@extends('dashboard.saba.layouts.main')
@section('content')
@if (session('success'))
    <div class="alert alert-success" role="alert">
        <ul>{{ session('success') }}</ul>
    </div>
@endif

<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-8 col-sm-8 col-xs-12 border mx-1 mt-1 p-3 align-items-center">
            <div class="dashboard-info mb-3 d-flex">
                <p>Data Orang Tua</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn mobile" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="{{ asset('img/menu.png') }}" width="25px" alt="">
                </button>
            </div>
            <div class="dashboard-info mb-3">
                <hr class="m-0">
            </div>
            <div class="data-dashboard">
                <div class="col-md-12 col-sm-12 col-xs-12 px-2">
                    <form action="{{ route('updateOrtu', $dataOrtu->id) }}" method="POST">
                        @csrf
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputnik" class="col-form-label">NIK Ayah</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputnik" class="form-control" name="nik_ayah"
                              value="{{ $dataOrtu->nik_ayah }}">
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputname" class="col-form-label">Nama Ayah</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputname" class="form-control" name="nama_ayah"
                              value="{{ $dataOrtu->nama_ayah }}">
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputkerja" class="col-form-label">Pekerjaan Ayah</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputkerja" class="form-control" name="pekerjaan_ayah"
                              value="{{ $dataOrtu->pekerjaan_ayah }}">
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputpendidikan" class="col-form-label">Pendidikan Ayah</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputpendidikan" class="form-control" name="pendidikan_ayah"
                              value="{{ $dataOrtu->pendidikan_ayah }}">
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputHp" class="col-form-label">No Tlpn Ayah</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputHp" class="form-control" name="no_hp_ayah"
                              value="{{ $dataOrtu->no_hp_ayah }}">
                            </div>
                        </div>
                        {{--  ibu  --}}
                        <hr>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputnik" class="col-form-label">NIK Ibu</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputnik" class="form-control" name="nik_ibu"
                              value="{{ $dataOrtu->nik_ibu }}">
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputname" class="col-form-label">Nama Ibu</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputname" class="form-control" name="nama_ibu"
                              value="{{ $dataOrtu->nama_ibu }}">
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputkerja" class="col-form-label">Pekerjaan Ibu</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputkerja" class="form-control" name="pekerjaan_ibu"
                              value="{{ $dataOrtu->pekerjaan_ibu }}">
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputpendidikan" class="col-form-label">Pendidikan Ibu</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputpendidikan" class="form-control" name="pendidikan_ibu"
                              value="{{ $dataOrtu->pendidikan_ibu }}">
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputHp" class="col-form-label">No Tlpn Ibu</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputHp" class="form-control" name="no_hp_ibu"
                              value="{{ $dataOrtu->no_hp_ibu }}">
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </form>
                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-3 col-xs-12 border mx-1 mt-1 p-2 mobile-pro">
            <p>Progres Pendaftaran</p>
            <hr>
            <ul>
                <li>
                    <a class="pro" href="{{ route('dashba') }}">Dashboard</a>
                </li>
                <li>
                    <a class="pro" href="{{ route('data-diri') }}">Data Diri</a>
                </li>
                <li>
                    <a class="pro active" href="{{ route('dataOrtu') }}">Data Orang Tua</a>
                </li>
                <li>
                    @if ($dataAsalSekolah)
                    <a class="pro" href="{{ route('asalSekolah') }}">Asal Sekolah</a>
                    @else
                    <a class="pro" href="#">Asal Sekolah</a>
                    @endif
                </li>
                <li>
                    <a class="pro" href="#">Berkas Santri</a>
                </li>
                <li>
                    <a class="pro" href="#">Validasi</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"><p>Progres Pendaftaran</p></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
                <ul>
                    <li>
                        <a class="pro" href="{{ route('dashba') }}">Dashboard</a>
                    </li>
                    <li>
                        <a class="pro" href="{{ route('data-diri') }}">Data Diri</a>
                    </li>
                    <li>
                        @if ($dataOrtu)
                        <a class="pro active" href="{{ route('dataOrtu') }}">Data Orang Tua</a>
                        @else
                        <a class="pro" href="#">Data Orang Tua</a>
                        @endif
                    </li>
                    <li>
                        @if ($dataAsalSekolah)
                        <a class="pro" href="{{ route('asalSekolah') }}">Asal Sekolah</a>
                        @else
                        <a class="pro" href="#">Asal Sekolah</a>
                        @endif
                    </li>
                    <li>
                        <a class="pro" href="#">Berkas Santri</a>
                    </li>
                    <li>
                        <a class="pro" href="#">Validasi</a>
                    </li>
                </ul>
          </div>
        </div>
      </div>
    </div>
@endsection
