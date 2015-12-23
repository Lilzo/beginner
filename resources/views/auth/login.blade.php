@extends('layouts.master')

@section('content')
    <div class="col-md-6">
        {!! Form::open(array('url'=> '/auth/login', 'class' => 'form')) !!}
        <h1> Sign in to your Account</h1>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                There were some problems creating an account:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            {!! Form::label('email', 'Your E-mail address') !!}
            {!! form::text('email', null, array('class'=>'form-control', 'placeholder'=>'E-mail')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Your password') !!}
            {!! Form::password('password',
            array('class'=>'form-control', 'placeholder'=>'Password')) !!}
        </div>

        <div class="form-group">
            <label>
                {!! Form::checkbox('remember', 'remember') !!} Remember me
            </label>
        </div>

        <div class="form-group">
            {!! Form::submit('Login', array('class'=>'btn btn-primary')) !!}
        </div>

        <a href="/password/email">Forgot Your Password?</a>
        </div>
    {!! Form::close() !!}

    </div>
    @endsection