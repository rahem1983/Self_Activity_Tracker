<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController; 
use App\Http\Controllers\DailyHistoryController;

use App\Http\Controllers\PersonalityController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['userHaveAccess']],function(){

    Route::view('NewProject', 'NewProject');
    Route::view('weeklyTarget', 'WeeklyTarget');
    Route::view('Home', 'home');
    Route::view('EndProject_form', 'EndProjectForm');
    Route::view('EditProfileForm', 'editProfile');
    Route::view('Calendar', 'calendar');
    Route::view('AllPtoject', 'allProjects');
    Route::view('PersonalityTest', 'personalityTest');
    Route::view('PersonalityForm', 'personalityForm');

    // Route::view('dailyProgerssForm', 'DailyProgress');
    Route::get('dailyProgerssForm/{id?}',function($id)
    {
        return View::make('DailyProgress')->with('id',$id);
    });

    Route::get('ProjectOverview/{id?}',function($id)
    {
        return View::make('projectOverview')->with('id',$id);
    });

    Route::get('Logout', function(){
        if (session()->has('user')) {  //check if there is any value in the user session or not

            session()->pull('user');  //pulls the value from the session
        }
        return redirect('Login');  // redirects to home
    });

    Route::get('MoodGraph',[UserController::class,'moodGraph']);
    Route::post('EditProfile',[UserController::class,'EditProfile']);

    Route::get('GetSessionUserActiveProject', [ProjectController::class, 'GetSessionUserActiveProject']);
    Route::get('GetSessionUserAllProject', [ProjectController::class, 'GetSessionUserAllProject']);
    Route::post('completeProject', [ProjectController::class, 'completeProject']);
    Route::post('creatProject', [ProjectController::class, 'creatProject']);
    Route::post('EndProject', [ProjectController::class, 'EndProject']);
    Route::post('oneProject', [ProjectController::class, 'oneProject']);

    Route::get('DH', [DailyHistoryController::class, 'getData']);
    Route::post('dailyProgress', [DailyHistoryController::class, 'dailyProgress']);
    Route::post('postWeeklyTarget', [DailyHistoryController::class, 'postData']);
    Route::get('GetSessionUserAllTask', [DailyHistoryController::class, 'GetSessionUserAllTask']);
    Route::get('GetSessionUserTodayTask', [DailyHistoryController::class, 'GetSessionUserTodayTask']);
    Route::get('GetSessionUserincompleteTask', [DailyHistoryController::class, 'GetSessionUserincompleteTask']);


    Route::post('personalityPost',[PersonalityController::class,'PersonalityFnc']);

});

Route::view('Signup', 'Signup');
Route::view('Login', 'login');
Route::post('login',[UserController::class,'login']);
Route::post('signup',[UserController::class,'signup']);

Route::get('/', function () {
    return view('welcome');
});



Route::get('test',[DailyHistoryController::class, 'workingHour']);
Route::view('testCase','testCase');