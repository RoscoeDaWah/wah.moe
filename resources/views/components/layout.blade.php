<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global -->
    <meta charset="utf-8">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f27405">
    <link rel="stylesheet" href="{{ asset('/css/master.css') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('/favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{ asset('/favicon-16x16.png') }}" sizes="16x16"/>
    {!! (intval(date('n')) == 12) ? '<script src="/js/christmas/snow.js"></script>' : '' !!}

    <!-- Page-specific -->
    <title>{{ $title ?? 'Unknown' }} - {{ str_replace("www.", "", Request::getHost()) }}</title>
    <meta property="og:title" content="{{ str_replace("www.", "", Request::getHost()) }} | {{ $title }}">
    <meta property="og:image" content="/favicon-128x128.png">
</head>
<body>
    <div class="page-container">
        <div id="header">
            <h1>wah!</h1>
            <p>
                (dot moe)
            </p>
            <x-navigation></x-navigation>
        </div>
        <div id="content">
            {{ $slot }}
        </div>
        <div id="footer">
            <div>
                <span>
                    &copysr; floppydisk 2021-{{ date('Y') }}<br>
                    v{{ config('app.version') }}, <a href="https://git.frzn.dev/fwoppydwisk/diskfloppy.me/releases/latest">Source</a><br>
                    Served by {{ gethostname() }}
                </span>
            </div>
            <div>
                <img src="{{ URL::asset('images/buttons/cnfunknown.gif') }}">
                <img src="{{ URL::asset('images/buttons/juli.gif') }}">
                <img src="{{ URL::asset('images/buttons/x86.gif') }}">
                <img src="{{ URL::asset('images/buttons/thnlqd.png') }}">
                <img src="https://dimden.dev/services/images/88x31.gif">
                <img src="{{ URL::asset('images/buttons/csshard.gif') }}"><br>
                <img src="{{ URL::asset('images/buttons/linuxnow.gif') }}">
                <img src="{{ URL::asset('images/buttons/paws.gif') }}">
                <img src="{{ URL::asset('images/buttons/transrights.gif') }}">
                <img src="{{ URL::asset('images/buttons/debian.gif') }}">
                <img src="{{ URL::asset('images/buttons/vim.gif') }}">
                <img src="{{ URL::asset('images/buttons/aliasing.png') }}">
            </div>
        </div>
    </div>
</body>
</html>
