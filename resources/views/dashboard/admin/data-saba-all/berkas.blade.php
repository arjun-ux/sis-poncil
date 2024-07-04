@extends('dashboard.admin.layouts.app')
@section('content')
<style>
    .file-upload-container {
        position: relative;
        overflow: hidden;
        display: inline-block;
        z-index: 3;
        width: 100%; /* Change this to 100% */
        height: 200px;
        border: rgb(142, 184, 187) solid 1px;
    }
    .file-upload-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
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
        background-color: rgba(0, 0, 0, 0.5);
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
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="table-responsive">
                        <table class="table text-center table-border">
                            <th id="berkas" style="background-color: rgb(245, 226, 175)">Data Berkas</th>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{--  <form id="postBerkas" action="{{ route('store.berkas') }}" method="POST" enctype="multipart/form-data">  --}}
                            <form id="postBerkas" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <input type="hidden" name="idSaba" id="idSaba">
                                        <div class="col-md-3 col-lg-3">
                                            <h5 class="fw-bold">Foto</h5>
                                            <div class="file-upload-container">
                                                <img src="{{ asset('img/preview-image.png') }}" alt="Gambar" class="file-upload-image preview-foto" id="previewFoto1">
                                                <div class="file-upload-overlay">
                                                    <i class="lni lni-camera"></i>
                                                    <p>Pilih Gambar</p>
                                                    <input type="file" class="file-upload-input" id="previewFotoInput1" name="foto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3">
                                            <h5 class="fw-bold">Kartu Keluarga</h5>
                                            <div class="file-upload-container">
                                                <img src="{{ asset('img/preview-image.png') }}" alt="Gambar" class="file-upload-image preview-foto" id="previewFoto2">
                                                <div class="file-upload-overlay">
                                                    <i class="lni lni-camera"></i>
                                                    <p>Pilih Gambar</p>
                                                    <input type="file" class="file-upload-input" id="previewFotoInput2" name="kk">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3">
                                            <h5 class="fw-bold">KTP Orang Tua</h5>
                                            <div class="file-upload-container">
                                                <img src="{{ asset('img/preview-image.png') }}" alt="Gambar" class="file-upload-image preview-foto" id="previewFoto3">
                                                <div class="file-upload-overlay">
                                                    <i class="lni lni-camera"></i>
                                                    <p>Pilih Gambar</p>
                                                    <input type="file" class="file-upload-input" id="previewFotoInput3" name="ktp_ortu">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3">
                                            <h5 class="fw-bold">KTP Wali</h5>
                                            <div class="file-upload-container">
                                                <img src="{{ asset('img/preview-image.png') }}" alt="Gambar" class="file-upload-image preview-foto" id="previewFoto4">
                                                <div class="file-upload-overlay">
                                                    <i class="lni lni-camera"></i>
                                                    <p>Pilih Gambar</p>
                                                    <input type="file" class="file-upload-input" id="previewFotoInput4" name="ktp_wali">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-3">
                                <div class="row">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
<script>
    {{--  id saba  --}}
    const urlParams= new URLSearchParams(window.location.search);
    var sabaId = urlParams.get('saba');
    $('#idSaba').val(sabaId);

    $('#postBerkas').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: '/berkas',
            type: 'POST',
            data: formData,
            processData: false, //tidak memproses data (formdata)
            contentType: false, //tidak mengatur konten
            success: function(res){
                Swal.fire({
                    icon: "success",
                    title: res.message,
                    toast: true,
                    position: "top-end",
                    timer: 2000,
                    showConfirmButton: false,
                    timerProgressBar: true,
                }).then(()=>{
                    window.location.href = '/saba-all';
                });
            },
            error: function(xhr, error) {
                let errorMessages = xhr.responseJSON.errors;
                Object.keys(errorMessages).forEach((key) => {
                    errorMessages[key].forEach((errorMessage) => {
                        toastr.error(errorMessage);
                    });
                });
            }
        });
    });

    const previewFotoInputs = document.querySelectorAll('.file-upload-input');
        previewFotoInputs.forEach(function(input) {
        input.addEventListener('change', function() {
            const file = this.files[0];
            const previewFoto = document.getElementById('previewFoto' + this.id.slice(-1));
            if (file) {
            const reader = new FileReader();
            reader.onloadend = function() {
                previewFoto.src = reader.result;
                const fileInput = document.getElementById('previewFotoInput' + this.id.slice(-1));
                fileInput.value = reader.result;
            }
            reader.readAsDataURL(file);
            } else {
            previewFoto.src = "{{ asset('img/preview-image.png') }}";
            }
        });
    });
</script>
@endpush
