@extends('layouts.skeleton')

@section('app')
<div class="main-wrapper">

    @include('layouts.includes.topbar')
    @include('layouts.includes.sidebar')
    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>
</div>
@endsection
