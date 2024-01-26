@extends('dashboard.saba.layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-8 col-sm-8 col-xs-12 border mx-1 mt-1 p-3 align-items-center">
            <div class="dashboard-info mb-3">
                <p>Data Diri</p>
                <hr class="m-0">
            </div>
            <div class="data-dashboard">
                <div class="col-md-12 col-sm-12 col-xs-12 px-2">
                    <form action="{{ route('upadateDataDiri', $sabaUser) }}" method="post">
                        @csrf
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputnik" class="col-form-label">NIK</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputnik" class="form-control" name="nik">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputnokk" class="col-form-label">NO KK</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputnokk" class="form-control" name="nokk">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputname" class="col-form-label">Nama Lengkap</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputname" class="form-control" name="nama_lengkap"
                              value="">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputlahir" class="col-form-label">Tempat Lahir</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputlahir" class="form-control" name="tempat_lahir">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputdateL" class="col-form-label">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-8">
                              <input type="date" id="inputdateL" class="form-control" name="tanggal_lahir">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputJK" class="col-form-label">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-8">
                              <select name="jenis_kelamin" id="inputJK" class="form-select">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                              </select>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputalam" class="col-form-label">Alamat</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputalam" class="form-control" name="alamat">
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
                    <a class="pro" href="{{ route('data-diri') }}">Data Orang Tua</a>
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
@push('script')
<script>
    $(document).ready(function(){
        $('#inputJK').select2();
    });
</script>
@endpush
