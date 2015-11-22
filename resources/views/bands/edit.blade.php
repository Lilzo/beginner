@extends ('layouts.master')
@section('header')
    <h2>Edit band name</h2>
@stop
@section('content')
    {!! Form::model($bands, ['url' => '/band/'.$bands->name,
    'method' => 'put']) !!}
    @include('partials.forms.band')
    {!! Form::close() !!}
@stop