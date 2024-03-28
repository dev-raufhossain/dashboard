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
        <a href="{{route('users.index')}}" class="btn-download">
            <span class="text">All Admin List</span>
        </a>
    </div>

{{-- New Admin add --}}
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Add New Admin</h3>
                <i class='bx bx-search' ></i>
                <i class='bx bx-filter' ></i>
            </div>
            <div class="data_table">
                <form action="{{route('users.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>                            
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="uid" class="form-label">Employee ID</label>
                        <input type="text" class="form-control" id="uid" name="uid">
                        @error('uid')
                        <div class="text-danger">{{ $message }}</div>                            
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>                            
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>                              
                            @endforeach
                        </select>
                        @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
{{-- New Admin add --}}
</main>
@endsection