@extends('layouts.master')

@section('content')

    @foreach ($cats as $cat)
        <div class="cat">
            <a href="{{ url('cats/'.$cat->id) }}">
                <strong>{{ $cat->name }}</strong> - {{ dd($cat)}}
            </a>
        </div>
    @endforeach
@stop