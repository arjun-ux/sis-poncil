@extends('layouts.main')
@section('content')
<style>
    body {
        background-color: #b2d8d8;
    }

</style>
<div class="container py-5">
    <div class="row justify-content-center py-3">
        <div class="col-md-4 col-sm-8 col-lg-4">
            <div class="card">
                <div class="card-header text-center border-light bg-white">
                    <img class="mb-3" src="{{ asset('img/log.png') }}" alt="" width="90px">
                    <p>REGISTRASI SANTRI BARU</p>
                </div>
                <div class="card-body text-center">
                    <form action="{{ route('doRegister') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="mt-2">
                                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" placeholder="Nama Lengkap"
                                    value="{{ old('nama_lengkap') }}" autofocus>
                                    @error('nama_lengkap')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Aktif"
                                    value="{{ old('email') }}">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                    <button class="btn btn-success" type="submit">Daftar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
