@extends('dashboard.admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <th style="background-color: rgb(233, 246, 232)">Data <strong>{{ $datas['data']->nama_lengkap }}</strong></th>
                            <th class="text-end" style="background-color: rgb(233, 246, 232)">
                                <button type="button" class="btn btn-sm btn-outline-warning" ><i class="lni lni-cloud-download"></i></button>
                                <button type="button" class="btn btn-sm btn-outline-primary" ><i class="lni lni-pencil-alt"></i></button>
                            </th>
                        </table>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    @if ($datas['berkas'] == null)
                                        <img class="img-thumbnail" src="{{ asset('img/preview-image.png') }}" alt="pp">
                                    @else
                                    <h5>FOto</h5>
                                        <img class="img-thumbnail" src="{{ asset('storage/'. $datas['berkas']->foto) }}" alt="foto-profile-santri">
                                    @endif
                                    @if ($datas['berkas'] == null)
                                        <img class="img-thumbnail" src="{{ asset('img/preview-image.png') }}" alt="pp">
                                    @else
                                    <h5>KK</h5>
                                        <img class="img-thumbnail" src="{{ asset('storage/'. $datas['berkas']->kk) }}" alt="foto-profile-santri">
                                    @endif
                                    @if ($datas['berkas'] == null)
                                        <img class="img-thumbnail" src="{{ asset('img/preview-image.png') }}" alt="pp">
                                    @else
                                    <h5>KTP ORTU</h5>
                                        <img class="img-thumbnail" src="{{ asset('storage/'. $datas['berkas']->ktp_ortu) }}" alt="foto-profile-santri">
                                    @endif
                                    @if ($datas['berkas'] == null)
                                        <img class="img-thumbnail" src="{{ asset('img/preview-image.png') }}" alt="pp">
                                    @else
                                    <h5>KTP WALI</h5>
                                        <img class="img-thumbnail" src="{{ asset('storage/'. $datas['berkas']->ktp_wali) }}" alt="foto-profile-santri">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@push('script')
  <script>

  </script>
@endpush


