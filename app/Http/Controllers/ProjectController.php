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
        
        $project->save();

        return response()->json($project);
        // return response()->json($project);
    }
    public function GetSessionUserProject(){
        $id = session('user')->id;
        $project = Project::where('user_id', $id)->get();
        return response()->json($project);
    }
}
