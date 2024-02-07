@extends('dashboard.saba.layouts.main')
@section('content')
@if (session('success'))
    <div class="alert alert-success" role="alert">
        <ul>{{ session('success') }}</ul>
    </div>
@endif
@if (session('warning'))
    <div class="alert alert-warning" role="alert">
        <ul>{{ session('warning') }}</ul>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-8 col-sm-8 col-xs-12 border mx-1 mt-1 p-3 align-items-center">
            <div class="dashboard-info mb-3">
                <p>Data Asal Sekolah</p>
                <hr class="m-0">
            </div>
            <div class="data-dashboard">
                <div class="col-md-12 col-sm-12 col-xs-12 px-2">
                    <form action="" method="POST">
                        @csrf
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputSekolahAsal" class="col-form-label">Asal Sekolah</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputSekolahAsal" class="form-control" name="asal_sekolah"
                              value="{{ $sabaMasuk->asal_sekolah }}">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputSekolahAsalalam" class="col-form-label">Alamat Asal Sekolah</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputSekolahAsalalam" class="form-control" name="alamat_asal_sekolah"
                              value="{{ $sabaMasuk->alamat_asal_sekolah }}">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputditerima" class="col-form-label">Diterima Di Kelas</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputditerima" class="form-control" name="diterima_dikelas"
                              value="{{ $sabaMasuk->diterima_dikelas }}">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputnosuratPindah" class="col-form-label">No Surat Pindah</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputnosuratPindah" class="form-control" name="no_surat_pindah"
                              value="{{ $sabaMasuk->no_surat_pindah }}">
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </form>
                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-3 col-xs-12 border mx-1 mt-1 p-2">
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
                    <a class="pro" href="{{ route('dataOrtu') }}">Data Orang Tua</a>
                </li>
                <li>
                    <a class="pro active" href="{{ route('asalSekolah') }}">Asal Sekolah</a>
                </li>
                <li>
                    <a class="pro" href="{{ route('data-diri') }}">Berkas Santri</a>
                </li>
                <li>
                    <a class="pro" href="{{ route('data-diri') }}">Validasi</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
