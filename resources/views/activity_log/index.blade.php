@extends('layouts.master')
@section('header')
    <a href="{{ url('/') }}">Back to the home page</a>
    <h2>
        Diary Log
        @if(Auth::check())
            <a href="{{ url('/activity_logs/create') }}" class="btn btn-primary pull-right">
                Add new log
            </a>
        @endif
    </h2>
@stop
@section('content')
    <div class="row">
        <div class="col-md-1"><strong>id</strong></div>
        <div class="col-md-1"><strong>user_id</strong></div>
        <div class="col-md-1"><strong>area</strong></div>
        <div class="col-md-1"><strong>applicant1</strong></div>
        <div class="col-md-1"><strong>problem</strong></div>
        <div class="col-md-1"><strong>activity</strong></div>
        <div class="col-md-1"><strong>description</strong></div>
        <div class="col-md-1"><strong>is_solved</strong></div>
        <div class="col-md-1"><strong>created_at</strong></div>
        <div class="col-md-1"><strong>updated_at</strong></div>
        <div class="col-md-1"><strong>ended_at</strong></div>
    </div>
    @foreach ($activity_logs as $log)

        <div class="row activity_log">
            <div class="col-md-1">
                <a href="{{'activity_logs/'. $log->id }}">
                <strong>{{ $log->id  }} </strong>
                </a>
            </div>
            <div class="col-md-1">
                <a href="{{ url('activity_logs/user/'.$log->user_id) }}">
                    <strong>{{ $log->user->name }}</strong>
                </a>
            </div>
            <div class="col-md-1">
                {{ $log->area }}
            </div>
            <div class="col-md-1">
                {{ $log->applicant }}
            </div>
            <div class="col-md-1">
                {{ $log->problem }}
            </div>
            <div class="col-md-1">
                {{ $log->activity }}
            </div>
            <div class="col-md-1">
                {{ $log->description }}
            </div>
            <div class="col-md-1">
                @if ($log->is_solved == '1')
                    &#10004;
                @else
                    &#10005;
                @endif
            </div>
            <div class="col-md-1">
                {{  date('d.m.Y.', strtotime($log->created_at)) }}
            </div>
            <div class="col-md-1">
                {{ date('d.m.Y.', strtotime($log->updated_at)) }}
            </div>
            <div class="col-md-1">
                @if($log->ended_at != '0000-00-00 00:00:00')
                    {{ date('d.m.Y.', strtotime($log->ended_at)) }}
                @endif
            </div>
        </div>
    @endforeach
@stop