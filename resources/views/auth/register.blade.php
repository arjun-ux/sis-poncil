@extends('layouts.main')
@section('content')
<style>
    body {
        background-color: #b2d8d8;
    }

</style>
<div class="container py-5">
    <div class="row justify-content-center py-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center border-light bg-white">
                    <img class="mb-3" src="{{ asset('img/log.png') }}" alt="" width="90px">
                    <p>REGISTRASI SANTRI BARU</p>
                </div>
                <div class="card-body text-center">
                    <form action="{{ route('doRegister') }}" method="post">
                        @csrf
                        <div class="row align-items-center mb-3">
                            <div class="col-md-12">
                                <div class="mt-2">
                                    <input type="text" id="inputPassword6" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="mt-2">
                                    <input type="text" id="inputPassword6" class="form-control" name="email" placeholder="Email Aktif">
                                </div>
                                <div class="mt-2">
                                    <input type="password" id="inputPassword6" class="form-control" name="password" placeholder="Password">
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
