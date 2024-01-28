@extends('layout.app-bank')

@section('konten')
    @if (session()->has('success'))
        <div class="success">
            {{ session()->get('success') }}
        </div>
    @endif
@endsection
