@extends('dashboard.admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit {{ $data->nama_lengkap }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">

                </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Modal -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row p-2">
            <div class="col-md-12">
                <form id="postUpdate">
                    @csrf
                    <input type="hidden" name="dataid">
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                          <label for="inputnik" class="col-form-label">NIK</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" id="inputnik" class="form-control" name="nik"
                          value="{{ $data->nik }}">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                          <label for="inputnokk" class="col-form-label">NO KK</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" id="inputnokk" class="form-control" name="nokk"
                          value="{{ $data->nokk }}">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                          <label for="inputname" class="col-form-label">Nama Lengkap</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" id="inputname" class="form-control" name="nama_lengkap"
                          value="{{ $data->nama_lengkap }}">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                          <label for="inputlahir" class="col-form-label">Tempat Lahir</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" id="inputlahir" class="form-control" name="tempat_lahir"
                          value="{{ $data->tempat_lahir }}">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                          <label for="inputdateL" class="col-form-label">Tanggal Lahir</label>
                        </div>
                        <div class="col-md-8">
                          <input type="date" id="inputdateL" class="form-control" name="tanggal_lahir"
                          value="{{ $data->tanggal_lahir }}">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                          <label for="inputJK" class="col-form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-md-8">
                          <select name="jenis_kelamin" id="inputJK" class="form-control">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="laki-laki" {{ $data->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="perempuan" {{ $data->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                          </select>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                          <label for="province-dd" class="col-form-label">Provinsi</label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" id="province-dd" name="provinsi">
                                @if ($data->provinsi)
                                <option value="{{ old('provinsi', $data->provinsi) }}">{{ $data->Provinsi->name }}</option>
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
                          <label for="kecamatan-dd" class="col-form-label">Kecamatan</label>
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
                          value="{{ $data->dusun }}">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                          <label for="inputrt" class="col-form-label">RT/RW</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" id="inputrt" class="form-control" name="rt_rw"
                          value="{{ $data->rt_rw }}">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                          <label for="inputalam" class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" id="inputalam" class="form-control" name="alamat"
                          value="{{ $data->alamat }}">
                        </div>
                    </div>

                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>

            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@push('script')

    <script>
        @php
        use App\Providers\RouteParamService as routeParam;
        @endphp

        $('#postUpdate').submit(function(e){
            e.preventDefault();
            var id = '{{ routeParam::encode($data->id) }}'
            $.ajax({
                url: '/saba/'+id+'/update',
                type: 'POST',
                data: $('#postUpdate').serialize(),
                success: function(res){
                    Swal.fire({
                        icon: 'success',
                        title: res.message,
                        toast: true,
                        position: 'top-end',
                        timer: 2000,
                        showConfirmButton: false,
                        timerProgressBar: true,
                    }).then(()=>{
                        location.reload();
                    });
                },
                error: function(xhr, error) {
                    let errorMessages = xhr.responseJSON.errors;
                    Object.keys(errorMessages).forEach((key) => {
                        errorMessages[key].forEach((errorMessage) => {
                            toastr.info(errorMessage);
                        });
                    });
                }
            })
        })
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

            var prov = '{{ $data->provinsi }}'
            var desa = '{{ $data->desa }}'
            var kab = '{{ $data->kabupaten }}'
            var kec = '{{ $data->kecamatan }}'

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
