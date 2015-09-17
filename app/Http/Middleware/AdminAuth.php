<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminAuth
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
        if(Session::has('user_name'))
        {
            if(Session::get('user_name') == 'admin')
                return $next($request);
            else
                return Redirect::to('/logout');
        }
        else
        {
            return Redirect::to('/login');
        }
    }
}
