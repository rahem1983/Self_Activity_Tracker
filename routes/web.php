<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DailyHistoryController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('NewProject', 'NewProject');

Route::view('Login', 'login');
Route::post('login',[UserController::class,'login']);

Route::view('Signup', 'Signup');
Route::post('signup',[UserController::class,'signup']);
Route::get('MoodGraph',[UserController::class,'moodGraph']);


Route::get('Logout', function(){
    if (session()->has('user')) {  //check if there is any value in the user session or not

        session()->pull('user');  //pulls the value from the session
    }
    return redirect('Login');  // redirects to home
});

Route::view('weeklyTarget', 'WeeklyTarget');
Route::view('Home', 'home');
Route::view('dailyProgerss', 'DailyProgress');
Route::view('EndProject_form','EndProjectForm');

Route::post('creatProject', [ProjectController::class, 'creatProject']);
Route::get('GetSessionUserActiveProject', [ProjectController::class, 'GetSessionUserActiveProject']);
Route::get('GetSessionUserAllProject', [ProjectController::class, 'GetSessionUserAllProject']);
Route::post('completeProject', [ProjectController::class, 'completeProject']);
Route::post('EndProject', [ProjectController::class, 'EndProject']);

Route::get('DH', [DailyHistoryController::class, 'getData']);
Route::post('postWeeklyTarget', [DailyHistoryController::class, 'postData']);
Route::post('dailyProgress', [DailyHistoryController::class, 'dailyProgress']);

