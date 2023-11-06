@extends('includes.app')
@section('content')
    <div class="login-box">
        <form method="POST" action="/loginValidate" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h4 class="heading text-center">Login Page</h4>
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
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                </div>
                <div class="mb-3 col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                </div>
                <div class="mt-2 col-6">
                    <button type="submit" name="submit" class="btn btn-success">Login</button>
                </div>
            </div>
        </form>
    </div>
@endsection
