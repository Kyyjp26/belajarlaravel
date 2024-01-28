@extends('layout.aplikasi')

@section('konten')
    @if (session()->has('success'))
        <div class="success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container">
        <form action="/sesi/login" method="POST">
            @csrf
            <h2>LOGIN</h2>
            <div class="form">
                <label for="email" class="label">Email</label> <br>
                <input type="email" class="input" name="email" value="{{ Session::get('email') }}">
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
                <button class="button" type="submit">LOGIN</button>
            </div>
            <div class="form">
                <span>Kamu tidak punya akun? <a href="/sesi/register">Register</a></span>
            </div>
            <div class="form">
                @if (Session::has('error'))
                    <div class="error-invalid">
                        {{ Session::get('error') }}
                    </div>
                @endif
            </div>
        </form>
    </div>
@endsection
