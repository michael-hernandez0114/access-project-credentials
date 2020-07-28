@extends('layouts.layout')
@section('title')
    'Home'
@endsection

@section('body')
@include('partials.header')
<div class="container">
    <h3>Access Your Project Credentials</h3>
    <a class="btn btn-primary mb-3" href="{{route('projects.create')}}">Add New Credentials</a>
    <div id="app">
        <project-credentials :projects="projects"></project-credentials>
        
        {{-- <table class="table" data-custom="">
            
            <thead>
                <th>Project</th>
                <th>Service</th>
                <th>Username</th>
                <th>Password</th>
                <th>Show Password</th>
            </thead>
            <tbody>
                <tr v-for="project in projects" :key="project.id">
                    <td>@{{ project.project}}</td>
                    <td>@{{ project.service}}</td>
                    <td>@{{ project.username}}</td>
                <td :id="'password-' + project.id">@{{ displayPasswordAsterisk(project.password)}}</td>
                    <td>

                        <button @click="postPasswordRetrieval(project.id,project.password)" class="btn btn-primary">Show Password</button>

                    </td>
                </tr>
            
            </tbody>

        </table> --}}
    </div>
</div>
@endsection
