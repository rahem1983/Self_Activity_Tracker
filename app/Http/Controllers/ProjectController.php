<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function creatProject(Request $req){
        $project = new Project;

        $project->user_id = session('user')->id;
        $project->project_title = $req->title;
        $project->probable_finish_date = $req->ProbableFinishDate;
        $project->description = $req->shortdesc;
        $project->collaborator = $req->colab;
        $project->requirement = $req->projectreq;
        $project->skill_require = $req->skillrequire;
        $project->new_skill_require = $req->newskillrequire;
        $project->active = 1;
        $project->status = "Running";
        
        $project->save();

        return response()->json($project);
        // return response()->json($project);
    }
    public function GetSessionUserActiveProject(){
        $id = session('user')->id;
        $project = Project::where('user_id', $id)->where('active', 1)->orderBy('created_at', 'DESC')->get();
        return response()->json($project);
    }

    public function GetSessionUserAllProject(){
        $id = session('user')->id;
        $project = Project::where('user_id', $id)->orderBy('created_at', 'DESC')->get();
        return response()->json($project);
    }

    public function EndProject(Request $req)
    {
        $project = Project::where('id', $req->projectId)->where('user_id', session('user')->id)->first();
        $project->status="Complete";
        $project->active = 0;
        $project->experience = $req->experience;
        $project->delay_reason = $req->delay_reason;
        $project->finish_date = $req->finish_date;
        $project->rate_experience = $req->rate_experience;
        $project->new_skill_learned = $req->new_skill_learned;
        $project->save();
        return response()->json($project);
    }
}
