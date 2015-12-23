@extends('layouts.master')
@section('header')
    <h2>Add activity log</h2>
@stop
@section('content')
    {!! Form::open(['url' => '/activity_logs/create']) !!}
    @include('partials.forms.activity_log')
    {!! Form::close() !!}
@stop