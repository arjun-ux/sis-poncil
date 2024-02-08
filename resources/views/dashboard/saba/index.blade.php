@extends('dashboard.saba.layouts.main')
@section('content')
<style>
    .disabled-control {
        background-color: transparent !important;
        box-shadow: none !important;
        border: none;
    }
    .disabled-control:focus {
        box-shadow: none !important;
    }
    .rowMB {
        margin-bottom: 0;
        display: flex;
    }
    @media (max-width: 767.98px) {
        .data-dashboard {
            flex-direction: column;
        }
        .data-dashboard .col-md-3 {
            order: 1;
        }
        .data-dashboard .col-md-9 {
            order: 2;
        }
    }
</style>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-8 col-sm-8 col-xs-12 border mx-1 mt-1 p-3 align-items-center">
                <div class="dashboard-info mb-3">
                    <p>Dashboard</p>
                    <hr class="m-0">
                </div>
                <div class="data-dashboard">
                    <div class="col-md-4 col-xs-12">
                        <img class="img-thumbnail" src="{{ asset('img/pp.png') }}" alt="pp">
                    </div>
                    <div class="col-md-8 col-xs-12 px-2">
                        <div class="rowMB align-items-center ">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label">No Pendaftar</label>
                            </div>
                            <div class="col-md-8 col-xs-6">
                                <input type="text" id="inputPassword6" class="form-control disabled-control" disabled
                                value=": {{ Auth::user()->username }}">
                            </div>
                        </div>
                        <div class="rowMB align-items-center ">
                            <div class="col-md-4 col-xs-6">
                                <label for="inputPassword6" class="col-form-label">Nama Lengkap</label>
                            </div>
                            <div class="col-md-8 col-xs-6">
                                <input type="text" id="inputPassword6" class="form-control disabled-control" disabled
                                value=": {{ $dataSaba->nama_lengkap }}">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 border mx-1 mt-1 p-2">
                <p>Progres Pendaftaran</p>
                <hr>
                <ul>
                    <li>
                        <a class="pro active" href="{{ route('dashba') }}">Dashboard</a>
                    </li>
                    <li>
                        <a class="pro" href="{{ route('data-diri') }}">Data Diri</a>
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
                        <a class="pro" href="#">Berkas Santri</a>
                    </li>
                    <li>
                        <a class="pro" href="#">Validasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
