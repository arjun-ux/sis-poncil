@extends('dashboard.admin.layouts.main')
@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
              <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama Lenkap</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($saba as $item)
                    <tr>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td><a href="{{ route('showSaba', $item->id) }}" class="btn btn-warning">Detail</a></td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>
@endsection
