<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Redirect;

class SentinelSalbar
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
        if(!Sentinel::check())
            return Redirect::to('admin/signin')->with('Алдаа', 'Та нэвтрэх хэрэгтэй!');
        elseif (!Sentinel::inRole('admin')) {

            if(!Sentinel::inRole('arkhangai')){
                 // dd(Sentinel::inRole());
                return Redirect::to('my-account');
            }
        }
        
       return $next($request);
    }
}
