@extends('dashboard.admin.layouts.main')
@section('content')
<div class="row">
    <h4>Selamat Datang, {{ Auth::user()->username }}</h4>
</div>
@endsection
