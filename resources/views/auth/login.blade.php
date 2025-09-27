@extends('layouts.auth')

@section('content')
<div class="auth-container">
    <a href="/">
        <img src="{{ asset('img/logo_project.png') }}" alt="Logo Mahligai AutoCare" class="auth-logo">
    </a>
    <h2>Selamat Datang Kembali</h2>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="auth-form">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4 text-left" style="display: flex; align-items: center;">
            <input id="remember_me" type="checkbox" name="remember" style="width: auto; margin-right: 8px;">
            <label for="remember_me">{{ __('Ingat saya') }}</label>
        </div>

        <div style="text-align: right; margin-top: 10px;">
            @if (Route::has('password.request'))
                <a class="login-register-link" style="font-size: 0.9em;" href="{{ route('password.request') }}">
                    {{ __('Lupa password?') }}
                </a>
            @endif
        </div>

        <div class="form-group mt-4">
            <button type="submit">
                {{ __('Login') }}
            </button>
        </div>

        <div class="login-register-link">
            Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
        </div>
    </form>
</div>
@endsection
