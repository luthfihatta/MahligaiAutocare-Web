@extends('layouts.auth')

@section('content')
<div class="auth-container">
    <a href="/">
        <img src="{{ asset('img/logo_project.png') }}" alt="Logo" class="auth-logo">
    </a>
    <h2>Lupa Password</h2>
    <div class="mb-4 text-sm text-gray-600 text-left">
        {{ __('Lupa password Anda? Tidak masalah. Beri tahu kami alamat email Anda dan kami akan mengirimkan tautan reset password melalui email yang memungkinkan Anda untuk memilih yang baru.') }}
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="auth-form">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="form-group mt-4">
            <button type="submit">
                {{ __('Kirim Link Reset Password') }}
            </button>
        </div>
    </form>
</div>
@endsection
