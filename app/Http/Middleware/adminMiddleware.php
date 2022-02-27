<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('user')){
            $id = session('user')->id;
            $user = User::where('id',$id)->first();
            if($user != null && $user->type == "admin"){
                return $next($request);
            }
            else{
                return redirect('/');
            }

        }
        else{
            return redirect('/');
        }
    }
}
