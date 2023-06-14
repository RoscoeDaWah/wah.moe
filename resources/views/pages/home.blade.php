@extends('layouts.default')
@section('title', 'home')
@section('description', 'This is the personal homepage of floppydisk.')
@section('content')
<p>Hi!</p>
        <p>This is the personal homepage of floppydisk.</p>

        <!-- Last.fm -->
        @include('components.lastfm')

        <!-- WeatherData -->
        @include('components.weather')

        <h1>Contact</h1>
        <p><strong>Mail</strong>: <a href="mailto:contact@diskfloppy.me">contact@diskfloppy.me</a><br/>
            <strong>IRC</strong>: <a href="https://r-type.ca/page.php?id=1034">floppydisk @ r-type</a><br/>
        </p>

        <h1>Elsewhere</h1>
        <p><strong>Mastodon:</strong> <a rel="me" href="https://mastodon.sdf.org/@floppydisk_">@floppydisk_@mastodon.sdf.org</a><br/>
            <strong>Twitter:</strong> <a href="https://twitter.com/floppydisk__">@floppydisk__</a><br/>
            <strong>GitHub:</strong> <a href="https://github.com/floppydisk05">floppydisk05</a><br/>
            <strong>SDF:</strong> <a href="http://floppydisk.sdf.org/">~floppydisk</a>
        </p>
@stop