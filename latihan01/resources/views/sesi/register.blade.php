@extends('layout.aplikasi')

@section('konten')
    <div class="container">
        <form action="/sesi/create" method="POST">
            @csrf
            <h2>REGISTER</h2>
            <div class="form">
                <label for="name" class="label">Name</label> <br>
                <input type="name" class="input" name="name">
                @error('name')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form">
                <label for="email" class="label">Email</label> <br>
                <input type="email" class="input" name="email">
                @error('email')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form">
                <label for="password" class="label">Password</label> <br>
                <input type="password" class="input" name="password">
                @error('password')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form">
                <button class="button" type="submit">REGISTER</button>
            </div>
            <div class="form">
                <span>Kamu sudah punya akun? <a href="/sesi">Login</a></span>
            </div>
            <div class="form">
                @if (Session::has('error'))
                    <div class="error-invalid">
                        {{ Session::get('rror') }}
                    </div>
                @endif
            </div>
        </form>
    </div>
@endsection
