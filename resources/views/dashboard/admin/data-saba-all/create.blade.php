@extends('dashboard.admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="table-responsive">
                <table class="table text-center table-bordered">
                    <thead>
                        <th id="data-santri" style="background-color: rgb(163, 190, 163)">Data Santri</th>
                        <th id="data-ortu" style="background-color: rgb(188, 209, 206)">Data Orang Tua</th>
                        <th id="data-wali" style="background-color: rgb(163, 165, 190)">Data Wali</th>
                    </thead>
                </table>
            </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Modal -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <form id="postCreate">
                @csrf
                <input type="hidden" name="dataid">
                {{--  form data diri santri  --}}
                <div id="form-santri">
                    <div class="col-md-12">
                    <h4>Data Santri</h4>
                    <hr>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                            <label for="inputEmail" class="col-form-label">Email</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="inputEmail" class="form-control"
                            name="email" placeholder="Email Untuk Kirim Notifikasi">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                            <label for="inputnik" class="col-form-label">NIK</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="inputnik" class="form-control"
                            name="nik" placeholder="Berisi 16 Karakter">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                            <label for="inputnokk" class="col-form-label">NO KK</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="inputnokk" class="form-control"
                            name="nokk" placeholder="Berisi 16 Karakter">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                            <label for="inputname" class="col-form-label">Nama Lengkap</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="inputname" class="form-control" name="nama_lengkap">
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
                            <select name="jenis_kelamin" id="inputJK" class="form-control">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2" id="saudara-kandung">
                        <div class="col-md-4">
                            <label for="saudara_kandung" class="col-form-label">Saudara Kandung</label>
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" id="saudara_kandung" name="saudara_kandung" value="YA">
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="anak_ke" class="form-control" name="anak_ke" placeholder="Anak Ke?">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                            <label for="province-dd" class="col-form-label">Provinsi</label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" id="province-dd" name="provinsi">
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
                            <input type="text" id="inputdus" class="form-control" name="dusun">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                            <label for="inputrt" class="col-form-label">RT/RW</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="inputrt" class="form-control" name="rt_rw">
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
                    </div>
                </div>
                {{--  form orang tua  --}}
                    <div id="form-ortu" style="display: none">
                        <h4>Data Orang Tua</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                <div class="card-title fw-bold text-center"><h5>Ayah</h5></div>
                                </div>
                                <div class="card-body">
                                <div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                    <label for="nik_ayah" class="col-form-label">NIK Ayah</label>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" id="nik_ayah" class="form-control"
                                    name="nik_ayah" placeholder="Berisi 16 digit">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                    <label for="nama_ayah" class="col-form-label">Nama Ayah</label>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" id="nama_ayah" class="form-control" name="nama_ayah">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                    <label for="pekerjaan-ayah" class="col-form-label">Pekerjaan Ayah</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="pekerjaan_ayah" id="pekerjaan-ayah" class="form-control">
                                            <option value="">Pilih Pekerjaan</option>
                                            @foreach ($pekerjaan as $val)
                                                <option value="{{ $val->id }}">{{ $val->nama_pekerjaan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                    <label for="pendidikan-ayah" class="col-form-label">Pendidikan Ayah</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="pendidikan-ayah" id="pendidikan-ayah" class="form-control">
                                            <option value="">Pilih Pendidikan</option>
                                            @foreach ($pendidikan as $val)
                                                <option value="{{ $val->id }}">{{ $val->nama_pendidikan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                    <label for="no_hp_ayah" class="col-form-label">No Hp Ayah</label>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" id="no_hp_ayah" class="form-control" name="no_hp_ayah">
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                <div class="card-title fw-bold text-center"><h5>Ibu</h5></div>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                        <label for="nik_ibu" class="col-form-label">NIK Ibu</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="nik_ibu" class="form-control"
                                        name="nik_ibu" placeholder="Berisi 16 digit">
                                    </div>
                                    </div>
                                    <div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                        <label for="nama_ibu" class="col-form-label">Nama Ibu</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="nama_ibu" class="form-control" name="nama_ibu">
                                    </div>
                                    </div>
                                    <div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                        <label for="pekerjaan-ibu" class="col-form-label">Pekerjaan Ibu</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="pekerjaan_ibu" id="pekerjaan-ibu" class="form-control">
                                            <option value="">Pilih Pekerjaan</option>
                                            @foreach ($pekerjaan as $val)
                                                <option value="{{ $val->id }}">{{ $val->nama_pekerjaan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                    <div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                        <label for="pendidikan-ibu" class="col-form-label">Pendidikan Ibu</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="pendidikan-ibu" id="pendidikan-ibu" class="form-control">
                                            <option value="">Pilih Pendidikan</option>
                                            @foreach ($pendidikan as $val)
                                                <option value="{{ $val->id }}">{{ $val->nama_pendidikan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div><div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                        <label for="no_hp_ibu" class="col-form-label">No Hp Ibu</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="no_hp_ibu" class="form-control" name="no_hp_ibu">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                {{--  form wali  --}}
                    <div id="form-wali" style="display: none" class="mt-3">
                        <h4>Data Wali</h4>
                        <input type="hidden" name="wali" id="wali">
                        <hr>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Wali</div>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                        <label for="nama_wali" class="col-form-label">Nama Wali</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="nama_wali" class="form-control" name="nama_wali">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                        <label for="kedudukan_dalam_keluarga" class="col-form-label">Kedudukan Dalam Keluarga</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="kedudukan_dalam_keluarga" class="form-control" name="kedudukan_dalam_keluarga">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-2">
                                    <div class="col-md-4">
                                        <label for="no_hp_wali" class="col-form-label">No HP Wali</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="no_hp_wali" class="form-control" name="no_hp_wali">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ayahIbu" style="display: none">
                        <div class="alert alert-info" id="infoWaliDiPilih">
                            <p>Wali telah Dipilih</p>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row mt-3" id="submit" style="display: none">
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div>
                    </div>
            </form>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@push('script')
<script>
    $('#data-santri').click(function(){
        $('#form-santri').show();
        $('#form-ortu').hide();
        $('#form-wali').hide();
        $('#ayahIbu').hide();
    });
    $('#data-ortu').click(function(){
        $('#form-ortu').show();
        $('#form-santri').hide();
        $('#form-wali').hide();
        $('#ayahIbu').hide();
    });
    $('#data-wali').click(function(){
        var klickwali = $('#wali').val();
        if (klickwali === 'Ayah') {
            $('#ayahIbu').show();
            $('#form-ortu').hide();
            $('#form-santri').hide();
            return;
        }else if(klickwali === 'Ibu'){
            $('#ayahIbu').show();
            $('#form-ortu').hide();
            $('#form-santri').hide();
            return;
        }else if(klickwali === 'Wali'){
            $('#form-wali').show();
            $('#form-ortu').hide();
            $('#form-santri').hide();
            return;
        }
        /* inputOptions can be an object or Promise */
        const inputOptions = new Promise((resolve) => {
            resolve({
                "Ayah": "Ayah",
                "Ibu": "Ibu",
                "Wali": "Wali"
            });
        });
        const { value: wali } = Swal.fire({
            icon: "question",
            title: "Pilih Salah Satu Sebagai Wali",
            input: "radio",
            showCancelButton: true,
            toast: true,
            inputOptions,
            inputValidator: (value) => {
                if (!value) {
                    return "Pilih Salah Satu !!!";
                }
                if(value === 'Ayah'){
                    var wali = $('#wali').val('Ayah');
                    $('#infoWaliDiPilih').text('Ayah Dipilih Sebagai Wali');
                    $('#ayahIbu').show();
                    $('#form-ortu').hide();
                    $('#form-wali').hide();
                }else if(value === 'Ibu'){
                    var wali = $('#wali').val('Ibu');
                    $('#infoWaliDiPilih').text('Ibu Dipilih Sebagai Wali');
                    $('#ayahIbu').show();
                    $('#form-ortu').hide();
                    $('#form-wali').hide();
                }else{
                    var wali = $('#wali').val('Wali');
                    $('#form-wali').show();
                }
            }
        }).then((value)=>{
            if(value.isDismissed){
                $('#infoWaliDiPilih').text('Silahkan Pilih Salah Satu Wali Untuk Melanjutkan Input Data');
                $('#ayahIbu').show();
                return;
            }else{
                $('#submit').show();
            }
        });
        $('#form-ortu').hide();
        $('#form-santri').hide();
    });
    $('#postCreate').submit(function(e){
        e.preventDefault();
        $('#loader').show();
        $.ajax({
            url: "{{ url('/store-santri') }}",
            type: "POST",
            data: $('#postCreate').serialize(),
            success: function(res){
                console.log(res);
                $('#loader').hide();
                Swal.fire({
                    icon: "success",
                    title: res.message,
                    toast: true,
                    position: "top-end",
                    timer: 2000,
                    showConfirmButton: false,
                    timerProgressBar: true,
                }).then(()=>{
                    var sabaId = res.data.id;
                    window.location.href = '/berkas?saba='+sabaId;
                });
            },
            error: function(xhr, error) {
                $('#loader').hide();
                let errorMessages = xhr.responseJSON.errors;
                Object.keys(errorMessages).forEach((key) => {
                    errorMessages[key].forEach((errorMessage) => {
                        toastr.error(errorMessage);
                    });
                });
            }
        });
    });
    $(document).ready(function(){

        {{--  cek saudara kandung  --}}
        $('#inputnokk').on('input', function(){
            var nokk = $(this).val();
            if (nokk.length === 16){
                $('#loader').show();
                $.ajax({
                    url: '/saudara-kandung/'+nokk,
                    type: 'POST',
                    data: {
                        nokk: nokk,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(res){
                        $('#loader').hide();
                        if(res.status === 404){
                            console.log('Tidak Sekandung')
                        }else{
                            Swal.fire({
                                icon: 'info',
                                title: res.message,
                                toast: true,
                                showCancelButton: true,
                            }).then((value)=>{
                                if(value.isConfirmed){
                                    var saudara = $('#saudara_kandung');
                                    saudara.prop('checked', true);
                                    saudara.prop('disabled', true);
                                    var id_saudara = res.data;
                                    updateSaudaraKandung(id_saudara);
                                }else{
                                    $('#inputnokk').val(null);
                                }
                            });
                        }
                    },
                    error: function(xhr, error){
                        $('#loader').hide();
                        console.log(xhr);
                        console.log(error);
                    }
                });
            }
        });
        function updateSaudaraKandung(id_saudara){
            $('#loader').show();
            $.ajax({
                url: '/updateSaudaraKandung',
                type: 'POST',
                data: {
                    data : id_saudara,
                    _token: '{{ csrf_token() }}'
                },
                success: function(res){
                    $('#loader').hide();
                    console.log(res)
                },
                error: function(xhr, error){
                    $('#loader').hide();
                    console.log(xhr)
                    console.log(error)
                }
            });
        }
        {{--  indo region  --}}
        $('#province-dd').on('change', function(){
            var idProv = this.value;
            $('#city-dd').html('');
            $.ajax({
                url : "{{ url('api/fetch-kota') }}",
                type: 'POST',
                data: {
                    province_id: idProv,
                    _token: "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function(res){
                    $('#city-dd').html('<option value="">Pilih Kota/Kabupaten</option>');
                    $.each(res.kota, function(key, value){
                        $('#city-dd').append('<option value="' + value.id + '">' + value.name + '</option>');
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
    });
</script>
@endpush
