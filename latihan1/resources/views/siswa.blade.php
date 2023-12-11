@extends('layout/aplikasi')

@section('konten')
    @if(isset($success))
        <div class="box-success">
            {{ $success }}
        </div>
    @endif
@endsection
