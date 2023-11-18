@extends('layout.master')
@section('title', 'Data Siswa')
@section('menuSiswa', 'active')

@section('content')
@parent
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Siswa</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse ($siswa as $val)
                        <li class="list-group-item">{{ $val }}</li>
                    @empty
                        <div class="alert alert-dark d-inline-block">Tidak Ada Data....</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
@endsection