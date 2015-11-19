@extends('layouts.master')
@section('header')
    @if (isset($breed))
        <a href="{{ url('/') }}">Back to the overview</a>
    @endif
    <h2>
        @if (isset($band)){{ $band->name }}@endif
        <a href="{{ url('bands/create') }}" class="btn btn-primary pull-right">
            Add a new Band
        </a>
    </h2>
@stop
@section('content')
    @foreach ($albums as $album)
        <div class="album">
            <a href="{{ url('bands/'.$album->name) }}">
                <strong>{{ $album->name }}</strong>
            </a>
        </div>
    @endforeach
    <a href="{{ url('bands') }}" class="btn btn-primary pull-left">
        See all bands
    </a>
@stop