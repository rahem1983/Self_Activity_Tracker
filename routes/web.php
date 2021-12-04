<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('Logout', function(){
    if (session()->has('user')) {  //check if there is any value in the user session or not

        session()->pull('user');  //pulls the value from the session
    }
    return redirect('Login');  // redirects to home
});

Route::view('weeklyTarget', 'WeeklyTarget');

Route::view('dailyProgerss', 'DailyProgress');