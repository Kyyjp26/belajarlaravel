<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Bank</title>
    <link rel="stylesheet" href="/css/style-data.css">
</head>
<body>
    @if (Auth::check())
        @include('komponen.menu')
        @yield('konten')
    @endif
</body>
</html>
