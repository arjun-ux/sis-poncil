@extends('dashboard.saba.layouts.main')
@section('content')

    <div class="container">
        <div class="row justify-content-center py-5 px-2">
            <div class="col-md-8 col-sm-8 col-xs-12 border mx-1 mt-1 p-3 align-items-center">
                <div class="dashboard-info d-flex">
                    <p>Dashboard</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn mobile" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="{{ asset('img/menu.png') }}" width="25px" alt="">
                    </button>
                </div>
                <div class="dashboard-info mb-3">
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

            <div class="col-md-3 col-sm-3 col-xs-12 border mx-1 mt-1 p-2 mobile-pro">
                <p>Progres Pendaftaran</p>
                <hr>
                <ul class="nav-list">
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
                        <a class="pro" href="{{ route('sabaBerkas') }}">Berkas Santri</a>
                    </li>
                    <li>
                        <a class="pro" href="#">Validasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"><p>Progres Pendaftaran</p></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
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
                        <a class="pro" href="{{ route('sabaBerkas') }}">Berkas Santri</a>
                    </li>
                    <li>
                        <a class="pro" href="#">Validasi</a>
                    </li>
                </ul>
          </div>
        </div>
      </div>
    </div>
@endsection

