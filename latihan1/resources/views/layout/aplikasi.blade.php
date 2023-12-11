<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Halaman Login</title>
</head>
<body>
    @if (Auth::check())
        @include('komponen/menu')
    @endif
    @yield('konten')
</body>
</html>
