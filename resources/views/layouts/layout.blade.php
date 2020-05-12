<!DOCTYPE html>
<html lang="el">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="stylesheet" href="{{ mix('css/vendor.css', 'assets/{slug}') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css', 'assets/{slug}') }}">

    @include('{slug}::partials.icons')

    @yield('seo')

    @include('{slug}::partials.xfs')
    @if(App::environment('production'))
        @include('{slug}::partials.ga')
    @endif

</head>

<body>

<div id="app">

    @yield('content')

</div>

<script src="{{ mix('js/manifest.js', 'assets/{slug}') }}"></script>
<script src="{{ mix('js/vendor.js', 'assets/{slug}') }}"></script>
<script src="{{ mix('js/app.js', 'assets/{slug}') }}"></script>

</body>
</html>

