@extends('layouts.auth')

@section('content')
<div class="auth-container">
    <a href="/">
        <img src="{{ asset('img/logo_project.png') }}" alt="Logo Mahligai AutoCare" class="auth-logo">
    </a>
    <h2>Buat Akun Baru</h2>

    <form method="POST" action="{{ route('register') }}" class="auth-form">
        @csrf

        <div class="form-group">
            <label for="name">Nama</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="form-group mt-4">
            <button type="submit">
                {{ __('Daftar') }}
            </button>
        </div>

        <div class="login-register-link">
            Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
        </div>
    </form>
</div>
@endsection
