<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="/assets/{slug}/css/vendor.css">
    <link rel="stylesheet" href="/assets/{slug}/css/app.css">
    <title>Package Title</title>
    <meta property="og:title" content="Package Title">
    <meta property="og:site_name" content="Package Site Name">
    <meta property="og:description" name="description" content="Package Description">
    <meta property="og:image" content="{{ url('/assets/{slug}/images/og.jpg') }}">
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/{slug}/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/{slug}/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/{slug}/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/{slug}/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/{slug}/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/{slug}/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/{slug}/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/{slug}/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/{slug}/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/{slug}/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/{slug}/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/{slug}/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/{slug}/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/assets/{slug}/images/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/{slug}/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    @include('{slug}::partials.xfs')
    @if(App::environment('production'))
        @include('xmas::app.partials.ga')
    @endif
</head>

<body>

<div id="app">
    @yield('content')
</div>

<script src="/assets/{slug}/js/manifest.js"></script>
<script src="/assets/{slug}/js/vendor.js"></script>
<script src="/assets/{slug}/js/app.js"></script>

</body>
</html>

