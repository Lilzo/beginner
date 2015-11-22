@extends('layouts.master')
@section('header')


    @if (!isset($bands))
        <a href="{{ url('/') }}">Back to the overview</a>
    @endif
    @if (isset($bands))
    <h2>
        {{ $bands->name }}

        <a href="{{ url('band/'.$bands->name.'/album') }}" class="btn btn-primary pull-right">
            Add a new Album
        </a>
    </h2>
    <a href="{{ url('band/'.$bands->name.'/edit') }}">
        <span class="glyphicon glyphicon-edit"></span>
        Edit
    </a>
    <a href="{{ url('band/'.$bands->name.'/delete') }}">
        <span class="glyphicon glyphicon-trash"></span>
        Delete
    </a>
    @endif
@stop
@section('content')
    @if (isset($albums))
        @foreach ($albums as $album)
            <div class="album">
                <a href="{{ url('band/'.$bands->name .'/'.$album->name) }}">
                    <strong>{{ $album->name }}</strong>
                </a>
            </div>
        @endforeach
    @endif
    <h3>
        <a href="{{ url('band') }}" class="btn btn-primary pull-left">
            See all bands
        </a>
    </h3>
@stop