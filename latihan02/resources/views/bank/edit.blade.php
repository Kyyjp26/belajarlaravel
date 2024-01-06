@extends('layout.app-bank')

@section('konten')
    <div class="container">
        <h2>Edit Data</h2>
        <form action="{{ route('bank.update', ['bank' => $bank->id]) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form">
                <label for="nama" class="label">Nama</label> <br>
                <input type="text" name="nama" id="nama" class="input @error('nama') invalid @enderror" value="{{ old('nama') ?? $bank->nama }}">
                @error('nama')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form">
                <label for="jenis_bank" class="label">Jenis Bank</label> <br>
                <input type="jenis_bank" name="jenis_bank" id="jenis_bank" class="input @error('jenis_bank') invalid @enderror" value="{{ old('jenis_bank') ?? $bank->jenis_bank }}">
                @error('jenis_bank')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form">
                <label for="nominal" class="label">Nominal</label> <br>
                <input type="nominal" name="nominal" id="nominal" class="input @error('nominal') invalid @enderror" value="{{ old('nominal') ?? $bank->nominal }}">
                @error('nominal')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form">
                <button type="submit" class="button">Update</button>
            </div>
        </form>
    </div>
@endsection
