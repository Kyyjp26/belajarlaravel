@extends('layout.app')

@section('konten')

    @if (session()->has('success'))
        <div class="success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container">
        <div class="grid-1">
            <h2>Hai Teman,</h2>
            <p>Ayo Mulai Buat Akun Dan Rasakan Pertualangan <br> Yang Menyenangkan.</p>
            <a href="/sesi/register">Register</a>
        </div>
        <div class="grid-2">
            <h2>Login</h2>
            <form action="/sesi/login" method="POST">
                @csrf
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
                    <button type="submit" class="button">Login</button>
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
