@extends('layouts.master')
@section('header')
    @if (isset($breed))
        <a href="{{ url('/') }}">Back to the overview</a>
    @endif
    <h2>
          All Bands
        <a href="{{ url('/band/create') }}" class="btn btn-primary pull-right">
            Add a new Band
        </a>
    </h2>
@stop
@section('content')
    @foreach ($bands as $band)
        <div class="cat">
            <a href="{{ url('band/'.$band->name) }}">
                <strong>{{ $band->name }}</strong>
            </a>
        </div>
    @endforeach
@stop