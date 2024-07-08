@extends('dashboard.saba.layouts.main')
@section('content')
<style>
    .file-upload-container {
      position: relative;
      overflow: hidden;
      display: inline-block;
      z-index: 3;
      width: 100%; /* Change this to 100% */
      height: 170px;

    }

    .file-upload-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
      border: 1px solid #ccc;
    }

    .file-upload-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: rgba(0, 0, 0, 0.685);
      color: white;
      z-index: 2;
      opacity: 0;
      transition: all 0.2s ease;
    }

    .file-upload-overlay:hover {
      opacity: 1;
    }

    .file-upload-overlay i {
      font-size: 3rem;
      margin-bottom: 1rem;
    }
    .file-upload-overlay p {
      color: white;
    }

    .file-upload-input {
      position: absolute;
      bottom: 0;
      right: 0;
      margin: 0;
      padding: 0;
      font-size: 100px;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0);
      z-index: 3;
      width: 100%;
      height: 100%;
    }

    </style>
@if (session('success'))
    <div class="alert alert-success" role="alert">
        <ul>{{ session('success') }}</ul>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center py-5 px-2">
        <div class="col-md-8 col-sm-8 col-xs-12 border mx-1 mt-1 p-3 align-items-center">
            <div class="dashboard-info d-flex">
                <div class="p">Berkas Santri</div>
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
                        <form action="{{ route('updateBerkas', $saba->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3 col-lg-3">
                                    <h5>Foto</h5>
                                    <div class="file-upload-container">
                                        <img src="{{ asset($berkas->foto ? 'storage/'.$berkas->foto :'img/preview-image.png') }}" alt="Gambar" class="file-upload-image preview-foto" id="previewFoto2">
                                        <div class="file-upload-overlay">
                                            <i class="fas fa-camera"></i>
                                            <p>Pilih Gambar</p>
                                            <input type="file" class="file-upload-input" id="previewFotoInput2" name="foto">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <h5>KK</h5>
                                    <div class="file-upload-container">
                                        <img src="{{ asset($berkas->kk ? 'storage/'.$berkas->kk :'img/preview-image.png') }}" alt="Gambar" class="file-upload-image preview-foto" id="previewFoto3">
                                        <div class="file-upload-overlay">
                                            <i class="fas fa-camera"></i>
                                            <p>Pilih Gambar</p>
                                            <input type="file" class="file-upload-input" id="previewFotoInput3" name="kk">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <h5>KTP Ortu</h5>
                                    <div class="file-upload-container">
                                        <img src="{{ asset($berkas->ktp_ortu ? 'storage/'.$berkas->ktp_ortu :'img/preview-image.png') }}" alt="Gambar" class="file-upload-image preview-foto" id="previewFoto4">
                                        <div class="file-upload-overlay">
                                            <i class="fas fa-camera"></i>
                                            <p>Pilih Gambar</p>
                                            <input type="file" class="file-upload-input" id="previewFotoInput4" name="ktp_ortu">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <h5>KTP Wali</h5>
                                    <div class="file-upload-container">
                                        <img src="{{ asset($berkas->ktp_wali ? 'storage/'.$berkas->ktp_wali :'img/preview-image.png') }}" alt="Gambar" class="file-upload-image preview-foto" id="previewFoto5">
                                        <div class="file-upload-overlay">
                                            <i class="fas fa-camera"></i>
                                            <p>Pilih Gambar</p>
                                            <input type="file" class="file-upload-input" id="previewFotoInput5" name="ktp_wali">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-3 col-xs-12 border mx-1 mt-1 p-2 mobile-pro">
            <div class="p">Progres Pendaftaran</div>
            <hr>
            <ul>
                <li><a class="pro" href="{{ route('dashba') }}">Dashboard</a></li>
                <li><a class="pro" href="{{ route('data-diri') }}">Data Diri</a></li>
                <li><a class="pro" href="{{ route('dataOrtu') }}">Data Orang Tua</a></li>
                <li><a class="pro" href="{{ route('asalSekolah') }}">Asal Sekolah</a></li>
                <li><a class="pro active" href="{{ route('data-diri') }}">Berkas Santri</a></li>
                <li><a class="pro" href="{{ route('data-diri') }}">Validasi</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><div class="p">Progres Pendaftaran</div></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul>
            <li><a class="pro" href="{{ route('dashba') }}">Dashboard</a></li>
            <li><a class="pro" href="{{ route('data-diri') }}">Data Diri</a></li>
            <li><a class="pro" href="{{ route('dataOrtu') }}">Data Orang Tua</a></li>
            <li><a class="pro" href="{{ route('asalSekolah') }}">Asal Sekolah</a></li>
            <li><a class="pro active" href="{{ route('data-diri') }}">Berkas Santri</a></li>
            <li><a class="pro" href="{{ route('data-diri') }}">Validasi</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script>
    const previewFotoInputs = document.querySelectorAll('.file-upload-input');
        previewFotoInputs.forEach(function(input) {
        input.addEventListener('change', function() {
            const file = this.files[0];
            const previewFoto = document.getElementById('previewFoto' + this.id.slice(-1));
            if (file) {
            const reader = new FileReader();
            reader.onloadend = function() {
                previewFoto.src = reader.result;
                const fileInput = document.getElementById('previewFotoInput');
            }
            reader.readAsDataURL(file);
            } else {
            previewFoto.src = "{{ asset('img/preview-image.png') }}";
            }
        });
    });

</script>
@endsection
