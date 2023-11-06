@extends('includes.app')
@section('content')
    <div class="login-box">

        <form method="POST" action="/user" enctype="multipart/form-data">

            {{ csrf_field() }}
            <h4 class="heading text-center">Register Page</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row login-input">
                <div class="mb-3 col-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                </div>
                <div class="mb-3 col-6">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile">
                </div>
                <div class="mb-3 col-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                </div>
                <div class="mb-3 col-6">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                        placeholder="Re Enter Password">
                </div>
                <div class="mt-2 col-12">
                    <button type="submit" name="submit" class="btn btn-success">Register</button>
                </div>
            </div>
        </form>
    </div>
@endsection
