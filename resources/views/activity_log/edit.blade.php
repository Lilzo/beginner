@extends('layouts.master')
@section('header')
    <h2>Add activity log</h2>
@stop
@section('content')
    {!! Form::model($activity_log, ['url' => '/activity_logs/'.$activity_log->id],
    'method'=>'put' ) !!}
    @include('partials.forms.activity_log')
    {!! Form::close() !!}
@stop