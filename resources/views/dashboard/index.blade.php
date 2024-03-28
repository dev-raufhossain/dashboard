@extends('layouts.app')
@section('content')

<main>
    <div class="head-title">
        <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="{{route('dashboard')}}">Home</a>
                </li>
            </ul>
        </div>
    </div>


</main>

@endsection
