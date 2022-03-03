<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Daily_history;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

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

    public function individualTeamReport()
    {
        $teams = Team::orderby('id')->get();
        $attendance = Attendance::whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->get();   // gets only the data from previous month

        $DaysInMonth = cal_days_in_month(CAL_GREGORIAN,$this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at));

        $numberofFriday = $this->countAnydays($this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at), "fri");
        $numberofSaturday = $this->countAnydays($this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at), "sat");

        $totalWorkDay = $DaysInMonth - count($numberofFriday) - count($numberofSaturday);
        $totalWorkHr = 0;
        $avgWorkHr = 0;

        $individualReport = [];
        $teamArray = [];
        $workhour = [];
        $dayesOfMonth = [];

        foreach ($teams as $team) {

            array_push($teamArray, $team->title);
            $reports = Attendance::select('attendances.*','users.team_id', 'teams.title')->join('users', 'attendances.user_id', '=', 'users.id')->join('teams', 'users.team_id', '=', 'teams.id')->whereMonth('attendances.created_at', '=', Carbon::now()->subMonth()->month)->where('team_id',$team->id);
            $dayesOfMonth = [];

            for ($i=0; $i < $DaysInMonth; $i++) { 

                array_push($dayesOfMonth, ($i+1));
                $sub = DB::table( DB::raw("({$reports->toSql()}) as sub"))->mergeBindings($reports->getQuery())->whereDay('created_at', '=', ($i+1))->count(); 

                if ($sub != 0) {
                    array_push($workhour, ($sub*2));
                    $totalWorkHr+=($sub*2);
                } 
                else {
                    array_push($workhour, 0);
                }
            }

            array_push($individualReport, [
                'title' => $team->title,
                'totalWorkHr' => $totalWorkHr,
                'avgWorkHr' => $totalWorkHr/$totalWorkDay,
                'workHrArray' => $workhour
            ]);

            $totalWorkHr = 0;
            $workhour = [];
        }

        $response = [
            'month' => [$this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at)],
            'dayesOfMonth' => $dayesOfMonth,
            'individualReport' => $individualReport
        ];

        return response()->json($response);
        
    }

    public function lstThreeMonthReport()
    {
        $attendance = Attendance::whereMonth('created_at', '=', Carbon::now()->subMonth(1)->month)->get();   // gets only the data from previous month

        $DaysInMonth = cal_days_in_month(CAL_GREGORIAN,$this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at));

        $numberofFriday = $this->countAnydays($this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at), "fri");
        $numberofSaturday = $this->countAnydays($this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at), "sat");

        $totalWorkDay = $DaysInMonth - count($numberofFriday) - count($numberofSaturday);
        $totalWorkHr = 0;
        $avgWorkHr = 0;

        $individualReport = [];
        $teamArray = [];
        $workhour = [];
        $dayesOfMonth = [];

        foreach ($teams as $team) {

            array_push($teamArray, $team->title);
            $reports = Attendance::select('attendances.*','users.team_id', 'teams.title')->join('users', 'attendances.user_id', '=', 'users.id')->join('teams', 'users.team_id', '=', 'teams.id')->whereMonth('attendances.created_at', '=', Carbon::now()->subMonth()->month)->where('team_id',$team->id);
            $dayesOfMonth = [];

            for ($i=0; $i < $DaysInMonth; $i++) { 

                array_push($dayesOfMonth, ($i+1));
                $sub = DB::table( DB::raw("({$reports->toSql()}) as sub"))->mergeBindings($reports->getQuery())->whereDay('created_at', '=', ($i+1))->count(); 

                if ($sub != 0) {
                    array_push($workhour, ($sub*2));
                    $totalWorkHr+=($sub*2);
                } 
                else {
                    array_push($workhour, 0);
                }
            }

            array_push($individualReport, [
                'title' => $team->title,
                'totalWorkHr' => $totalWorkHr,
                'avgWorkHr' => $totalWorkHr/$totalWorkDay,
                'workHrArray' => $workhour
            ]);

            $totalWorkHr = 0;
            $workhour = [];
        }

        $response = [
            'dayesOfMonth' => $dayesOfMonth,
            'individualReport' => $individualReport
        ];

        return response()->json($response);
    }

    public function getMonth($time)
    {
        $newtime = strtotime($time);
	    $time->day = date('m',$newtime);
        return $time->day;
    }

    public function getMonthName($time)
    {
        $newtime = strtotime($time);
	    $time->day = date('M',$newtime);
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
