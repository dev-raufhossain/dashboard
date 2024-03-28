@extends('layouts.app')
@section('content')

<main>
    <div class="head-title">
        <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="{{route('users.index')}}">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="{{route('users.index')}}">Home</a>
                </li>
            </ul>
        </div>
        <a href="{{route('users.create')}}" class="btn-download">
            <span class="text">Add User</span>
        </a>
    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Recent Orders</h3>
                <i class='bx bx-search' ></i>
                <i class='bx bx-filter' ></i>
            </div>
            <div class="data_table">
                <table id="example" class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Serial</th>
                            <th>Employee Name</th>
                            <th>Employee ID</th>
                            <th>Employee Email</th>
                            <th>Roles</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->uid }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <div class="btn-group bg-2" role="group" aria-label="Basic mixed styles example">
                                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-primary"">Edit</a>
                                        <form action="{{route('users.destroy', $user->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection
