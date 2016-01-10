@extends('layouts.master')
@section('header')
    <h2>Edit activity log</h2>
@stop
@section('content')
    {!! Form::model($activity_logs, ['url' => '/activity_logs/'.$activity_logs->id, 'method' => 'put'] ) !!}
        @include('partials.forms.activity_log')
    {!! Form::close() !!}
@stop