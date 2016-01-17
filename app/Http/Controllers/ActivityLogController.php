<?php

namespace Vinyl\Http\Controllers;

use Illuminate\Http\Request;

use Vinyl\Http\Requests;
use Vinyl\Http\Controllers\Controller;
use Vinyl\ActivityLog;
use \Illuminate\Support\Facades\Auth;
use Input;
use Carbon\Carbon;

class ActivityLogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        return view('home.welcome');
    }

    function getActivityLogs()
    {
        $activity_logs = ActivityLog::all();
        return view('activity_log.index')->with('activity_logs', $activity_logs);
    }

    public function postActivityLog(Request $request)
    {
        if ($request->isMethod('post')){
            $data = Input::only('log_id');
            $activity_logs = ActivityLog::find($data['log_id']);
            return $activity_logs;
        }
    }

    function getCreateLog()
    {
        return view('activity_log.create');
    }

    function postCreateLog()
    {
        $user_id = Auth::user()->id;

        $applicant = Input::get('applicant');
        $area = Input::get('area');
        $problem = Input::get('problem');
        $activity = Input::get('activity');
        $description = Input::get('description');
        $is_solved = Input::get('is_solved');
        $updated = null;

        $activity_log = ActivityLog::create(['user_id' => $user_id,
            'applicant' => $applicant,
            'area' => $area,
            'problem' => $problem,
            'activity' => $activity,
            'description' => $description,
            'is_solved' => $is_solved,
            'updated_at' => $updated]);
        //$activity_logs()->save($activity_log);
        return redirect('activity_logs')->withSuccess('New log has been added');
    }

    function getEditLog($id)
    {
        $activity_logs = ActivityLog::find($id);
        if ($activity_logs->user_id != Auth::id()) {
            return redirect('/activity_logs')->withMessage('Only log author is allowed to edit his log');
        } else {
            return view('activity_log.edit')->with('activity_logs', $activity_logs);
        }
    }

    function putEditLog($id)
    {
        $time = Carbon::now();

        $applicant = Input::get('applicant');
        $area = Input::get('area');
        $problem = Input::get('problem');
        $activity = Input::get('activity');
        $description = Input::get('description');
        $is_solved = Input::get('is_solved');

        $activity_log = ActivityLog::where('id', $id)->update([
                'applicant' => $applicant,
                'area' => $area,
                'problem' => $problem,
                'activity' => $activity,
                'description' => $description,
                'is_solved' => $is_solved,
                'updated_at' => $time]
        );

        return redirect('activity_logs')->withSuccess('Log has been edited');
    }

    function getDeleteLog($id)
    {
        $activity_logs = ActivityLog::find($id);
        if ($activity_logs->user_id == Auth::id()) {
            $activity_logs->delete();
            return redirect('activity_logs')->withSuccess('Log has been deleted');
        } else {
            return redirect('activity_logs')->withMessage("You don't have permission to delete log");
        }

    }



}