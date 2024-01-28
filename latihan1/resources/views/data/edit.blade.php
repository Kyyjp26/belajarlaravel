@extends('layout.app-data')

@section('konten')
    <div class="container">
        <h1>Update Data</h1>
        <hr>
        <form action="{{ route('data.update', ['data' => $data->id]) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form">
                <label for="nama">Nama</label> <br>
                <input type="text" name="nama" id="nama" value="{{ $data->nama }}">
                @error('nama')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form">
                <label for="jenis_bank">Jenis Bank</label> <br>
                <input type="text" name="jenis_bank" id="jenis_bank" value="{{ $data->jenis_bank }}">
                @error('jenis_bank')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form">
                <label for="nominal">Nominal</label> <br>
                <input type="text" name="nominal" id="nominal" value="{{ $data->nominal }}">
                @error('nominal')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form">
                <button type="submit" class="button">Update</button>
            </div>
        </form>
    </div>
@endsection
