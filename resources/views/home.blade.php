@extends('includes.app')
@section('content')
    <div class="home">
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-danger mt-3" role="alert">
                    <strong class="text-capitalize">{{ session('message') }}</strong>
                </div>
            @endif
            <div class="alert alert-success text-center" role="alert">
                User Panel
            </div>
            <div class="alert alert-primary" role="alert">
                Hey {{ Auth::user()->name }} Logged in sucessfully !!!
            </div>
        </div>
    </div>
@endsection
