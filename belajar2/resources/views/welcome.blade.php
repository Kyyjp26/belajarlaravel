<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container text-center py-5">
    <button id="myPopover" type="button" class="btn btn-lg btn-danger"
    data-bs-toggle="popover" title="Lagi serius..."
    data-bs-content="Buku Laravel Uncover top bgt!">
    Belajar Laravel </button>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script>
        new bootstrap.Popover(document.getElementById('myPopover'));
    </script>
</body>
</html>
