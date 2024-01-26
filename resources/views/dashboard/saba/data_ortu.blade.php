@extends('dashboard.saba.layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center mx-3">
            <div class="col-md-12">
                <a href="#" class="btn mt-1">Data Diri</a>
                <img src="{{ asset('img/panah.png') }}" width="20px" alt="">
                <a href="#" class="btn mt-1">Data Orang Tua</a>
                <img src="{{ asset('img/panah.png') }}" width="20px" alt="">
                <a href="#" class="btn mt-1">Data Berkas</a>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <h4 class="text-center">Kelengkapan Data Diri</h4>
            <div class="col-md-8 col-sm-8 border mx-1 mt-1 p-3">
                <form action="#" method="post">
                    @csrf
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                          <label for="inputPassword6" class="col-form-label">Nama Lengkap</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" id="inputPassword6" class="form-control" >
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                          <label for="inputPassword6" class="col-form-label">Nama Lengkap</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" id="inputPassword6" class="form-control" >
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-2">
                        <div class="col-md-4">
                          <label for="inputPassword6" class="col-form-label">Nama Lengkap</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" id="inputPassword6" class="form-control" >
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-3 border mx-1 mt-1">
                <p>Progres Pendaftaran</p>
                <hr>
                <ul>
                    <li>
                        <a class="pro" href="{{ route('data-diri') }}">Data Diri</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
