<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daily_history;

class DailyHistoryController extends Controller
{
    public function getData(){
        return Daily_history::all();
    }

    public function postData(Request $req){
        $DH = new Daily_history;

        $DH->user_id=session('user')->id;
        $DH->project_id=$req->projectId;
        $DH->project_title=$req->projectTitle;
        $DH->status="incomplete";
        $DH->assigned_date=$req->assignedDate;
        $DH->todo=$req->todo;
        $DH->start_time=null;
        $DH->end_time=null;
        $DH->mood=null;
        $DH->new_skill=null;
        $DH->save();

        return response()->json($DH);
    }
    public function dailyProgress(Request $req)
    {
        $DH = Daily_history::where('id', $req->taskId)->where('user_id', session('user')->id)->first();
        $DH->status=$req->status;
        $DH->reason=$req->reason;
        $DH->start_time=$req->start_time;
        $DH->end_time=$req->end_time;
        $DH->mood=$req->mood;
        $DH->new_skill=$req->new_skill;
        $DH->save();
        return response()->json($DH);
    }
    public function GetSessionUserTodayTask()
    {
        $date = date('Y-m-d');
        $DH = Daily_history::where('user_id', session('user')->id)->where('assigned_date',$date)->get();
        return response()->json($DH);
    }

    public function GetSessionUserAllTask()
    {
        $DH = Daily_history::where('user_id', session('user')->id)->get();
        return response()->json($DH);
    }

    public function GetSessionUserincompleteTask()
    {
        $date = date('Y-m-d');
        $DH = Daily_history::where('user_id', session('user')->id)->where('status',"incomplete")->orderBy('assigned_date', 'DESC')->get();
        return response()->json($DH);
    }
    public function workingHour()
    {
        $DH = Daily_history::where('id', 23)->get();
        return response()->json($DH);
    }
}
