@extends('dashboard.saba.layouts.main')
@section('content')
@if (session('success'))
    <div class="alert alert-success" role="alert">
        <ul>{{ session('success') }}</ul>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center py-5 px-2">
        <div class="col-md-8 col-sm-8 col-xs-12 border mx-1 mt-1 p-3 align-items-center">
            <div class="dashboard-info d-flex">
                <p>Berkas Santri</p>
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
                    <div class="card-body">
                        <h5>Form Update Berkas <strong></strong></h5>
                        <hr>
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3 col-lg-3">
                                    <h4>Kartu Keluarga</h4>
                                    <div class="file-upload-container">
                                        <img src="{{ asset('img/preview-image.png') }}" alt="Gambar" class="file-upload-image preview-foto" id="previewFoto2">
                                        <div class="file-upload-overlay">
                                            <i class="fas fa-camera"></i>
                                            <p>Pilih Gambar</p>
                                            <input type="file" class="file-upload-input" id="previewFotoInput2" name="kk">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <h4>Ijazah SLTA</h4>
                                    <div class="file-upload-container">
                                        <img src="{{ asset('img/preview-image.png') }}" alt="Gambar" class="file-upload-image preview-foto" id="previewFoto3">
                                        <div class="file-upload-overlay">
                                            <i class="fas fa-camera"></i>
                                            <p>Pilih Gambar</p>
                                            <input type="file" class="file-upload-input" id="previewFotoInput3" name="ijasah_slta">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <h4>Ijazah SLTP</h4>
                                    <div class="file-upload-container">
                                        <img src="{{ asset('img/preview-image.png') }}" alt="Gambar" class="file-upload-image preview-foto" id="previewFoto4">
                                        <div class="file-upload-overlay">
                                            <i class="fas fa-camera"></i>
                                            <p>Pilih Gambar</p>
                                            <input type="file" class="file-upload-input" id="previewFotoInput4" name="ijasah_sltp">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <h4>KTP</h4>
                                    <div class="file-upload-container">
                                        <img src="{{ asset('img/preview-image.png') }}" alt="Gambar" class="file-upload-image preview-foto" id="previewFoto5">
                                        <div class="file-upload-overlay">
                                            <i class="fas fa-camera"></i>
                                            <p>Pilih Gambar</p>
                                            <input type="file" class="file-upload-input" id="previewFotoInput5" name="ktp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                    <a class="pro" href="{{ route('dataOrtu') }}">Data Orang Tua</a>
                </li>
                <li>
                    <a class="pro" href="{{ route('asalSekolah') }}">Asal Sekolah</a>
                </li>
                <li>
                    <a class="pro active" href="{{ route('data-diri') }}">Berkas Santri</a>
                </li>
                <li>
                    <a class="pro" href="{{ route('data-diri') }}">Validasi</a>
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
                    <a class="pro" href="{{ route('dataOrtu') }}">Data Orang Tua</a>
                </li>
                <li>
                    <a class="pro" href="{{ route('asalSekolah') }}">Asal Sekolah</a>
                </li>
                <li>
                    <a class="pro active" href="{{ route('sabaBerkas') }}">Berkas Santri</a>
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
