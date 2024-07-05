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


