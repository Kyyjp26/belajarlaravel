@extends('layout/aplikasi')

@section('konten')
    @if (Session::has('error'))
        <div class="box-error">
            {{ Session::get('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="box-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container">
        <h1>Register</h1>
        <form action="/sesi/create" method="POST">
            @csrf
            <div class="form">
                <label for="name" class="label">Name</label> <br>
                <input type="text" value="{{ Session::get('name') }}" name="name" class="input">
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form">
                <label for="email" class="label">Email</label> <br>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="input">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form">
                <label for="password" class="label">Password</label> <br>
                <input type="password" name="password" class="input">
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form">
                <button name="submit" class="button">Register</button>
            </div>
        </form>
    </div>

    <div class="create">
        <a href="/sesi">Login?</a>
    </div>
@endsection
