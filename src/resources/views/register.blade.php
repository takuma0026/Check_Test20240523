@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <main>
<h1>register</h1>
@if ($errors->any())
<div class="login_error">
    <ul>
@foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
@endforeach
    </ul>
</div>
@endif
<form method="POST" class="form" action="{{ url()->current() }}">
    @csrf
    <input type="text" name="name" placeholder="name" value="{{ old('name') }}" required autofocus>
    <input type="email" name="email" placeholder="例:text@example.com" value="{{ old('email') }}" >
    <input type="password" name="password" placeholder="例:coachtech1106">
    <button type="submit" id="login-button">登録</button>
</form>
  </main>
@endsection