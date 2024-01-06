@extends('layout.app-bank')

@section('konten')

    @if (session()->has('success'))
        <div class="success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="menu-table">
        <h3>Tabel Data Uang</h3>
        <a href="{{ route('bank.create') }}">Tambah Data</a>
    </div>
    <div class="table">
        <table>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Jenis Bank</th>
                <th>Nominal</th>
                <th>Aksi</th>
            </tr>

            @foreach ($banks as $bank)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $bank->nama }}</td>
                    <td>{{ $bank->jenis_bank }}</td>
                    <td>{{ $bank->nominal }}</td>
                    <td class="aksi">
                        <a href="{{ route('bank.edit', ['bank' => $bank->id]) }}" class="edit">Edit</a>
                        <form action="{{ route('bank.destroy', ['bank' => $bank->id]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
