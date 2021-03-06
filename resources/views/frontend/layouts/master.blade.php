<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(!empty(Settings::getMetaRobots()))
        <meta name="robots" content="{{ Settings::getMetaRobots() }}">
@endif
<!--facebook open graph-->
    <meta name="og:type" content="blog">
    <meta name="og:site_name" content="{{ config('app.name') }}">

@yield('og-title')
@yield('og-image')
@yield('og-description')

<!--SEO-->
    <meta name="author" content="{{ Settings::getMetaAuthor() }}">
    <meta name="keywords" content="{{ Settings::getMetaKeywords() }}">
    <meta name="description" content="{{ Settings::getMetaDescription() }}">

    <title>{{ config('app.name') }} | @yield('title', Settings::getMetaTitle())</title>

    <!--favicon-->
    <link rel="icon" href="{{ url('favicon.ico') }}" type="image/x-icon" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script>
        window.myblog = {
            url : "{{ config('app.url') }}"
        }
    </script>
    <script src="{{ url('js/app.js') }}" ></script>

    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">

</head>

<body>

@yield('body_content')

<!-- Scripts -->
@yield('body_scripts')

@include('partials._google_analytics')

</body>
</html>
