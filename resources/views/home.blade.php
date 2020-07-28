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
        <project-credentials :projects="projects" data-custom="<?php echo $user_logged ?>"></project-credentials>
        
        
    </div>
</div>
@endsection
