@extends('layouts.app')

@section('style')
    {{ Html::style(mix('css/backend.css')) }}
@endsection

@section('content')
    <div class="container">
        @yield('backend-content')
    </div>
@endsection

@section('footer_scripts')
    @yield('scripts')
@endsection