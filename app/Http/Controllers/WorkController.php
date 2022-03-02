<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Daily_history;
use App\Models\Team;
use DateTime;
use DateTimeZone;
use Carbon\Carbon;

class WorkController extends Controller
{
    public function WorkOverview()
    {
        $teams = Team::all();
        $title = [];
        $general_project = [];
        $collaborated_project = [];
        $mega_project = [];

        foreach ($teams as $team) {
            array_push($title, $team->title);

            array_push($general_project, $team->general_project);
            array_push($collaborated_project, $team->collaborated_project);
            array_push($mega_project, $team->mega_project);
        }
        $response = [
            'title' => $title,
            'general_project' => $general_project,
            'collaborated_project' => $collaborated_project,
            'mega_project' => $mega_project
        ];
        
        return response()->json($response);
    }

    public function getMonth($time)
    {
        $newtime = strtotime($time);
	    $time->day = date('m',$newtime);
        return $time->day;
    }

    public function getDay($time)
    {
        $newtime = strtotime($time);
	    $time->day = date('w',$newtime);
        return $time->day;
    }

    public function getDate($time)
    {
        $newtime = strtotime($time);
	    $time->day = date('d',$newtime);
        return $time->day;
    }

    public function getYear($time)
    {
        $newtime = strtotime($time);
	    $time->day = date('y',$newtime);
        return $time->day;
    }

    function countAnydays($month, $year, $day){       // returns the dates of the monthe of a particular day
        $ts=strtotime('first '.$day.' of '.$year.'-'.$month.'-01');
        $ls=strtotime('last day of '.$year.'-'.$month.'-01');
        $fridays=array(date('Y-m-d', $ts));
        while(($ts=strtotime('+1 week', $ts))<=$ls){
            $fridays[]=date('Y-m-d', $ts);
        }
        return $fridays;
    }
}
