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
                              <input type="text" id="inputnik" class="form-control" name="nik"
                              value="{{ $sabaUser->nik }}">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputnokk" class="col-form-label">NO KK</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputnokk" class="form-control" name="nokk"
                              value="{{ $sabaUser->nokk }}">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputname" class="col-form-label">Nama Lengkap</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputname" class="form-control" name="nama_lengkap"
                              value="{{ $sabaUser->nama_lengkap }}">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputlahir" class="col-form-label">Tempat Lahir</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputlahir" class="form-control" name="tempat_lahir"
                              value="{{ $sabaUser->tempat_lahir }}">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputdateL" class="col-form-label">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-8">
                              <input type="date" id="inputdateL" class="form-control" name="tanggal_lahir"
                              value="{{ $sabaUser->tanggal_lahir }}">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputJK" class="col-form-label">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-8">
                              <select name="jenis_kelamin" id="inputJK" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="laki-laki" {{ $sabaUser->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="perempuan" {{ $sabaUser->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                              </select>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="province-dd" class="col-form-label">Provinsi</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" id="province-dd" name="provinsi">
                                    @if ($sabaUser->provinsi)
                                    <option value="{{ old('provinsi', $sabaUser->provinsi) }}">{{ $sabaUser->Provinsi->name }}</option>
                                    @endif
                                    <option value="">Pilih Provinsi</option>
                                    @foreach ($provinsi as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="city-dd" class="col-form-label">Kabupaten</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" id="city-dd" name="kabupaten">
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="kecamatan-dd" class="col-form-label">Kcematan</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" id="kecamatan-dd" name="kecamatan">
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="desa-dd" class="col-form-label">Desa</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" id="desa-dd" name="desa">
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputdus" class="col-form-label">Dusun</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputdus" class="form-control" name="dusun"
                              value="{{ $sabaUser->dusun }}">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputrt" class="col-form-label">RT/RW</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputrt" class="form-control" name="rt_rw"
                              value="{{ $sabaUser->rt_rw }}">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-md-4">
                              <label for="inputalam" class="col-form-label">Alamat</label>
                            </div>
                            <div class="col-md-8">
                              <input type="text" id="inputalam" class="form-control" name="alamat"
                              value="{{ $sabaUser->alamat }}">
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
                    <a class="pro active" href="{{ route('data-diri') }}">Data Diri</a>
                </li>
                <li>
                    @if ($dataOrtu)
                        <a class="pro" href="{{ route('dataOrtu') }}">Data Orang Tua</a>
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
    <script src="{{ asset('sb/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sb/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sb/js/demo/datatables-demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#province-dd').on('change', function() {
                var idProvince = this.value;
                $("#city-dd").html('');
                $.ajax({
                    url: "{{ url('api/fetch-kota') }}",
                    type: "POST",
                    data: {
                        province_id: idProvince,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#city-dd').html('<option value="">Pilih Kota/Kabupaten</option>');
                        $.each(result.kota, function(key, value) {
                            $("#city-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#kecamatan-dd').html('<option value=""></option>');
                    }
                });
            });
            $('#city-dd').on('change', function() {
                var idState = this.value;
                $("#kecamatan-dd").html('');
                $.ajax({
                    url: "{{ url('api/fetch-kecamatan') }}",
                    type: "POST",
                    data: {
                        regency_id: idState,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#kecamatan-dd').html('<option value="">Pilih kecamatan</option>');
                        $.each(result.kecamatan, function(key, value) {
                            $("#kecamatan-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#desa-dd').html('<option value=""></option>');
                    }
                });
            });
            $('#kecamatan-dd').on('change', function() {
                var district_id = this.value;
                $("#desa-dd").html('');
                $.ajax({
                    url: "{{ url('api/fetch-desa') }}",
                    type: "POST",
                    data: {
                        district_id: district_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#desa-dd').html('<option value="">Pilih Desa</option>');
                        $.each(res.desa, function(key, value) {
                            $("#desa-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

            var prov = '{{ $sabaUser->provinsi }}'
            var desa = '{{ $sabaUser->desa }}'
            var kab = '{{ $sabaUser->kabupaten }}'
            var kec = '{{ $sabaUser->kecamatan }}'

            var idProvince = this.value;
            if (prov) {
                $.ajax({
                    url: "{{ url('api/fetch-kota') }}",
                    type: "POST",
                    data: {
                        province_id: prov,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#city-dd').html('<option value="">Pilih Kota/Kabupaten</option>');

                        $.each(result.kota, function(key, value) {
                            $("#city-dd").append(
                                `<option value="${value.id}" ${value.id == kab ? 'selected' : ''} > ${value.name}</option>`
                            );
                        });
                        $('#kecamatan-dd').html('<option value=""></option>');
                    }
                });
            }
            if (kab) {
                $.ajax({
                    url: "{{ url('api/fetch-kecamatan') }}",
                    type: "POST",
                    data: {
                        regency_id: kab,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#kecamatan-dd').html('<option value="">Pilih kecamatan</option>');

                        $.each(result.kecamatan, function(key, value) {
                            $("#kecamatan-dd").append(
                                `<option value="${value.id}" ${value.id == kec ? 'selected' : ''} > ${value.name}</option>`
                            );
                        });
                        $('#desa-dd').html('<option value=""></option>');
                    }
                });
            }
            if (kec) {

                $.ajax({
                    url: "{{ url('api/fetch-desa') }}",
                    type: "POST",
                    data: {
                        district_id: kec,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#desa-dd').html('<option value="">Pilih Desa</option>');


                        $.each(res.desa, function(key, value) {
                            $("#desa-dd").append(
                                `<option value="${value.id}" ${value.id == desa ? 'selected' : ''} > ${value.name}</option>`
                            );
                        });
                    }
                });
            }
        });
    </script>
@endpush
