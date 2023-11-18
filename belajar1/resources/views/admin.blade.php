<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Halaman Admin</h1>
        <div class="row">
            <div class="col-12">

                @component('layout.alert', ['class'=>'warning', 'judul'=>'Peringatan'])
                    100 Data Mahasiswa Perlu Di Perbaiki
                @endcomponent
                
                @component('layout.alert', ['class'=>'danger', 'judul'=>'Awas'])
                    Hari Ini Deadline Laporan Perjalanan Dinas!
                @endcomponent
                
                @component('layout.alert', ['class'=>'success', 'judul'=>'Bagus'])
                    Besok Cuti Horeee.....
                @endcomponent

            </div>
        </div>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>