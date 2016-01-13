<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Furbook</title>
    {{--<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">--}}
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <script>

        $("document").ready(function(){
            $("#modal").submit(function(e){
                e.preventDefault();
                var id = $("data-id").val();
                alert(id);
                $.ajax({
                    type: "POST",
                    url : "http://clienta.local/tasks/add",
                    data : dataString,
                    dataType : "json",
                    success : function(data){

                    }

                },"json");

            });
        });//end of document ready function
    </script
</head>
<body>
<div class="container">
    <div class="page-header">
         @if (Auth::check())
             Welcome, {{ Auth::user()->name }}!
             <a href="/auth/logout">Log out</a>
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
    @if (Session::has('message'))
        <div class="alert alert-danger">
            {{ Session::get('message') }}
        </div>
    @endif
    @yield('content')
</div>
</body>