@extends('layouts.layout')
@section('title')
    'Home'
@endsection

@section('body')
@include('partials.header')
<div class="container">
    <h3>Access Your Project Credentials</h3>
    <a class="btn btn-primary mb-3" href="{{route('projects.create')}}">Add New Credentials</a>
    <table class="table">
        <thead>
            <th>Project</th>
            <th>Service</th>
            <th>Username</th>
            <th>Password</th>
            <th>Show Password</th>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{$project->project}}</td>
                <td>{{$project->service}}</td>
                <td>{{$project->username}}</td>
                <td>{{$project->password}}</td>
                <td>
                    {{-- <a class="btn btn-primary mb-3" href="{{route('logging', $project->project)}}">Show Password</a> --}}
                
                    <form action="{{route('logging', $project->id)}}" method="POST">
                        @csrf
                        @method('POST')
                        <input class="btn btn-primary" type="submit" value="Show Password">
                    </form>

                </td>
            </tr>
            @endforeach
            
        </tbody>



    </table>
</div>
@endsection
