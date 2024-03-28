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
    {{-- edit --}}

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Edit Admin</h3>
                <i class='bx bx-search' ></i>
                <i class='bx bx-filter' ></i>
            </div>
            <div class="data_table">
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>                            
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="uid" class="form-label">Employee ID</label>
                        <input type="text" class="form-control" id="uid" name="uid" value="{{$user->uid}}">
                        @error('uid')
                        <div class="text-danger">{{ $message }}</div>                            
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>                            
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role">
                            @foreach ($roles as $role)
                                <option value="{{$role->name}}" @if($user->role == $role->name) selected @endif>{{$role->name}}</option>                            
                            @endforeach
                        </select>
                        @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
{{-- edit --}}


</main>
@endsection