@extends('includes.admin_header')
@section('content')
    <div class="home">
        <div class="container">
            <table class="table table-striped table-hover text-center">
                <h4 class="p-3 text-center">Users List</h4>
                <thead class="bg-dark text-white p-1">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    {{ $users = DB::table('users')->where('user_type', 0)->simplePaginate(5) }}
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@endsection
