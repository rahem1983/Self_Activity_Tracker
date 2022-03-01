<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Daily_history;
use DateTime;
use DateTimeZone;
use Carbon\Carbon;
class AttendanceController extends Controller
{
    public function Attend()
    {
        $attend = new Attendance;
        $attend->user_id = session('user')->id;
        $attend->attend = 1;
        $attend->save();


        // $mins variable have the time in min ho much time left for today
        $timezone=new DateTimeZone( 'Asia/Dhaka' );
        $now=new DateTime( 'now', $timezone );
        $midnight=new DateTime( date('Y-m-d H:i:s', strtotime('11.59pm') ), $timezone );
        $diff = $now->diff( $midnight );
        $mins=( intval( $diff->format('%h') ) * 60 ) + intval( $diff->format('%i') );

        // $cookie = Cookie::make('attend', "1", 1 , "/");
        // $lala = Cookie::get('name');
        // $response = new Response("present");
        // $response->withCookie(cookie('name', "user", 1));

        return redirect('./Home')->withCookie(cookie('attend', 1, $mins));
        
    }

    public function lastMonthAttendance()
    {
        $attendance = Attendance::where("user_id", session('user')->id)->whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->get();   // gets only the data from previous month
        $present = 0;

        $DaysInMonth = cal_days_in_month(CAL_GREGORIAN,$this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at));
        
        $numberofFriday = count($this->countAnydays($this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at), "fri"));
        $numberofSaturday = count($this->countAnydays($this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at), "sat"));
        
        foreach ($attendance as $a) {
            if ($a->attend == 1) {
                $present++;
            }
        }
        $absent = $DaysInMonth - $numberofFriday - $numberofSaturday - $present;
        
        $attendanceArray = [$absent, $present]; 
        return response()->json($attendanceArray);
    }

    public function getcookie(Request $req)
    {
        $DaysInMonth = cal_days_in_month(CAL_GREGORIAN,02,2022);
        echo $DaysInMonth;
        // $day = $this->countFridays(01,2022,"sun");
        // echo count($day);
        // $name = $req->cookie('attend');
        // return view('home');
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
