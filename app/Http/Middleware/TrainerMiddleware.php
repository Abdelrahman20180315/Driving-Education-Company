<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TrainerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::id()){

            return $next($request);

        }
        else{

            return Redirect::back()->withErrors(['msg' => 'من فضلك سجل اولا لاول مرة ثم قم بالمحاولة والضغط علي المدربين مرة اخري لتتمكن من البحث عن مدرب او التسجيل كمدرب']);

        }
    }
}
