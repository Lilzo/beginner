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
        <div class="col-md-1"><strong>ID</strong></div>
        <div class="col-md-1"><strong>User</strong></div>
        <div class="col-md-1"><strong>Area</strong></div>
        <div class="col-md-1"><strong>Applicant</strong></div>
        <div class="col-md-2"><strong>Problem</strong></div>
        <div class="col-md-2"><strong>Activity</strong></div>
        <div class="col-md-1"><strong>Description</strong></div>
        <div class="col-md-1"><strong>Solved</strong></div>
        <div class="col-md-1"><strong>Created</strong></div>
        <!--<div class="col-md-1"><strong>Updated</strong></div>-->
        <div class="col-md-1"><strong>Ended</strong></div>
        <div class="col-md-1"><strong>Remove</strong></div>
    </div>
    @foreach ($activity_logs as $log)

        <div class="row activity_log">
            <div class="col-md-1">

                <a href="{{'activity_logs/'. $log->id }}">
                <strong>{{ $log->id  }} </strong>
                </a>
            </div>
            <div class="col-md-1">
                @if(Auth::id() == $log->user_id)
                <a href="{{ url('activity_logs/user/'.$log->user_id) }}">
                    <strong>{{ $log->user->name }}</strong>
                </a>
                @else
                    <strong>{{ $log->user->name }}</strong>
                @endif
            </div>
            <div class="col-md-1">
                {{ $log->area }}
            </div>
            <div class="col-md-1">
                {{ $log->applicant }}
            </div>
            <div class="col-md-2">
                {{ $log->problem }}
            </div>
            <div class="col-md-2">
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
            <!--<div class="col-md-1">
                @if($log->created_at != $log->updated_at)
                   {{   date('d.m.Y.', strtotime($log->updated_at)) }}
                @endif
            </div> -->
            <div class="col-md-1">
                @if($log->ended_at != '0000-00-00 00:00:00')
                    {{ date('d.m.Y.', strtotime($log->ended_at)) }}
                @endif
            </div>
            <div class="col-md-1">
                <a href="{{ url('activity_logs/'.$log->id.'/delete') }}">
                    <span class="glyphicon glyphicon-trash"></span>
                    Delete
                </a>
            </div>
        </div>
    @endforeach
@stop