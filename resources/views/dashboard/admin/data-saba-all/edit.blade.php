@extends('dashboard.admin.layouts.main')
@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <form action="#" method="post">
                @csrf
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-md-4">
                      <label for="inputnik" class="col-form-label">NIK</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="inputnik" class="form-control" name="nik"
                      value="{{ $dataSaba->nik }}">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-md-4">
                      <label for="inputnokk" class="col-form-label">NO KK</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="inputnokk" class="form-control" name="nokk"
                      value="{{ $dataSaba->nokk }}">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-md-4">
                      <label for="inputname" class="col-form-label">Nama Lengkap</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="inputname" class="form-control" name="nama_lengkap"
                      value="{{ $dataSaba->nama_lengkap }}">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-md-4">
                      <label for="inputlahir" class="col-form-label">Tempat Lahir</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="inputlahir" class="form-control" name="tempat_lahir"
                      value="{{ $dataSaba->tempat_lahir }}">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-md-4">
                      <label for="inputdateL" class="col-form-label">Tanggal Lahir</label>
                    </div>
                    <div class="col-md-8">
                      <input type="date" id="inputdateL" class="form-control" name="tanggal_lahir"
                      value="{{ $dataSaba->tanggal_lahir }}">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-md-4">
                      <label for="inputJK" class="col-form-label">Jenis Kelamin</label>
                    </div>
                    <div class="col-md-8">
                      <select name="jenis_kelamin" id="inputJK" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki" {{ $dataSaba->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="perempuan" {{ $dataSaba->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                      </select>
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-md-4">
                      <label for="province-dd" class="col-form-label">Provinsi</label>
                    </div>
                    <div class="col-md-8">
                        <select class="form-control" id="province-dd" name="provinsi">
                            @if ($dataSaba->provinsi)
                            <option value="{{ old('provinsi', $dataSaba->provinsi) }}">{{ $dataSaba->Provinsi->name }}</option>
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
                      value="{{ $dataSaba->dusun }}">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-md-4">
                      <label for="inputrt" class="col-form-label">RT/RW</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="inputrt" class="form-control" name="rt_rw"
                      value="{{ $dataSaba->rt_rw }}">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-md-4">
                      <label for="inputalam" class="col-form-label">Alamat</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="inputalam" class="form-control" name="alamat"
                      value="{{ $dataSaba->alamat }}">
                    </div>
                </div>

                <button class="btn btn-success" type="submit">Simpan</button>
            </form>
        </div>
      </div>
</div>
@endsection
@push('script')
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

            var prov = '{{ $dataSaba->provinsi }}'
            var desa = '{{ $dataSaba->desa }}'
            var kab = '{{ $dataSaba->kabupaten }}'
            var kec = '{{ $dataSaba->kecamatan }}'

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
