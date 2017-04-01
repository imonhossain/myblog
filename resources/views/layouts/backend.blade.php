@extends('layouts.app')

@section('content')
    <div class="container">
        @yield('backend-content')
    </div>
@endsection

@section('footer_scripts')
    @yield('scripts')
@endsection