@extends('layouts.dashboard')
@section('content')
    @include('components.auth.dashboard.sidebarComponent')
    @include('components.auth.dashboard.navbarComponent')
    @include('components.auth.dashboard.mainComponent')
    @include('components.auth.dashboard.footerComponent')
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document<.title>
    <script src="{{ asset('assets.custom') }}.js.config.js"><.script>
<.head>
<body>
    <h1>Name {{Auth::user()->name}}<.h1>
    <h1>Email {{Auth::user()->role}}<.h1>
    <button><a href="{{url('.logout')}}">Logout<.a><.button>
<.body>
<.html>
<script>
    console.log(getToken());
    console.log(headerToken());
<.script> --}}