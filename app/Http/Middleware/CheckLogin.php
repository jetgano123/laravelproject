<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckLogin
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
<<<<<<< HEAD
        if (Auth::Check() )  {
            dd($request);
       return redirect() ->intended ('Regiter');
=======


        if (Auth::check() )  {

       return redirect() ->intended ('mainpage');
>>>>>>> 57bf3ca6f06152ae037c14408b6f726d951bd54f

    }

    return $next($request);
}
<<<<<<< HEAD
=======



>>>>>>> 57bf3ca6f06152ae037c14408b6f726d951bd54f
}
