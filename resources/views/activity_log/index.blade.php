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
        <!--<div class="col-md-1"><strong>Area</strong></div>
        <div class="col-md-1"><strong>Applicant</strong></div>-->
        <div class="col-md-2"><strong>Problem</strong></div>
        <!--<div class="col-md-2"><strong>Activity</strong></div>
        <div class="col-md-1"><strong>Description</strong></div>-->
        <div class="col-md-1"><strong>Solved</strong></div>
        <!--<div class="col-md-1"><strong>Created</strong></div>
        <div class="col-md-1"><strong>Updated</strong></div>
        <div class="col-md-1"><strong>Ended</strong></div>-->
        <div class="col-md-1"><strong></strong></div>
        <div class="col-md-1"><strong></strong></div>
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
           {{-- <div class="col-md-1">
                {{ $log->area }}
            </div>
            <div class="col-md-1">
                {{ $log->applicant }}
            </div>--}}
            <div class="col-md-2">
                {{ $log->problem }}
            </div>
           {{-- <div class="col-md-2">
                {{ $log->activity }}
            </div>
            <div class="col-md-1">
                {{ $log->description }}
            </div>--}}
            <div class="col-md-1">
                @if ($log->is_solved == '1')
                    &#10004;
                @else
                    &#10005;
                @endif
            </div>
           {{-- <div class="col-md-1">
                {{  date('d.m.Y.', strtotime($log->created_at)) }}
            </div>
           <div class="col-md-1">
                @if($log->created_at != $log->updated_at)
                   {{   date('d.m.Y.', strtotime($log->updated_at)) }}
                @endif
            </div>
            <div class="col-md-1">
                @if($log->ended_at != '0000-00-00 00:00:00')
                    {{ date('d.m.Y.', strtotime($log->ended_at)) }}
                @endif
            </div>--}}
            <div class="col-md-1">
                <a href="{{ url('activity_logs/'.$log->id.'/delete') }}">
                    Delete
                </a>
            </div>
            <div class="col-md-1">
                <button id="modal" type="button" data-id="{{ $log->id }}" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Previewl</button>
            </div>
        </div>

        <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@stop