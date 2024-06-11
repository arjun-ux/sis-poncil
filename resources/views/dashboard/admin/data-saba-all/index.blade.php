@extends('dashboard.admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <h2>Data Santri</h2>
        <table class="table table-bordered table-stripped" id="tableSantri" style="width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@push('script')
  <script>
    $(document).ready(function(){
        $('#tableSantri').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '/getAllSantri',
                type: 'GET',
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'nis', name: 'nis'},
                {data: 'nama_lengkap', name: 'nama_lengkap'},
                {data: 'action', orderable: false, searchable: false}

            ],
            deferRender: true,  // Defer rendering for improved performance
            paging: true,       // Enable pagination
            pageLength: 5,     // Number of records per page
        });
    });

    {{--  $.ajax({
        url: '/getAllSantri',
        type: 'GET',
        cache: false,
        success: function(res){
            console.log(res);
        }
    });  --}}
  </script>
@endpush


