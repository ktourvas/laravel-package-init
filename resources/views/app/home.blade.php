@extends('{slug}::layouts.layout')

@section('seo')
    <title>Package Title</title>
    <meta property="og:title" content="Package Title">
    <meta property="og:site_name" content="Package Site Name">
    <meta property="og:description" name="description" content="Package Description">
    <meta property="og:image" content="{{ url('/assets/{slug}/images/og.jpg') }}">
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
@endsection

@section('content')

    this is your package's home page

@endsection
