@extends('layouts.master')
@section('header')
    @if (isset($breed))
        <a href="{{ url('/') }}">Back to the overview</a>
    @endif
    <h2>
        All @if (isset($breed)){{ $breed->name }}@endif Cats
        <a href="{{ url('cats/create') }}" class="btn btn-primary pull-right">
            Add a new Band
        </a>
    </h2>
@stop
@section('content')
    @foreach ($bands as $band)
        <div class="cat">
            <a href="{{ url('bands/'.$band->name) }}">
                <strong>{{ $band->name }}</strong>
            </a>
        </div>
    @endforeach
@stop