@extends('layouts.dashboard')
@section('content')
    @include('components.auth.dashboard.sidebarComponent')
    @include('components.auth.dashboard.navbarComponent')
    @include('components.auth.dashboard.categories.indexComponent')
    @include('components.auth.dashboard.footerComponent')
    <script>
        (async ()=>{
            await getCategoriesLists();
        })()
    </script>
@endsection
