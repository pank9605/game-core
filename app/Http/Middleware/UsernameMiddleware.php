<?php

namespace App\Http\Middleware;

use Closure;

class UsernameMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->username == null){
            $notificationUsername = "!Establesca un Nombre de Usuario para comenzar a Trabajar!";
            return redirect('/porfile/'.auth()->user()->id)->with(compact('notificationUsername'));
        }
        return $next($request);
    }
}
