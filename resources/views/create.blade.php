@extends('layouts.layout')
@section('title')
    'Insert New Project Credentials'
@endsection

@section('body')
@include('partials.header')
<div class="container">
    <h3>Enter New Project Credentials</h3>
    
    <form class="" action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
            {{-- <h4>Apartment info</h4> --}}
            <label for="project">Project</label>
            <input type="text" name="project" class="form-control" value="{{old('project')}}">
        </div>
        @error('project')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="service">Service</label>
            <input type="text" name="service" class="form-control" value="{{old('service')}}">
        </div>
        @error('service')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" value="{{old('username')}}">
        </div>
        @error('username')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control" value="{{old('password')}}">
        </div>
        @error('password')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
    
</div>
@endsection
