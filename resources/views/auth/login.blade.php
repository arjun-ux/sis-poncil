
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
                <div class="card-header text-center border-light bg-white p-0">
                    <img class="mb-2 mt-3" src="{{ asset('img/log.png') }}" alt="" width="90px">
                    <p>LOGIN</p>
                </div>
                <div class="card-body text-center">
                    <form action="{{ route('doLogin') }}" method="post">
                        @csrf
                        <div class="row align-items-center mb-3">
                            <div class="col-md-12">
                                <div class="mt-2">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="mt-2">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                        </div>

                    <button class="btn btn-success" type="submit">Log In</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
