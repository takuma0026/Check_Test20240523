@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<main>
<h1>Login</h1>
@if ($errors->any())  {{-- 1 --}}
<div class="login_error">
    <ul>
@foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
@endforeach
    </ul>
</div>
@endif {{-- 1 --}}
<form method="POST" class="form" action="{{ url()->current() }}"> {{-- 2 --}}
    @csrf {{-- 3 --}}
    <input type="email" name="email" placeholder="例:text@example.com" value="{{ old('email') }}" >
    <input type="password" name="password" placeholder="例:coachtech1106">
    <button type="submit" id="login-button">Login</button>
</form>
  </main>
@endsection