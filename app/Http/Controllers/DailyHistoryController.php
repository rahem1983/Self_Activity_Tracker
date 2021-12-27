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
        $DH->status="incomplete";
        $DH->assigned_date=$req->assignedDate;
        $DH->comment=$req->coment;
        $DH->start_time=null;
        $DH->end_time=null;
        $DH->mood=null;
        $DH->new_skill=null;
        $DH->save();

        return response()->json($DH);
    }
}
