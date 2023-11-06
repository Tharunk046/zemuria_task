@extends('includes.admin_header')
@section('content')
    <div class="home">
        <div class="container">
            <div class="alert alert-success text-center" role="alert">
                Admin Panel
            </div>
            <div class="alert alert-primary" role="alert">
                Hey {{ Auth::user()->name }} Logged in sucessfully !!!
            </div>
            
        </div>
    </div>
@endsection
