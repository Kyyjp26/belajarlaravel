<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nama }}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nilai }}
        </h1>
        <br>

        {{-- Pengulangan If Else --}}
        @if (($nilai >= 0) and ($nilai < 50))
            <div class="alert alert-danger d-inline-block mt-4">
                Maaf, Anda Tidak Lulus
            </div>
        @elseif (($nilai >= 50) and ($nilai <= 100))
            <div class="alert alert-success d-inline-block mt-4">
                Selamat, Anda Lulus
            </div>
        @else
            <div class="alert alert-dark d-inline-block mt-4">
                Nilai Tidak Valid
            </div>
        @endif
        <br>

        {{-- Pengulangan Switch --}}
        @switch($nilai)
            @case(0)
                <div class="alert alert-danger d-inline-block mt-4">
                    Tidak Ikut Ujian
                </div>
                @break
            @case(75)
                <div class="alert alert-success d-inline-block mt-4">
                    Lumayan
                </div>
                @break
            @case(100)
                <div class="alert  alert-success d-inline-block mt-4">
                    Sempurna
                </div>
                @break
            @default
                <div class="alert alert-dark d-inline-block">
                    Nilai Tidak Valid
                </div>
        @endswitch
        <br>

        {{-- Pengulangan For --}}
        @for ($i = 0; $i < 5; $i++)
        <div class="alert alert-info d-inline-block mt-4">
            Laravel
        </div>
        @endfor
        <br>
        
        {{-- Pengulangan While --}}
        <?php $i = 0?>
        @while ($i < 5)
        <div class="alert alert-info d-inline-block mt-4">
            {{ $i }}
        </div>
        <?php $i++ ?>
        @endwhile
    </div>
</body>
<script></script>
</html>