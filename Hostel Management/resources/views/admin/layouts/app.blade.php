<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('admin.includes.head')    
</head>
<body>
	@yield('css')
	@include('admin.includes.header')
    <div class=" container py-4">
	   @yield('content')
	   @include('admin.includes.footer')
    </div>
	@yield('js')
</body>