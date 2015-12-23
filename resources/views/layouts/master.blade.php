<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Furbook</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
</head>
<body>
<div class="container">
    <div class="page-header">
         @if (Auth::check())
             Welcome, {{ Auth::user()->name }}!
             <a href="auth/logout">Log out</a>
             @else
             Hello, stranger! <a href="/auth/login">Login</a>
             or <a href="/auth/register">Register</a>.
         @endif
    </div>
    <div class="page-header">
        @yield('header')
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @yield('content')
</div>
</body>