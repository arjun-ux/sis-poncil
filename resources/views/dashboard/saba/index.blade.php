@extends('dashboard.saba.layouts.main')
@section('content')
<style>
    .btn {
        background-color: rgb(181, 194, 64)!important;
    }
    .btn:hover {
        background-color: rgb(92, 97, 20) !important;
        color: white !important;
    }
    hr {
        margin-top: px !important;
        border-top: 2px solid #17619;
    }
    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    .pro {
        display: block;
        padding: 10px 20px;
        background-color: #297c2c;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .pro:hover {
        background-color: #4be24e;
        color: #333;
    }
    p {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    p:first-child {
        margin-top: 0;
    }

    p:before {
        content: '';
        display: block;
        width: 50px;
        height: 5px;
        background-color: #4CAF50;
        margin-bottom: 10px;
    }
    .disabled-control {
        background-color: transparent !important;
        box-shadow: none !important;
        border: none;
    }

    .disabled-control:focus {
        box-shadow: none !important;
    }
</style>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-8 col-sm-8 border mx-1 mt-1 p-3 d-flex align-items-center">
                <div class="col-md-3">
                    <img class="img-thumbnail" src="{{ asset('img/pp.png') }}" alt="pp">
                </div>
                <div class="col-md-9 px-2">
                    <div class="row align-items-center mb-1">
                        <div class="col-md-4">
                            <label for="inputPassword6" class="col-form-label">No Pendaftar</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="inputPassword6" class="form-control disabled-control" disabled
                            value=": {{ Auth::user()->username }}">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-md-4">
                            <label for="inputPassword6" class="col-form-label">Nama Lengkap</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="inputPassword6" class="form-control disabled-control" disabled
                            value=": {{ $dataSaba->nama_lengkap }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 border mx-1 mt-1 p-2">
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
