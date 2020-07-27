<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@yield('body')

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    {{-- <script src="https://kit.fontawesome.com/4aa4c430a6.js" crossorigin="anonymous"></script> --}}
</body>
</html>
