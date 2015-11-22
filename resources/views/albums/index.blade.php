@extends('layouts.master')
@section('header')
    @if (isset($band))
        <a href="{{ url('/') }}">Back to the overview</a>
    @endif
    <h2>
        All @if (isset($band)){{ $band->name }}@endif Cats
        <a href="{{ url('bands/create') }}" class="btn btn-primary pull-right">
            Add a new Band
        </a>

    </h2>
@stop
@section('content')
    @foreach ($bands as $band)
        <div class="band">
            <a href="{{ url('cats/'.$band->id) }}">
                <strong>{{ $band->band->name }}</strong> - {{ $band->name }}
            </a>
        </div>
    @endforeach
@stop