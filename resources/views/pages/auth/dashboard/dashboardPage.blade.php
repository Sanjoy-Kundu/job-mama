@extends('layouts.dashboard')
@section('content')
    @include('components.auth.dashboard.sidebarComponent')
    @include('components.auth.dashboard.navbarComponent')
    @include('components.auth.dashboard.mainComponent')
    @include('components.auth.dashboard.footerComponent')
@endsection
