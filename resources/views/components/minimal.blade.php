<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f27405">
    <link rel="stylesheet" href="{{ asset('/css/master.css') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('/favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{ asset('/favicon-16x16.png') }}" sizes="16x16"/>
    <title>{{ $title ?? 'Unknown' }}</title>
</head>
<body>
{{ $slot }}
</body>
</html>
