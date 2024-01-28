@extends('layout.app')

@section('konten')

    <div class="container">
        <div class="grid-1">
            <h2>Selamat Datang,</h2>
            <p>Supaya Tetap Terhubung Ayo Login Dengan <br> Informasi Pribadi Kami.</p>
            <a href="/sesi">Login</a>
        </div>
        <div class="grid-2">
            <h2>Register</h2>
            <form action="/sesi/create" method="POST">
                @csrf
                <div class="form">
                    <label for="name" class="label">Name</label> <br>
                    <input type="name" name="name" id="name" class="input @error('name') invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form">
                    <label for="email" class="label">Email</label> <br>
                    <input type="email" name="email" id="email" class="input @error('email') invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form">
                    <label for="password" class="label">Password</label> <br>
                    <input type="password" name="password" id="password" class="input @error('password') invalid @enderror">
                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form">
                    <button type="submit" class="button">register</button>
                </div>
                <div class="form">
                    @if (Session::has('error'))
                        <div class="error-2">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
