@extends ('layouts.master')
@section('header')
    <h2>Add a new band</h2>
@stop
@section('content')
    {!! Form::open(['url' => 'band']) !!}
    @include('partials.forms.band')
    {!! Form::close() !!}
@stop