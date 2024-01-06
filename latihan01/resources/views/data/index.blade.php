@extends('layout.app-data')

@section('konten')
    @if (isset($success))
        <div class="success">
            {{ $success }}
        </div>
    @endif

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-data">
        <div class="head-table">
            <h2>Tabel Data Uang</h2>
            <a href="{{ route('data.create') }}">Tambah Data</a>
        </div>

        <table>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Jenis Bank</th>
                <th>Nominal</th>
                <th>Aksi</th>
            </tr>

            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenis_bank }}</td>
                    <td>{{ $item->nominal }}</td>
                    <td>
                        <div class="btn-aksi">
                            <a href="{{ route('data.edit', ['data' => $item->id]) }}" class="btn-edit">Edit</a>
                            <form action="{{ route('data.destroy', ['data' => $item->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn-del">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
